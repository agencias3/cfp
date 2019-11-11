@if(!$posts->isEmpty())
<section class="w-100 p-top-80 p-bottom-80 bg-white-1 p-top-1024-30 p-bottom-1024-30">
    <div class="center container">
        <article class="w-100 d_flex wrap overflow-h b-radius-10 box-blog">
            <section class="w-35 p-bottom-100 min-h-100 d_flex direction-column p-bottom-1024-30 w-1024-100">
                <div class="w-100 main-bg">
                    <h4 class="w-100 title">
                        Notícias
                    </h4>
                    <div class="w-100 m-top-30 color-white text m-top-1024-20 t-align-1024-c">
                        <p>
                            Fique por dentro de notícias e artigos publicados em nosso Portal.
                        </p>
                    </div>
                    @include('site.newsletter.form')
                    <div class="w-100 m-top-40 m-bottom-40 c-left m-top-1024-30 t-align-1024-c">
                        <a class="display-inline-block see-more f-1024-n" href="{{ route('blog') }}" title="Veja todas as publicações">
                            <span class="smooth">
                                Veja todas as publicações
                            </span>
                            <b class="smooth">
                                &#10140;
                            </b>
                        </a>
                    </div>
                </div>
            </section>
            <aside class="flex-1 min-h-100 bg-white d_flex wrap list-group-2">
                @foreach($posts as $row)
                    @include('site.blog._li_list')
                @endforeach
            </aside>
        </article>
    </div>
</section>
@endif