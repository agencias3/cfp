<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Entities\Form;
use AgenciaS3\Entities\SeoPage;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Mail\Site\Work\WorkClientMail;
use AgenciaS3\Mail\Site\Work\WorkMail;
use AgenciaS3\Repositories\VacancyRepository;
use AgenciaS3\Repositories\WorkRepository;
use AgenciaS3\Services\SEOService;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\WorkValidator;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class WorkController extends Controller
{

    protected $repository;

    protected $validator;

    protected $vacancyRepository;

    protected $path;

    public function __construct(WorkRepository $repository,
                                WorkValidator $validator,
                                VacancyRepository $vacancyRepository)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->vacancyRepository = $vacancyRepository;
        $this->path = 'uploads/work/';
    }

    public function index(SiteRequest $request)
    {
        $seoPage = SeoPage::find(5);
        (new SEOService)->getPage($seoPage);

        $vacancies = $this->vacancyRepository->orderBy('order', 'asc')->findByField('active', 'y');

        return view('site.work.index', compact('vacancies'));
    }

    public function store(SiteRequest $request)
    {
        try {
            $data = $request->all();
            $data['view'] = 'n';
            $data['ip'] = $request->ip();
            $data['session_id'] = $request->session()->getId();

            if (isset($data['file'])) {
                $image = (new UtilObjeto)->uploadFile($request, $data, $this->path, 'file', 'max:1024');
                if ($image) {
                    $data['file'] = $image;
                }
            }

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $contact = $this->repository->create($data);

            $this->sendMail($contact);

            return response()->json([
                'success' => true,
                'message' => 'Contato enviado com sucesso!'
            ]);

        } catch (ValidatorException $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessageBag()
            ]);
        }
    }

    public function sendMail($dados)
    {
        $form = Form::with('emails')->find(3);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new WorkMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new WorkClientMail($dados, $form));
    }

}
