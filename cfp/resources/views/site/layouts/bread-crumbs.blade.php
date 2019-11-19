<?php $ativo = Route::getCurrentRoute()->uri(); ?>
<nav class="w-100 m-top-20 bread-crumbs">
    <ul class="w-100 d_flex justify-center c-left">
        <li>
            <a href="{{ route('home') }}" title="HOME">
                HOME
            </a>
        </li>
        <li>
            •
        </li>
        @if($ativo == 'areas-atuacao' || $ativo == 'areas-atuacao/{seo_link}')
            <li>
                <a href="{{ route('service') }}" class="t-upper" title="Áreas de Expertise">
                    Áreas de Expertise
                </a>
            </li>
            @if($ativo == 'areas-atuacao/{seo_link}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('service.show', $service->seo_link) }}" class="t-upper" title="{{ $service->name }}">
                    {{ $service->name }}
                </a>
            </li>
            @endif
        @endif
        @if($ativo == 'segmentos' || $ativo == 'segmentos/{seo_link}')
            <li>
                <a href="{{ route('segment') }}" class="t-upper" title="Segmentos">
                    Segmentos
                </a>
            </li>
            @if($ativo == 'segmentos/{seo_link}')
                <li>
                    •
                </li>
                <li>
                    <a href="{{ route('segment.show', $segment->seo_link) }}" class="t-upper" title="{{ $segment->name }}">
                        {{ $segment->name }}
                    </a>
                </li>
            @endif
        @endif
        @if($ativo == 'noticias' || $ativo == 'noticias/tag/{tag}' || $ativo == 'noticias/area-expertise/{service}' || $ativo == 'noticias/segmento/{segment}' || $ativo == 'noticias/{seo_link}')
        <li>
            <a href="{{ route('blog') }}" title="NOTÍCIAS">
                NOTÍCIAS
            </a>
        </li>
        @endif
        @if($ativo == 'noticias/tag/{tag}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.tag', $tag->seo_link) }}" title="TAG">
                    TAG
                </a>
            </li>
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.tag', $tag->seo_link) }}" class="t-upper" title="{{ $tag->name }}">
                    {{ $tag->name }}
                </a>
            </li>
        @endif
        @if($ativo == 'noticias/area-expertise/{service}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.service', $service->seo_link) }}" class="t-upper" title="Áreas de Expertise">
                    Áreas de Expertise
                </a>
            </li>
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.service', $service->seo_link) }}" class="t-upper" title="{{ $service->name }}">
                    {{ $service->name }}
                </a>
            </li>
        @endif
        @if($ativo == 'noticias/segmento/{segment}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.segment', $segment->seo_link) }}" class="t-upper" title="Segmentos">
                    Segmentos
                </a>
            </li>
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.service', $segment->seo_link) }}" class="t-upper" title="{{ $segment->name }}">
                    {{ $segment->name }}
                </a>
            </li>
        @endif
        @if($ativo == 'noticias/{seo_link}')
            <li>
                •
            </li>
            <li>
                <a href="{{ route('blog.show', $post->seo_link) }}" class="t-upper" title="{{ $post->name }}">
                    {{ $post->name }}
                </a>
            </li>
        @endif
        @if($ativo == 'contato')
            <li>
                <a href="{{ route('contact') }}" class="t-upper" title="Contato">
                    Contato
                </a>
            </li>
        @endif
        @if($ativo == 'carreiras')
            <li>
                <a href="{{ route('work') }}" class="t-upper" title="Carreiras">
                    Carreiras
                </a>
            </li>
        @endif
    </ul>
</nav>