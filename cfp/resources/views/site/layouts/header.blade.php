<header class="w-100 @if($ativo != 'home')main-bg header-internal @endif absolute z-index-9 top-0 left-0 main-header smooth -open">
    <div class="center container">
        <article class="w-100 p-top-15 p-bottom-15 d_flex justify-space p-top-1024-10 p-bottom-1024-10">
            <section>
                <figure class="f-left c-left main-logo">
                    <a href="" title="">
                        <img src="{{ asset('assets/site/images/main-logo.png') }}" title="" alt="" />
                    </a>
                </figure>
            </section>
            <aside class="self-center c-left">
                @if(isPost(session()->get('configuration')[3]['description']) || isPost(session()->get('configuration')[4]['description']) || isPost(session()->get('configuration')[5]['description']))
                <nav class="f-left list-social smooth display-800-none">
                    <ul>
                        @if(isPost(session()->get('configuration')[3]['description']))
                        <li>
                            <a href="{{ session()->get('configuration')[3]['description'] }}" target="_blank" title="Facebook">
                                <img src="{{ asset('assets/site/images/facebook.png') }}" title="Facebook" alt="Facebook" />
                            </a>
                        </li>
                        @endif
                        @if(isPost(session()->get('configuration')[4]['description']))
                        <li>
                            <a href="{{ session()->get('configuration')[4]['description'] }}" target="_blank" title="Instagram">
                                <img src="{{ asset('assets/site/images/instagram.png') }}" title="Instagram" alt="Instagram" />
                            </a>
                        </li>
                        @endif
                        @if(isPost(session()->get('configuration')[5]['description']))
                        <li>
                            <a href="{{ session()->get('configuration')[5]['description'] }}" target="_blank" title="Linkedin">
                                <img src="{{ asset('assets/site/images/linkedin.png') }}" title="Linkedin" alt="Linkedin" />
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                @endif
                <a class="action-menu" onclick="openHeader()" href="javascript:void(0);" title="Menu">
                    <b>
                        Menu
                    </b>
                    <span class="relative">
                        <i class="w-100 smooth"></i>
                        <i class="w-100 smooth"></i>
                        <i class="w-100 smooth"></i>
                    </span>
                </a>
            </aside>
        </article>
        <div class="w-100 box-menu opacity-0">
            <article class="w-100 p-top-80 p-bottom-80 d_flex justify-space">
                <section class="w-300-px">
                    <nav class="w-100 main-menu display-1024-none">
                        <ul class="w-100 d_flex direction-column">
                            <li class="display-none">
                                <a href="javascript:void(0);" onclick="$('.action-menu').click();" title="Fechar">
                                    Fechar
                                </a>
                            </li>
                            <li>
                                <a @if($ativo == 'home') class="active" @endif href="{{ route('home') }}" title="Home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a @if($ativo == 'quem-somos') class="active" @endif href="{{ route('about') }}" title="Quem somos">
                                    Quem somos
                                </a>
                            </li>
                            <li>
                                <a  @if($ativo == 'areas-atuacao' || $ativo == 'areas-atuacao/{seo_link}') class="active" @endif href="{{ route('service') }}" title="Áreas de Expertise">
                                    Áreas de Expertise
                                </a>
                            </li>
                            <li>
                                <a  @if($ativo == 'segmentos' || $ativo == 'segmentos/{seo_link}') class="active" @endif href="{{ route('segment') }}" title="Segmentos">
                                    Segmentos
                                </a>
                            </li>
                            <li>
                                <a  @if($ativo == 'noticias' || $ativo == 'noticias/tag/{tag}' || $ativo == 'noticias/segmento/{segment}' || $ativo == 'noticias/area-expertise/{service}' || $ativo == 'noticias/{seo_link}') class="active" @endif href="{{ route('blog') }}" title="Notícias  e Artigos">
                                    Notícias  e Artigos
                                </a>
                            </li>
                            <li>
                                <a @if($ativo == 'carreiras') class="active" @endif href="{{ route('work') }}" title="Carreiras">
                                    Carreiras
                                </a>
                            </li>
                            <li>
                                <a @if($ativo == 'contact') class="active" @endif href="{{ route('contact') }}" title="Contato">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </nav>
                    @if(isPost(session()->get('configuration')[3]['description']) || isPost(session()->get('configuration')[4]['description']) || isPost(session()->get('configuration')[5]['description']))
                    <nav class="w-100 c-left m-top-80 list-social display-1024-none">
                        <ul class="m-left-40-px">
                            @if(isPost(session()->get('configuration')[3]['description']))
                            <li>
                                <a href="{{ session()->get('configuration')[3]['description'] }}" target="_blank" title="Facebook">
                                    <img src="{{ asset('assets/site/images/facebook.png') }}" title="Facebook" alt="Facebook" />
                                </a>
                            </li>
                            @endif
                            @if(isPost(session()->get('configuration')[4]['description']))
                            <li>
                                <a href="{{ session()->get('configuration')[4]['description'] }}" target="_blank" title="Instagram">
                                    <img src="{{ asset('assets/site/images/instagram.png') }}" title="Instagram" alt="Instagram" />
                                </a>
                            </li>
                            @endif
                            @if(isPost(session()->get('configuration')[5]['description']))
                            <li>
                                <a href="{{ session()->get('configuration')[5]['description'] }}" target="_blank" title="Linkedin">
                                    <img src="{{ asset('assets/site/images/linkedin.png') }}" title="Linkedin" alt="Linkedin" />
                                </a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                    @endif
                </section>
                <aside class="w-450-px display-1024-none">
                    <article class="w-100">
                        <span class="w-100 color-white f-size-24 f-w-700">
                            Fale Conosco
                        </span>
                        @if(isPost(session()->get('configuration')[6]['description']))
                        <p class="w-100 m-top-25 color-white f-size-16">
                            Fone: {{ session()->get('configuration')[6]['description'] }}
                        </p>
                        @endif
                        @if(isPost(session()->get('configuration')[7]['description']))
                        <p class="w-100 m-top-25 color-white f-size-16">
                            E-mail: <a class="color-white t-decoration" href="mailto:{{ session()->get('configuration')[7]['description'] }}" title="{{ session()->get('configuration')[7]['description'] }}">{{ session()->get('configuration')[7]['description'] }}</a>
                        </p>
                        @endif
                    </article>
                    @include('site.newsletter._form')
                </aside>
            </article>
        </div>
    </div>
</header>
<!-- inicio do box de inicialização -->
<div class="w-100 relative z-index-1 main-content opacity-0">
    @if($ativo != 'home')
    <div class="w-100 false-header"></div>
    @endif