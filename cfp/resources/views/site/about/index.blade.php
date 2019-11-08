@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    <?php $page->show(2); ?>
    @if(session()->get('page')[2]['image'])
    <figure class="w-100">
        <a class="w-100" href="javascript:void(0);" title="{{ session()->get('page')[2]['name'] }}">
            <img class="w-100" src="{{ asset('uploads/page/'.session()->get('page')[2]['image']) }}" title="{{ session()->get('page')[2]['name'] }}" alt="{{ session()->get('page')[2]['name'] }}" />
        </a>
    </figure>
    @endif
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex wrap align-start">
                <section class="flex-1 w-800-100 t-align-800-c">
                    <span class="display-inline-block w-80-px h-1-px bg-grey f-800-n"></span>
                    <h1 class="w-100 m-top-35 l-height-16 main-color f-size-30 font-3 m-top-1024-20 f-size-1024-24">
                        {!! session()->get('page')[2]['name'] !!}
                    </h1>
                    <div class="w-100 m-top-30 text m-top-1024-20">
                        {!! session()->get('page')[2]['description'] !!}
                    </div>
                </section>
                <?php $images = $page->images(2); ?>
                @if(!$images->isEmpty())
                <aside class="w-50 m-left-50-px overflow-h b-radius-10 main-bg gallery-wrapper w-800-100 m-top-800-20">
                    <div class="w-100 relative slider-slick-1">
                        @foreach($images as $row)
                        <div class="f-left">
                            <a class="w-100" href="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}">
                                <figure class="w-100">
                                    <img class="w-100 smooth" src="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                                </figure>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </aside>
                @endif
            </article>
            <span class="w-100 h-3-px m-top-50 bg-grey m-top-1024-30"></span>
            <?php $page->show(3); ?>
            @if(isPost(session()->get('page')[3]['description']))
            <div class="w-100 m-top-50 m-top-1024-20 t-align-1024-c">
                <div class="w-100 text">
                    {!! session()->get('page')[3]['description'] !!}
                </div>
            </div>
            @endif
            <?php $page->show(4); ?>
            <div class="w-100 m-top-50 m-top-1024-20">
                <div class="w-100 text text-edit t-align-800-c">
                    <?php $images = $page->images(4); ?>
                    @if(!$images->isEmpty())
                    <aside class="w-50 f-right m-left-30-px m-bottom-20 overflow-h b-radius-10 main-bg gallery-wrapper w-800-100 m-bottom-800-30">
                        <div class="w-100 relative slider-slick-1">
                            @foreach($images as $row)
                                <div class="f-left">
                                    <a class="w-100" href="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}">
                                        <figure class="w-100">
                                            <img class="w-100 smooth" src="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                                        </figure>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                    @endif
                    <p class="title-text">
                        {!! session()->get('page')[4]['name'] !!}
                    </p>
                    {!! session()->get('page')[4]['description'] !!}
                </div>
            </div>
            <?php $page->show(5); ?>
            <article class="w-100 list-we t-align-800-c">
                <div class="w-55 m-top-50 item-3 m-top-1024-30 w-800-100 m-top-1024-30">
                    <span class="display-inline-block w-60-px h-3-px secondary-bg f-800-n"></span>
                    <h2 class="w-100 m-top-25 l-height-16 main-color f-size-35 font-3 m-top-1024-20">
                        {!! session()->get('page')[5]['name'] !!}
                    </h2>
                    <div class="w-100 m-top-20 main-color text">
                        {!! session()->get('page')[5]['description'] !!}
                    </div>
                </div>
                <?php $page->show(6); ?>
                <div class="w-45 m-top-50 item-3 m-top-1024-30 w-800-100 m-top-1024-30">
                    <span class="display-inline-block w-60-px h-3-px secondary-bg f-800-n"></span>
                    <h3 class="w-100 m-top-25 l-height-16 main-color f-size-35 font-3 m-top-1024-20">
                        {!! session()->get('page')[6]['name'] !!}
                    </h3>
                    <div class="w-100 m-top-20 text">
                        {!! session()->get('page')[6]['description'] !!}
                    </div>
                </div>
                <div class="w-100 m-top-50 item-3 m-top-1024-30 w-800-100 m-top-1024-30">
                    <span class="display-inline-block w-60-px h-3-px secondary-bg f-800-n"></span>
                    <h4 class="w-100 m-top-25 l-height-16 main-color f-size-35 font-3 m-top-1024-20">
                        Nossos Valores
                    </h4>
                    <?php $items = $page->items(7); ?>
                    @if(!$items->isEmpty())
                    <div class="w-100 m-top-20 color-grey text">
                        <ul>
                            @foreach($items as $row)
                            <li>
                                <strong>
                                    {!! $row->name !!}
                                </strong><br />
                                {!! strip_tags($row->description) !!}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </article>
            <span class="w-100 h-3-px m-top-50 bg-grey m-top-1024-20"></span>
        </div>
        <div class="center-2">
            @if(!$partners->isEmpty())
            <h5 class="w-100 m-top-60 t-align-c l-height-16 main-color f-size-35 font-3 m-top-1024-20">
                Sócios
            </h5>
            <div class="w-100 t-align-c">
                <span class="display-inline-block w-60-px f-none h-3-px secondary-bg"></span>
            </div>
            <div class="w-100 m-top-50 slider-slick-4 list-group-partners m-top-1024-20">
                @foreach($partners as $row)
                <div class="f-left item">
                    <figure class="w-100 relative">
                        @if(isPost($row->image))
                        <img class="w-100 relative" src="{{ asset('uploads/team/'.$row->image) }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
                        @endif
                        <div class="w-100 h-100 absolute top-0 left-0">
                            <div class="w-100 h-100 display-table">
                                <div class="inline">
                                    <div class="w-100 t-align-c">
                                        <strong class="w-100">
                                            {{ $row->name }}
                                        </strong>
                                        <b class="w-100">{{ $row->office }}</b>
                                        <i class="display-inline-block"></i>
                                        <span class="w-100">
                                            <a href="mailto:{{ $row->email }}" title="{{ $row->email }}">
                                                {{ $row->email }}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <span class="w-100 d_flex justify-center">
                        <b class="self-center">
                            {{ $row->name }}
                        </b>
                    </span>
                </div>
                @endforeach
            @endif
            </div>
            @if(!$associates->isEmpty())
            <h6 class="w-100 m-top-60 t-align-c l-height-16 main-color f-size-35 font-3 m-top-1024-20">
                Associados
            </h6>
            <div class="w-100 t-align-c">
                <span class="display-inline-block w-60-px f-none h-3-px secondary-bg"></span>
            </div>
            <div class="w-100 m-top-50 slider-slick-4 list-group-partners list-group-partners-2 m-top-1024-20">
                @foreach($partners as $row)
                <div class="f-left item">
                    <article class="w-100 h-100 d_flex relative">
                        <div class="self-center">
                            <div class="w-100 t-align-c">
                                <strong class="w-100">
                                    {{ $row->name }}
                                </strong>
                                <span class="w-100">
                                    <a href="mailto:{{ $row->email }}" title="{{ $row->email }}">
                                        {{ $row->email }}
                                    </a>
                                </span>
                                <b class="w-100">Nome do Cargo/Área</b>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </section>
    <?php $images = $page->images(8); ?>
    @if(!$images->isEmpty())
    <section class="w-100 slider-slick-4 list-group-gallery">
        @foreach($images as $row)
        <div class="f-left">
            <a class="w-100 min-h-100 d_flex html5lightbox" data-group="gallery-we" href="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}">
                <figure class="w-100 min-h-100 smooth" style="background: url({{ asset('uploads/page/'.$row->image) }}) no-repeat;background-position: center center;background-size: cover;">
                    <img class="w-100" src="{{ asset('uploads/page/'.$row->image) }}" title="{{ $row->label }}" alt="{{ $row->label }}" />
                </figure>
            </a>
        </div>
        @endforeach
    </section>
    @endif
@endsection