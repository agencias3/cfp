<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Entities\Form;
use AgenciaS3\Entities\FormEmail;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Mail\Site\Newsletter\NewsletterClientMail;
use AgenciaS3\Mail\Site\Newsletter\NewsletterMail;
use AgenciaS3\Repositories\NewsletterRepository;
use AgenciaS3\Services\UtilObjeto;
use AgenciaS3\Validators\NewsletterValidator;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class NewsletterController extends Controller
{

    protected $repository;

    protected $validator;

    protected $utilObjeto;

    public function __construct(NewsletterRepository $repository,
                                NewsletterValidator $validator,
                                UtilObjeto $utilObjeto)
    {
        $this->repository = $repository;
        $this->validator = $validator;
        $this->utilObjeto = $utilObjeto;
    }

    public function store(SiteRequest $request)
    {
        $data = $request->all();
        $check = $this->repository->findByField('email', $data['email']);
        if ($check->toArray()) {
            return response()->json([
                'error' => true,
                'message' => ["E-mail já cadastrado!"]
            ]);
        } else {
            try {
                $data['view'] = 'n';
                $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
                $dados = $this->repository->create($data);

                $this->sendMail($dados);

                return response()->json([
                    'success' => true,
                    'message' => "E-mail cadastrado com sucesso!"
                ]);

            } catch (ValidatorException $e) {
                return response()->json([
                    'error' => true,
                    'message' => $e->getMessageBag()
                ]);
            }
        }
    }

    public function sendMail($dados)
    {
        $form = Form::with('emails')->find(1);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new NewsletterMail($dados));
        }

        //email client
        Mail::to($dados->email)->send(new NewsletterClientMail($dados, $form));
    }

}
