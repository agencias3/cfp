@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <section class="w-100 relative z-index-1 top-page">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
                <article class="w-100 d_flex justify-center">
                    <div class="d_flex direction-column">
                        <h1 class="w-80 m-left-10 f-size-55 t-align-c color-white font-3 f-size-1024-35 f-size-600-30">
                            Bem-vindo(a) ao escritório que gera resultados e compartilha experiências há 16 anos
                        </h1>
                    </div>
                </article>
                @include('site.layouts.bread-crumbs')
            </article>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white relative z-index-2 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-100 container">
                <h2 class="w-100 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    <?php $page->show(10); ?>
                    {{ session()->get('page')[10]['name'] }}
                </h2>
                <div class="w-100 m-top-25 text t-align-1024-c">
                    {!! session()->get('page')[10]['description'] !!}
                </div>
                <h3 class="w-100 m-top-60 main-color f-size-35 font-3 m-top-1024-30 t-align-1024-c f-size-1024-26">
                    Vagas Abertas
                </h3>
            </div>
            @if(!$vacancies->isEmpty())
            <div class="w-100 h-100 fixed z-index-9 top-0 left-0 bg-black-transparent-05 popup-ajax display-none">
                <div class="w-100 min-h-100 relative d_flex justify-center">
                    <span class="w-100 h-100 absolute top-0 left-0 z-index-1" onclick="closeJob()"></span>
                    <div class="w-500-px relative z-index-2 self-center">
                        <div class="w-100 relative b-radius-20 overflow-h">
                            <a class="absolute top-0 right-0 close-popup" href="javascript:void(0);" onclick="closeJob()" title="Fechar">
                                x
                            </a>
                            <div class="w-100 bg-white">
                                <p class="w-100 m-top-10">
                                    NOME DA VAGA SELECIONADA
                                </p>
                                <span class="w-100 m-top-30 f-w-700 main-color f-size-14">
                                    Requisitos ou Resumo sobre a Vaga
                                </span>
                                <div class="w-100 m-top-20 text">
                                    <ul>
                                        <li>
                                            Descrição: Lorem ipsum dolor sit amet
                                        </li>
                                        <li>
                                            Salário: Consectetur adipiscing elit Pellentesque sit
                                        </li>
                                        <li>
                                            Horário: Scelerisque porttitor id ut leo
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="w-100 p-top-20 p-bottom-20 bg-white-1 d_flex justify-center" href="" title="Compartilhe essa vaga com alguém que você conhece">
                                <span class="m-top-1 color-grey f-size-14 f-w-600">
                                    Compartilhe essa vaga com alguém que você conhece
                                </span>
                                <figure class="m-left-10-px">
                                    <img src="{{ asset('assets/site/images/share.png') }}" title="Compartilhe essa vaga com alguém que você conhece" alt="Compartilhe essa vaga com alguém que você conhece" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 m-top-10 list-job slider-slick-4">
                @foreach($vacancies as $row)
                <div class="f-left item-job">
                    <a class="f-left active item-job" href="javascript:void(0);" title="{{ $row->name }}" onclick="loadJob($(this), 2)" >
                        <span>
                            {{ $row->name }}
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
            @endif
            <div class="w-100 container">
                <span class="w-300-px h-1-px m-top-60 bg-grey m-top-1024-30"></span>
                <h4 class="w-100 m-top-30 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    <?php
                    $page->show(11);
                    $images = $page->images(11);
                    ?>
                    {{ session()->get('page')[11]['name'] }}
                </h4>
            </div>
            @if(!$images->isEmpty())
            <div class="w-100 m-top-30 d_flex wrap justify-center list-group-2">
                @foreach($images as $row)
                <div class="item">
                    <a class="w-100 h-100 b-radius-10 overflow-h html5lightbox" data-group="gallery" style="background: url({{ asset('uploads/page/'.$row->image) }}) no-repeat;background-size: cover;background-position: center center;" href="{{ asset('uploads/page/'.$row->image) }}" title="">
                        <img class="w-100 opacity-0" src="{{ asset('uploads/page/'.$row->image) }}" title="" alt="" />
                    </a>
                </div>
                @endforeach
            </div>
            @endif
            <div class="w-100 container">
                <div class="w-100 m-top-25 text t-align-1024-c">
                    {!! session()->get('page')[11]['description'] !!}
                </div>
                <article class="w-100 m-top-60 m-top-1024-30">
                    <section class="w-55 w-1024-100">
                        <span class="w-300-px h-1-px bg-grey"></span>
                        <h5 class="w-100 m-top-30 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                            Envie o seu Currículo
                        </h5>
                        <div class="w-100 m-top-25 text">
                            <p>
                                Preencha o formulário por completo e insira seu currículo
                                para que possamos te conhecer melhor
                            </p>
                        </div>
                        @include('site.work._form')
                    </section>
                    <?php $items = $page->items(10); ?>
                    @if(!$items->isEmpty())
                    <nav class="w-40 f-right list-group-careers w-1024-100">
                        <ul class="w-100">
                            @foreach($items as $row)
                            <li class="w-100 d_flex wrap">
                                @if(isPost($row->image))
                                <figure class="d_flex direction-column justify-center">
                                    <span class="self-center">
                                        <img src="{{ asset('uploads/page/item/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                                    </span>
                                </figure>
                                @endif
                                <div class="flex-1 self-center m-left-30-px text">
                                    <p class="m-bottom-5">
                                        <strong>
                                            {{ $row->name }}
                                        </strong>
                                    </p>
                                    {!! $row->description !!}
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </nav>
                    @endif
                </article>
                <div class="w-100 m-top-80 d_flex wrap box-social-page m-top-1024-30">
                    <aside class="w-100 c-left d_flex wrap justify-space direction-600-column">
                        <span class="self-center m-top-2 color-grey f-size-16 w-800-100 t-align-800-c">
                            Compartilhe esta página com alguém
                        </span>
                        <ul class="d_flex w-800-100 m-top-800-20 justify-800-center">
                            <li class="f-right m-left-600-0">
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
                            <!--
                            <li class="m-left-10-px">
                                <a href="" target="_blank" title="">
                                    <img src="{{ asset('assets/site/images/icon-social-5.png') }}" title="" alt="">
                                </a>
                            </li>
                            -->
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection