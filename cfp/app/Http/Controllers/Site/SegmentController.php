<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\SegmentItemRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Services\SEOService;

class SegmentController extends Controller
{

    protected $segmentRepository;

    protected $segmentItemRepository;

    protected $serviceRepository;

    protected $SEOService;

    public function __construct(SegmentRepository $segmentRepository,
                                SegmentItemRepository $segmentItemRepository,
                                ServiceRepository $serviceRepository,
                                SEOService $SEOService)
    {
        $this->segmentRepository = $segmentRepository;
        $this->segmentItemRepository = $segmentItemRepository;
        $this->serviceRepository = $serviceRepository;
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

            /*
            $clients = $this->clientRepository->scopeQuery(function($query) use($segment){
                return $query->leftJoin('segment_clients as sc', 'sc.client_id', '=', 'clients.id')
                    ->select('clients.*')
                    ->where('sc.segment_id', $segment->id)
                    ->where('active', 'y');
            })->all();

            $products = $this->productRepository->scopeQuery(function($query) use($segment){
                return $query->leftJoin('segment_products as sp', 'sp.product_id', '=', 'products.id')
                    ->select('products.*')
                    ->where('sp.segment_id', $segment->id)
                    ->where('active', 'y');
            })->all();

            $posts = $this->postRepository->getPostsSegment($segment->id, 3);
            */
            $services = $this->serviceRepository->scopeQuery(function($query) use($segment){
                return $query->leftJoin('service_segments as ss', 'ss.service_id', '=', 'services.id')
                    ->select('services.*')
                    ->where('ss.segment_id', $segment->id)
                    ->where('active', 'y');
            })->all();

            return view('site.segment.show', compact('segment', 'seoPage', 'items', 'services'));
        }

        return redirect(route('segment'), 301);
    }

}
