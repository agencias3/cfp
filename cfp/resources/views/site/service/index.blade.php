@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-bottom-80 relative z-index-1 top-page p-bottom-1024-0">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                <div class="d_flex direction-column">
                    <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35 t-align-600-c">
                        Áreas de Atuação
                    </h1>
                    <span class="d_flex t-align-600-c">
                        <b class="w-600-100">
                            CONFIRA ABAIXO
                        </b>
                    </span>
                </div>
            </article>
        </div>
    </section>
    <section class="w-100 p-bottom-80 bg-white relative z-index-2 p-bottom-1024-10">
        <article class="w-100 d_flex wrap justify-center list-group-acting">
        @if($services->isEmpty())
            <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20">
                Nenhum registro encontrado!
            </div>
        @else
                @foreach($services as $row)
            <div class="w-100 item-acting">
                <a href="{{ route('service.show', $row->seo_link) }}" title="{{ $row->title }}" style="background: url({{ asset('uploads/service/'.$row->image) }}) no-repeat;background-position: center center;background-size: cover;">
                    <div class="center">
                        <aside class="w-100 d_flex direction-column">
                            <p>
                                {!! quebraTexto($row->name, 3) !!}
                            </p>
                            <span class="smooth">
                                SAIBA MAIS
                            </span>
                        </aside>
                    </div>
                </a>
            </div>
            @endforeach
        @endif
        </article>
    </section>
@endsection