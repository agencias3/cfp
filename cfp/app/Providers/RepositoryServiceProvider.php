<?php

namespace AgenciaS3\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\AgenciaS3\Repositories\UserRepository::class, \AgenciaS3\Repositories\UserRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ConfigurationRepository::class, \AgenciaS3\Repositories\ConfigurationRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FormRepository::class, \AgenciaS3\Repositories\FormRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FormEmailRepository::class, \AgenciaS3\Repositories\FormEmailRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\NewsletterRepository::class, \AgenciaS3\Repositories\NewsletterRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageRepository::class, \AgenciaS3\Repositories\PageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageImageRepository::class, \AgenciaS3\Repositories\PageImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\BannerRepository::class, \AgenciaS3\Repositories\BannerRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\BannerMobileRepository::class, \AgenciaS3\Repositories\BannerMobileRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SeoPageRepository::class, \AgenciaS3\Repositories\SeoPageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TagRepository::class, \AgenciaS3\Repositories\TagRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostRepository::class, \AgenciaS3\Repositories\PostRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostImageRepository::class, \AgenciaS3\Repositories\PostImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostTagRepository::class, \AgenciaS3\Repositories\PostTagRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\KeywordRepository::class, \AgenciaS3\Repositories\KeywordRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ContactRepository::class, \AgenciaS3\Repositories\ContactRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FaqRepository::class, \AgenciaS3\Repositories\FaqRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\FaqLikeOrNotRepository::class, \AgenciaS3\Repositories\FaqLikeOrNotRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\StoreRepository::class, \AgenciaS3\Repositories\StoreRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\StoreImageRepository::class, \AgenciaS3\Repositories\StoreImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\StoreRelatedRepository::class, \AgenciaS3\Repositories\StoreRelatedRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\StoreSegmentRepository::class, \AgenciaS3\Repositories\StoreSegmentRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\EnterpriseRepository::class, \AgenciaS3\Repositories\EnterpriseRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentRepository::class, \AgenciaS3\Repositories\SegmentRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentImageRepository::class, \AgenciaS3\Repositories\SegmentImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\EnterpriseImageRepository::class, \AgenciaS3\Repositories\EnterpriseImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PageItemRepository::class, \AgenciaS3\Repositories\PageItemRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TipRepository::class, \AgenciaS3\Repositories\TipRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TipItemRepository::class, \AgenciaS3\Repositories\TipItemRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductRepository::class, \AgenciaS3\Repositories\ProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductImageRepository::class, \AgenciaS3\Repositories\ProductImageRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductFileRepository::class, \AgenciaS3\Repositories\ProductFileRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductTextRepository::class, \AgenciaS3\Repositories\ProductTextRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ClientRepository::class, \AgenciaS3\Repositories\ClientRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentClientRepository::class, \AgenciaS3\Repositories\SegmentClientRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentProductRepository::class, \AgenciaS3\Repositories\SegmentProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ProductClientRepository::class, \AgenciaS3\Repositories\ProductClientRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\WorkRepository::class, \AgenciaS3\Repositories\WorkRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\CategoryRepository::class, \AgenciaS3\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PartnerRepository::class, \AgenciaS3\Repositories\PartnerRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PartnerContactRepository::class, \AgenciaS3\Repositories\PartnerContactRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PartnerProviderRepository::class, \AgenciaS3\Repositories\PartnerProviderRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PartnerClientRepository::class, \AgenciaS3\Repositories\PartnerClientRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PartnerProductRepository::class, \AgenciaS3\Repositories\PartnerProductRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ServiceRepository::class, \AgenciaS3\Repositories\ServiceRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentItemRepository::class, \AgenciaS3\Repositories\SegmentItemRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ServiceItemRepository::class, \AgenciaS3\Repositories\ServiceItemRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ServiceContactRepository::class, \AgenciaS3\Repositories\ServiceContactRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\TeamRepository::class, \AgenciaS3\Repositories\TeamRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\ServiceSegmentRepository::class, \AgenciaS3\Repositories\ServiceSegmentRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostServiceRepository::class, \AgenciaS3\Repositories\PostServiceRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\PostSegmentRepository::class, \AgenciaS3\Repositories\PostSegmentRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\SegmentContactRepository::class, \AgenciaS3\Repositories\SegmentContactRepositoryEloquent::class);
        $this->app->bind(\AgenciaS3\Repositories\VacancyRepository::class, \AgenciaS3\Repositories\VacancyRepositoryEloquent::class);
        //:end-bindings:
    }
}
