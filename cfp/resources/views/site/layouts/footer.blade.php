<footer class="w-100">
    <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <article class="w-100 d_flex wrap justify-space">
                <section class="w-300-px d_flex direction-column w-1024-100 t-align-1024-c">
                    <figure class="w-100 c-left">
                        <a class="display-inline-block f-1024-n" href="{{ route('home') }}" title="{{ config('app.name') }}">
                            <img class="max-w-100" src="{{ asset('assets/site/images/main-logo.png') }}" title="{{ config('app.name') }}" alt="{{ config('app.name') }}" />
                        </a>
                    </figure>
                    <div class="w-100 m-top-20 color-white text">
                        <p>
                            {!! nl2br(session()->get('configuration')[9]['description']) !!}<br />
                            @if(session()->get('configuration')[6]['description'])
                                Fone: {!! nl2br(session()->get('configuration')[6]['description']) !!}
                            @endif
                        </p>
                    </div>
                </section>
                <nav class="menu-footer w-1024-100 m-top-1024-30 t-align-1024-c">
                    <ul class="d_flex direction-column w-1024-100">
                        <span>
                            SITEMAP
                        </span>
                        <li>
                            <a href="{{ route('home') }}" title="Home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}" title="Quem Somos">
                                Quem Somos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service') }}" title="Áreas de Expertise">
                                Áreas de Expertise
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}" title="Notícias e Artigos">
                                Notícias e Artigos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('work') }}" title="Carreiras">
                                Carreiras
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}" title="Contato">
                                Contato
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="menu-footer w-1024-100 m-top-1024-30 t-align-1024-c">
                    <ul class="d_flex direction-column w-1024-100">
                        <span>
                            LINKS ÚTEIS
                        </span>
                        <li>
                            <a href="" title="Acompanhamento Processual">
                                Acompanhamento Processual
                            </a>
                        </li>
                        <li>
                            <a href="" title="Certidões Negativas">
                                Certidões Negativas
                            </a>
                        </li>
                        <li>
                            <a href="" title="Poder Executivo">
                                Poder Executivo
                            </a>
                        </li>
                    </ul>
                </nav>
                @if(isPost(session()->get('configuration')[3]['description']) || isPost(session()->get('configuration')[4]['description']) || isPost(session()->get('configuration')[5]['description']))
                <aside class="w-300-px d_flex direction-column w-1024-100 m-top-1024-30 t-align-1024-c">
                    @include('site.newsletter.form', ['class' => 'w-100 form-newsletter fNewsletter', 'trueMsg' => true])
                    <nav class="w-100 m-top-40 list-social m-top-1024-30 t-align-1024-c">
                        <span class="f-left display-inline-block f-1024-n">
                            ACOMPANHE-NOS EM<br />
                            NOSSAS REDES SOCIAIS
                        </span>
                        <ul class="f-left c-left m-left-15-px m-top-13 display-inline-block f-1024-n">
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
                </aside>
                @endif
            </article>
        </div>
    </article>
    <article class="w-100 p-bottom-30">
        <div class="center">
            <span class="w-100 d_flex justify-center color-white f-size-14">
                <b class="l-spac-1">
                    Todos os Direitos Reservados |
                </b>
                <a class="l-spac-1 m-left-5-px t-decoration" href="https://www.agencias3.com.br" target="_blank" title="AGÊNCIA S3">
                    AGÊNCIA S3
                </a>
            </span>
        </div>
    </article>
</footer>