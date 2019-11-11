@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-bottom-80 relative z-index-1 top-page p-bottom-1024-0">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
                <article class="w-100 d_flex justify-center">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35">
                            Notícias e Artigos
                        </h1>
                    </div>
                </article>
                @include('site.layouts.bread-crumbs')
            </article>
        </div>
    </section>
    <section class="w-100 p-bottom-80 bg-white relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <article class="w-100 d_flex wrap">
                <section class="flex-1 m-top-50 m-right-50-px w-1024-100 m-top-1024-20">
                    <aside class="w-100 d_flex wrap justify-center list-group-2 list-group-2-internal">
                        @if(isPost($search))
                            <div class="w-100 t-align-c f-size-20 m-top-30 m-bottom-30 color-black" data-scroll-reveal="enter bottom move 80px">
                                Foram encontrado(s) "<strong class="f-w-600 color-black">{{ $posts->count() }}</strong>" resultados pelo termo "<strong class="f-w-600 color-black-2">{{ $search }}</strong>".
                            </div>
                        @endif
                        @if($posts->isEmpty())
                            <div class="w-100 m-top-30 m-bottom-30 t-align-c f-size-20" data-scroll-reveal="enter bottom move 50px">
                                Nenhum post encontrado!
                            </div>
                        @else
                            <?php
                            $cont = 0;
                            $cont2 = 0;
                            $total = $posts->count();
                            $contSpan = 0;
                            ?>
                            @foreach($posts as $row)
                                @include('site.blog._li_list')
                            @endforeach
                        @endif
                    </aside>
                    @if(!$posts->isEmpty())
                        {!! $posts->links() !!}
                    @endif
                </section>
                @include('site.blog._sidebar')
            </article>
        </div>
    </section>
@endsection