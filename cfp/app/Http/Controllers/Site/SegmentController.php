<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Entities\Form;
use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Mail\Site\Contact\ContactClientMail;
use AgenciaS3\Mail\Site\Contact\ContactMail;
use AgenciaS3\Mail\Site\Segment\SegmentClientMail;
use AgenciaS3\Mail\Site\Segment\SegmentMail;
use AgenciaS3\Repositories\PostRepository;
use AgenciaS3\Repositories\SegmentContactRepository;
use AgenciaS3\Repositories\SegmentItemRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Services\SEOService;
use AgenciaS3\Validators\SegmentContactValidator;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;

class SegmentController extends Controller
{

    protected $segmentRepository;

    protected $segmentItemRepository;

    protected $serviceRepository;

    protected $postRepository;

    protected $segmentContactRepository;

    protected $segmentContactValidator;

    protected $SEOService;

    public function __construct(SegmentRepository $segmentRepository,
                                SegmentItemRepository $segmentItemRepository,
                                ServiceRepository $serviceRepository,
                                PostRepository $postRepository,
                                SegmentContactRepository $segmentContactRepository,
                                SegmentContactValidator $segmentContactValidator,
                                SEOService $SEOService)
    {
        $this->segmentRepository = $segmentRepository;
        $this->segmentItemRepository = $segmentItemRepository;
        $this->serviceRepository = $serviceRepository;
        $this->postRepository = $postRepository;
        $this->segmentContactRepository = $segmentContactRepository;
        $this->segmentContactValidator = $segmentContactValidator;
        $this->SEOService = $SEOService;
    }

    public function index(SiteRequest $request)
    {
        $seoPage = $this->SEOService->getSeoPageSession(7);
        $this->SEOService->getPage($seoPage);

        $segments = $this->segmentRepository->orderBy('order', 'asc')->findByField('active', 'y');

        return view('site.segment.index', compact('seoPage', 'segments'));
    }

    public function getSegmentActive()
    {
        return $this->segmentRepository->orderBy('order', 'asc')->findByField('active', 'y');
    }

    public function show(SiteRequest $request, $seo_link)
    {
        $segment = $this->segmentRepository->findWhere(['active' => 'y', 'seo_link' => $seo_link])->first();
        if ($segment) {
            $items = $this->segmentItemRepository->orderBy('order', 'asc')->findWhere(['segment_id' => $segment->id, 'active' => 'y']);

            $cover = null;
            if (isPost($segment->image)) {
                $cover = asset('uploads/segment/' . $segment->image);
            }

            $seoPage = $this->SEOService->getSeoPageSession(7);
            $this->SEOService->getPageComplement($segment, $seoPage['name'], $cover, $cover);

            $posts = $this->postRepository->getPostsSegment($segment, 6);;
            $services = $this->serviceRepository->scopeQuery(function($query) use($segment){
                return $query->leftJoin('service_segments as ss', 'ss.service_id', '=', 'services.id')
                    ->select('services.*')
                    ->where('ss.segment_id', $segment->id)
                    ->where('active', 'y');
            })->all();

            return view('site.segment.show', compact('segment', 'seoPage', 'items', 'services', 'posts'));
        }

        return redirect(route('segment'), 301);
    }

    public function store(SiteRequest $request)
    {
        try {
            $data = $request->all();
            $data['view'] = 'n';

            $data['ip'] = $request->ip();
            $data['session_id'] = $request->session()->getId();

            $this->segmentContactValidator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $contact = $this->segmentContactRepository->create($data);

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
        $form = Form::with('emails')->find(5);

        //email admin
        if ($form->emails) {
            $emails = [];
            foreach ($form->emails as $row) {
                $emails[] = $row->email;
            }
            Mail::to($emails)->send(new SegmentMail($dados));
        }

        //email client
        return Mail::to($dados)->send(new SegmentClientMail($dados, $form));
    }

}
