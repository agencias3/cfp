<?php

namespace AgenciaS3\Http\Controllers\Site;

use AgenciaS3\Http\Controllers\Controller;
use AgenciaS3\Http\Requests\SiteRequest;
use AgenciaS3\Repositories\TeamRepository;
use AgenciaS3\Services\SEOService;

class AboutController extends Controller
{

    protected $SEOService;

    protected $teamRepository;

    public function __construct(SEOService $SEOService, TeamRepository $teamRepository)
    {
        $this->SEOService = $SEOService;
        $this->teamRepository = $teamRepository;
    }

    public function index(SiteRequest $request)
    {
        $seoPage = $this->SEOService->getSeoPageSession(2);
        $this->SEOService->getPage($seoPage);

        $partners = $this->teamRepository->orderBy('order')->findWhere(['active' => 'y', 'type' => 'partner']);
        $associates = $this->teamRepository->orderBy('order')->findWhere(['active' => 'y', 'type' => 'associate']);

        return view('site.about.index', compact('seoPage', 'partners', 'associates'));
    }

}
