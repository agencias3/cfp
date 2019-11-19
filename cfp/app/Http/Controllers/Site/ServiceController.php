<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Entities\Form;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Mail\Site\Service\ServiceClientMail;
use AgenciaS3\Mail\Site\Service\ServiceMail;
use AgenciaS3\Repositories\PostRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceContactRepository;
use AgenciaS3\Repositories\ServiceItemRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Services\SEOService;
use AgenciaS3\Validators\ServiceContactValidator;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class ServiceController extends Controller
{

    protected $repository;

    protected $serviceItemRepository;

    protected $segmentRepository;

    protected $postRepository;

    protected $serviceContactRepository;

    protected $serviceContactValidator;

    protected $SEOService;

    public function __construct(ServiceRepository $repository,
                                ServiceItemRepository $serviceItemRepository,
                                SegmentRepository $segmentRepository,
                                PostRepository $postRepository,
                                ServiceContactRepository $serviceContactRepository,
                                ServiceContactValidator $serviceContactValidator,
                                SEOService $SEOService)
    {
        $this->repository = $repository;
        $this->serviceItemRepository = $serviceItemRepository;
        $this->segmentRepository = $segmentRepository;
        $this->postRepository = $postRepository;
        $this->serviceContactRepository = $serviceContactRepository;
        $this->serviceContactValidator = $serviceContactValidator;
        $this->SEOService = $SEOService;
    }

    public function index(SiteRequest $request)
    {
        $seoPage = $this->SEOService->getSeoPageSession(3);
        $this->SEOService->getPage($seoPage);

        $services = $this->repository->orderBy('order', 'asc')->findByField('active', 'y');

        return view('site.service.index', compact('seoPage', 'services'));
    }

    public function show(SiteRequest $request, $seo_link)
    {
        $service = $this->repository->findWhere(['active' => 'y', 'seo_link' => $seo_link])->first();
        if ($service) {
            $items = $this->serviceItemRepository->orderBy('order', 'asc')->findWhere(['service_id' => $service->id, 'active' => 'y']);

            $cover = null;
            if (isPost($service->image)) {
                $cover = asset('uploads/service/' . $service->image);
            }

            $seoPage = $this->SEOService->getSeoPageSession(3);
            $this->SEOService->getPageComplement($service, $seoPage['name'], $cover, $cover);

            $segments = $this->segmentRepository->scopeQuery(function ($query) use ($service) {
                return $query->leftJoin('service_segments as ss', 'ss.segment_id', '=', 'segments.id')
                    ->select('segments.*')
                    ->where('ss.service_id', $service->id)
                    ->where('active', 'y');
            })->all();

            $posts = $this->postRepository->getPostsService($service, 3);

            return view('site.service.show', compact('service', 'seoPage', 'items', 'segments', 'posts'));
        }

        return redirect(route('service'), 301);
    }

    public function store(SiteRequest $request)
    {
        try {
            $data = $request->all();
            $data['view'] = 'n';

            $data['ip'] = $request->ip();
            $data['session_id'] = $request->session()->getId();

            $this->serviceContactValidator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $contact = $this->serviceContactRepository->create($data);

            $this->sendMail($contact);

            return response()->json([
                'success' => true,
                'message' => 'Mensagem enviada com sucesso!'
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
        $form = Form::with('emails')->find(4);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new ServiceMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new ServiceClientMail($dados, $form));
    }

}
