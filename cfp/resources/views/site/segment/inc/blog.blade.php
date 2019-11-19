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