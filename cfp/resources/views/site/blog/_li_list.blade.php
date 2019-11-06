<?php
$route = route('blog.show', ['seo_link' => $row->seo_link]);
$cover = '';
$image = $row->images->firstWhere('cover', 'y');
if(isPost($image)){
    $cover = asset('uploads/post/blog.jpg');
}
?>

<div class="d_flex direction-column item">
    <a class="w-100 h-100 d_flex direction-column" href="{{ $route }}" title="{{ $row->name }}">
        <figure class="w-100">
            <img class="w-100 smooth" src="{{ $cover }}" title="{{ $row->name }}" alt="{{ $row->name }}" />
        </figure>
        <article class="w-100">
            <span class="w-100 smooth">
                {{ $row->name }}
            </span>
            <div class="w-100 m-top-10 t-italic text">
                <p>
                    {!! resume(strip_tags($row->description), 150) !!}
                    <strong class="smooth">
                        Leia mais aqui.
                    </strong>
                </p>
            </div>
            <footer class="w-100">
                <p class="w-100">
                    Publicação: 25 de junho de 2019
                </p>
                <p class="w-100">
                    Palavras-Chave: Crédito, Recuperação, CFP
                </p>
            </footer>
        </article>
    </a>
</div>