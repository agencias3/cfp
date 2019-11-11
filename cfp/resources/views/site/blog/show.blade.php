@extends('site.layouts.app')
@section('content')
    <section class="w-100 relative z-index-1 top-page p-bottom-1024-30">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80">
                <article class="w-100 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                    <div class="d_flex direction-column">
                        <h2 class="w-100 f-size-45 color-white font-2 f-size-1024-35">
                            Notícias e Artigos
                        </h2>
                    </div>
                </article>
                @include('site.layouts.bread-crumbs')
            </article>
        </div>
    </section>
    <section class="w-100 p-bottom-80 bg-white relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <section class="w-100 container p-top-80 p-top-1024-30">
                <h1 class="w-100 m-bottom-50 l-height-14 t-align-c f-size-30 color-black f-w-700 m-bottom-1024-30 t-align-1024-c f-size-1024-20">
                    {{ $post->name }}
                </h1>
                @if(!$images->isEmpty())
                <div class="w-70 m-left-15 m-bottom-50 overflow-h b-radius-10 main-bg gallery-wrapper w-800-100 m-bottom-800-30">
                    <div class="w-100 relative slider-slick-1">
                        @foreach($images as $row)
                        <div class="f-left">
                            <a class="w-100" href="{{ asset('uploads/post/'.$row->image) }}" title="{{ $row->label }}">
                                <figure class="w-100">
                                    <img class="w-100 smooth" src="{{ asset('uploads/post/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
                <div class="w-100 d_flex justify-600-center">
                    <img src="{{ asset('assets/site/images/date.png') }}" title="{{ mysql_to_data($post->date) }}" alt="{{ mysql_to_data($post->date) }}" />
                    <span class="m-top-8 m-left-15-px color-grey f-size-16">
                        {{ mysql_to_data($post->date) }}
                    </span>
                </div>
                <div class="w-100 m-top-30 text t-align-1024-c">
                    {!! $post->description !!}
                </div>
                @if(!$postTags->isEmpty())
                <ul class="w-100 m-top-25 d_flex wrap list-group-tags-2 m-top-1024-20 justify-1024-center">
                    <li>
                        TAGS:
                    </li>
                    @foreach($postTags as $row)
                        <li>
                            <a href="{{ route('blog.tag', $row->tag->seo_link) }}" title="{{ $row->tag->name }}">
                                #{{ $row->tag->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
                @endif
                <div class="w-100 m-top-30 d_flex wrap box-social-page m-top-1024-20 direction-600-column">
                    <section class="c-left d_flex w-600-100 justify-600-center">
                        <a class="self-center m-top-2 t-decoration" href="{{ route('blog') }}" title="Voltar para o Blog">
                            <img class="m-top-2" src="{{ asset('assets/site/images/back.png') }}" title="Voltar para o Blog" alt="Voltar para o Blog">
                            <span class="m-left-15-px f-w-600 main-color f-size-16">
                                Voltar para o Blog
                            </span>
                        </a>
                    </section>
                    <aside class="c-left flex-1 d_flex justify-end justify-600-center m-top-600-20">
                        <ul class="d_flex">
                            <li class="self-center m-top-2 f-w-600 main-color f-size-16 display-600-none">
                                COMPARTILHAR
                            </li>
                            <li class="m-left-10-px m-left-600-0">
                                <a href="https://www.facebook.com/sharer.php?u={{ Route::getCurrentRequest()->getUri() }}" target="_blank" title="Facebook">
                                    <img src="{{ asset('assets/site/images/icon-social-1.png') }}" title="Facebook" alt="Facebook">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="http://twitter.com/home?status={{ Route::getCurrentRequest()->getUri() }}" target="_blank" title="Twitter">
                                    <img src="{{ asset('assets/site/images/icon-social-2.png') }}" title="Twitter" alt="Twitter">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="https://plus.google.com/share?url={{ Route::getCurrentRequest()->getUri() }}" target="_blank" title="GooglePlus">
                                    <img src="{{ asset('assets/site/images/icon-social-3.png') }}" title="GooglePlus" alt="GooglePlus">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="mailto:email@email.com?subject={{ Route::getCurrentRequest()->getUri() }}" target="_blank" title="E-mail">
                                    <img src="{{ asset('assets/site/images/icon-social-4.png') }}" title="E-mail" alt="E-mail">
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </section>
            @if(!$posts->isEmpty())
            <section class="w-100 m-top-80 m-top-1024-30">
                <h4 class="w-100 container main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    Notícias Relacionadas
                </h4>
                <aside class="w-100 m-top-20 d_flex wrap justify-center list-group-2 list-group-blog">
                    @foreach($posts as $row)
                        @include('site.blog._li_list')
                    @endforeach
                </aside>
            </section>
            @endif
        </div>
    </section>
@endsection