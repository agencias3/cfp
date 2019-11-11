<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\ClientRepository;
use AgenciaS3\Repositories\ProductFileRepository;
use AgenciaS3\Repositories\ProductImageRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\ProductTextRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceItemRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Services\SEOService;

class ServiceController extends Controller
{

    protected $repository;

    protected $serviceItemRepository;

    protected $segmentRepository;

    protected $SEOService;

    public function __construct(ServiceRepository $repository,
                                ServiceItemRepository $serviceItemRepository,
                                SegmentRepository $segmentRepository,
                                SEOService $SEOService)
    {
        $this->repository = $repository;
        $this->serviceItemRepository = $serviceItemRepository;
        $this->segmentRepository = $segmentRepository;
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

            $segments = $this->segmentRepository->scopeQuery(function($query) use($service){
                return $query->leftJoin('service_segments as ss', 'ss.segment_id', '=', 'segments.id')
                    ->select('segments.*')
                    ->where('ss.service_id', $service->id)
                    ->where('active', 'y');
            })->all();

            return view('site.service.show', compact('service', 'seoPage', 'items', 'segments'));
        }

        return redirect(route('service'), 301);
    }

}
