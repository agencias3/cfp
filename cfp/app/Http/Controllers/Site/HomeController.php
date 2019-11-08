<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\BannerMobileRepository;
use AgenciaS3\Repositories\BannerRepository;
use AgenciaS3\Repositories\CategoryRepository;
use AgenciaS3\Repositories\PostRepository;
use AgenciaS3\Repositories\ProductRepository;
use AgenciaS3\Repositories\SegmentRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Repositories\StoreRepository;
use AgenciaS3\Services\SEOService;

class HomeController extends Controller
{

    protected $bannerRepository;

    protected $bannerMobileRepository;

    protected $serviceRepository;

    protected $segmentRepository;

    protected $postRepository;

    protected $SEOService;

    public function __construct(BannerRepository $bannerRepository,
                                BannerMobileRepository $bannerMobileRepository,
                                ServiceRepository $serviceRepository,
                                SegmentRepository $segmentRepository,
                                PostRepository $postRepository,
                                SEOService $SEOService)
    {
        $this->bannerRepository = $bannerRepository;
        $this->bannerMobileRepository = $bannerMobileRepository;
        $this->serviceRepository = $serviceRepository;
        $this->segmentRepository = $segmentRepository;
        $this->postRepository = $postRepository;
        $this->SEOService = $SEOService;
    }

    public function index(SiteRequest $request)
    {
        $seoPage = $this->SEOService->getSeoPageSession(1);
        $this->SEOService->getPage($seoPage);

        $banners = $this->bannerRepository->showStore(5);
        $mobile = $this->bannerMobileRepository->showStore(1);
        $segments = $this->segmentRepository->orderBy('order', 'asc')->scopeQuery(function($query){
            return $query->where('active', 'y');
        })->paginate(2);
        $posts = $this->postRepository->getPostsActive(3);
        //dd($banners);

        $services = $this->serviceRepository->orderBy('order', 'asc')->findByField('active', 'y');

        return view('site.home.index', compact('seoPage', 'banners', 'segments', 'posts', 'mobile', 'services'));
    }

}
