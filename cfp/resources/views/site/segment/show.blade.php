@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-bottom-80 relative z-index-1 top-page p-bottom-1024-0">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
                <article class="w-100 d_flex justify-center">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35">
                            {{ $segment->name }}
                        </h1>
                    </div>
                </article>
                @include('site.layouts.bread-crumbs')
            </article>
        </div>
    </section>
    <section class="w-100 bg-white d_flex wrap relative z-index-2 content-page-internal p-top-1024-30 p-left-1024-5 p-right-1024-5">
        <section class="flex-1 w-1024-100">
            <article class="w-90 p-top-80 f-right w-1024-100">
                @if(isPost($segment->call))
                <h2 class="w-100 title-segment f-size-1024-35 f-size-600-20">
                    {!! $segment->call !!}
                </h2>
                @endif
                <div class="w-100 m-top-30 text m-top-1024-20 t-align-1024-c">
                    {!! $segment->description !!}
                </div>
                @if(isPost($segment->call_items))
                <span class="w-100 m-top-50 t-upper l-height-14 main-color f-size-16 m-top-1024-20 t-align-1024-c">
                    {{ $segment->call_items }}
                </span>
                @endif

            </article>
        </section>
        @if(isPost($segment->image))
        <aside class="w-50 w-1024-100 h-1024-350-px m-top-1024-30 h-600-250-px" style="background: url({{ asset('uploads/segment/'.$segment->image) }}) no-repeat;background-position: center center;background-size: cover;"></aside>
        @endif
    </section>
    <section class="w-100 p-top-80 p-bottom-30 bg-white p-top-1024-30 p-bottom-1024-0">
        <div class="center">
            @include('site.segment.inc.segments')
            @include('site.segment.inc.blog')
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex wrap box-contact">
                @include('site.segment.inc._form')
                @include('site.layouts._map')
            </article>
        </div>
    </section>
@endsection