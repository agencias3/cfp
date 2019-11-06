<?php $ativo = Route::getCurrentRoute()->uri(); ?>
<nav class="w-100 bread-crumbs">
    <ul class="w-100 d_flex wrap justify-1024-center">
        <li>
            <a href="{{ route('home') }}" title="Home">
                Home
            </a>
        </li>
        <li>
            >
        </li>
        @if($ativo == 'quem-somos')
            <li>
                <a href="{{ route('about') }}" title="Quem Somos">
                    Quem Somos
                </a>
            </li>
        @endif
        @if($ativo == 'contato')
        <li>
            <a href="{{ route('contact') }}" title="Contato">
                Contato
            </a>
        </li>
        @endif
        @if($ativo == 'atuacao' || $ativo == 'atuacao/{seo_link}')
            <li>
                <a href="{{ route('acting') }}" title="Áreas de Atuação">
                    Áreas de Atuação
                </a>
            </li>
            @if($ativo == 'atuacao/{seo_link}')
                <li>
                    >
                </li>
                <li>
                    <a href="{{ route('acting.show', $acting->seo_link) }}" title="{{ strip_tags($acting->name) }}">
                        {{ strip_tags($acting->name) }}
                    </a>
                </li>
            @endif
        @endif
        @if($ativo == 'blog' || $ativo == 'blog/tag/{tag}' || $ativo == 'blog/{seo_link}')
            <li>
                <a href="{{ route('blog') }}" title="Publicações">
                    Publicações
                </a>
            </li>
            @if($ativo == 'blog/tag/{tag}')
                <li>
                    >
                </li>
                <li>
                    <a href="{{ route('blog.tag', $tag->seo_link) }}" title="{{ $tag->name }}">
                        {{ $tag->name }}
                    </a>
                </li>
            @endif
            @if($ativo == 'blog/{seo_link}')
                <li>
                    >
                </li>
                <li>
                    <a href="{{ route('blog.show', $post->seo_link) }}" title="{{ $post->name }}">
                        {{ $post->name }}
                    </a>
                </li>
            @endif
        @endif
    </ul>
</nav>