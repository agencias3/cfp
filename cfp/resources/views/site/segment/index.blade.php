@extends('site.layouts.app')
@section('content')
    <section class="w-100 relative z-index-1 top-page">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                <div class="d_flex direction-column">
                    <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35 t-align-600-c">
                        Segmentos
                    </h1>
                    <span class="d_flex t-align-600-c">
                        <b class="w-600-100">
                            DE ATUAÇÃO
                        </b>
                    </span>
                </div>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-20 p-bottom-80 bg-white relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <article class="w-100 d_flex wrap justify-center list-group-blog">
                @if($segments->isEmpty())
                    <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20">
                        Nenhum registro encontrado!
                    </div>
                @else
                    @foreach($segments as $row)
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="{{ route('segment.show', $row->seo_link) }}" title="{{ $row->name }}">
                        @if(isPost($row->image))
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('uploads/segment/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                        </figure>
                        @endif
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                @if(isPost($row->icon))
                                <div class="self-center smooth">
                                    <img src="{{ asset('uploads/segment/'.$row->icon) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                                </div>
                                @endif
                                @if(isPost($row->icon_hover))
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('uploads/segment/'.$row->icon_hover) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                                </div>
                                @endif
                            </figure>
                            <span class="w-100 smooth">
                                {{ $row->name }}
                            </span>
                        </article>
                    </a>
                </div>
                    @endforeach
                @endif
            </article>
        </div>
    </section>
@endsection