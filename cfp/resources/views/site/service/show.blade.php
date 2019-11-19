@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-bottom-80 relative z-index-1 top-page p-bottom-1024-30">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80">
                <article class="w-100 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35 t-align-600-c">
                            {{ $service->name }}
                        </h1>
                    </div>
                </article>
                @include('site.layouts.bread-crumbs')
            </article>
        </div>
    </section>
    <section class="w-100 bg-white d_flex relative z-index-2 content-page-internal">
        <section class="flex-1">
            <article class="w-90 p-top-80 f-right p-top-1024-30">
                @if($service->call)
                <h2 class="w-100 title-segment">
                    {{ $service->call }}
                </h2>
                @endif
                <div class="w-100 m-top-30 text">
                    {!! $service->description !!}
                </div>
            </article>
        </section>
        @if(isPost($service->image))
        <aside class="w-50" style="background: url({{ asset('uploads/service/'.$service->image) }}) no-repeat;background-position: center center;background-size: cover;"></aside>
        @Endif
    </section>
    @include('site.service.inc.items')
    <section class="w-100 p-top-80 p-bottom-30 bg-white p-top-1024-30">
        <div class="center">
            @include('site.service.inc.segments')
            @include('site.service.inc.blog')
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex box-contact">
                @include('site.service.inc._form')
                @include('site.layouts._map')
            </article>
        </div>
    </section>
@endsection