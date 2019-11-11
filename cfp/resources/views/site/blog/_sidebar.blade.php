<aside class="w-30 m-top-80-neg box-right w-1024-70 m-top-1024-20 m-left-1024-15 w-600-100">
    <article class="w-100 bg-white box-search">
        <form class="w-100 bg-white" id="fSearch" method="get" action="{{ route('blog') }}">
            <h2 class="w-100 l-spac-1 f-w-700 main-color f-size-16">
                PESQUISAR NO BLOG
            </h2>
            <span class="w-50-px h-3-px m-top-10 secondary-bg"></span>
            <div class="w-100 m-top-20 d_flex">
                <fieldset class="flex-1">
                    <input type="text" name="search" value="@if(isset($search)){{ $search }}@endif" placeholder="Escreva o que deseja encontrar *" required />
                </fieldset>
                <fieldset class="w-40-px">
                    <input class="pointer smooth" type="submit" name="" value="" />
                </fieldset>
            </div>
        </form>
    </article>
    <article class="w-100 m-top-30 box-category">
        @if(!$services->isEmpty())
            <div class="w-100 m-top-50 m-top-1024-30">
                <h3 class="w-100 title-2">
                    <span>Áreas de Expertise</span>
                </h3>
                <nav class="w-100 m-top-20 list-group-category">
                    <ul class="w-100 d_flex direction-column">
                        @foreach($services as $row)
                            <li class="w-100">
                                <a class="w-100 d_flex" href="{{ route('blog.service', $row->seo_link) }}" title="{{ $row->name }}">
                            <span class="flex-1">
                                {{ $row->name }}
                            </span>
                                    <!--
                                    <b>
                                        12
                                    </b>
                                    -->
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        @endif
        @if(!$segments->isEmpty())
        <div class="w-100 m-top-50 m-top-1024-30">
            <h3 class="w-100 title-2">
                <span>Segmentos</span>
            </h3>
            <nav class="w-100 m-top-20 list-group-category">
                <ul class="w-100 d_flex direction-column">
                    @foreach($segments as $row)
                    <li class="w-100">
                        <a class="w-100 d_flex" href="{{ route('blog.segment', $row->seo_link) }}" title="{{ $row->name }}">
                            <span class="flex-1">
                                {{ $row->name }}
                            </span>
                            <!--
                            <b>
                                12
                            </b>
                            -->
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        @endif
        @if(!$tags->isEmpty())
        <div class="w-100 m-top-50 m-top-1024-30">
            <h5 class="w-100 title-2">
                <span>Tags</span>
            </h5>
            <nav class="w-100 m-top-20 list-group-tags">
                <ul class="w-100 d_flex wrap c-left">
                    @foreach($tags as $row)
                    <li>
                        <a href="{{ route('blog.tag', $row->seo_link) }}" title="{{ $row->name }}">
                            {{ $row->name }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
        @endif
    </article>
</aside>