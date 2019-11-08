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
use AgenciaS3\Repositories\ServiceItemRepository;
use AgenciaS3\Repositories\ServiceRepository;
use AgenciaS3\Services\SEOService;

class ServiceController extends Controller
{

    protected $repository;

    protected $serviceItemRepository;

    protected $SEOService;

    public function __construct(ServiceRepository $repository,
                                ServiceItemRepository $serviceItemRepository,
                                SEOService $SEOService)
    {
        $this->repository = $repository;
        $this->serviceItemRepository = $serviceItemRepository;
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
            /*
            $this->SEOService->getPageComplement($product, $seoPage['name'], $cover, $cover);
            $products = $this->categoryRepository->orderBy('order', 'asc')->scopeQuery(function ($query) use ($product) {
                return $query->where('active', 'y');
            })->paginate(2);

            $clients = $this->clientRepository->scopeQuery(function($query) use($product){
                return $query->leftJoin('product_clients as pc', 'pc.client_id', '=', 'clients.id')
                    ->select('clients.*')
                    ->where('pc.product_id', $product->id)
                    ->where('active', 'y');
            })->all();
            */

            return view('site.service.show', compact('service', 'seoPage', 'items'));
        }

        return redirect(route('service'), 301);
    }

}
