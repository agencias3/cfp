@if(!$posts->isEmpty())
<section class="w-100 p-top-35 p-bottom-50 bg-white-1 p-top-1024-30 p-bottom-1024-30">
    <div class="center">
        <h3 class="w-100 t-align-c secondary-color f-size-55 font-3 f-size-1024-26">
            Publicações
        </h3>
        <article class="w-100 m-top-35 d_flex wrap list-group-3 m-top-1024-15">
            @foreach($posts as $row)
                @include('site.blog._li_list')
            @endforeach
        </article>
        <div class="w-100 m-top-35 t-align-c m-top-1024-15">
            <a class="display-inline-block see-more smooth" href="{{ route('blog') }}" title="VER MAIS">
                VER MAIS
            </a>
        </div>
    </div>
</section>
@endif