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
                <nav class="f-left list-social smooth display-800-none">
                    <ul>
                        <li>
                            <a href="" title="Facebook">
                                <img src="{{ asset('assets/site/images/facebook.png') }}" title="Facebook" alt="Facebook" />
                            </a>
                        </li>
                        <li>
                            <a href="" title="Instagram">
                                <img src="{{ asset('assets/site/images/instagram.png') }}" title="Instagram" alt="Instagram" />
                            </a>
                        </li>
                        <li>
                            <a href="" title="Linkedin">
                                <img src="{{ asset('assets/site/images/linkedin.png') }}" title="Linkedin" alt="Linkedin" />
                            </a>
                        </li>
                    </ul>
                </nav>
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
                                <a class="active" href="" title="Home">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="" title="Quem somos">
                                    Quem somos
                                </a>
                            </li>
                            <li>
                                <a href="" title="Áreas de Expertise">
                                    Áreas de Expertise
                                </a>
                            </li>
                            <li>
                                <a href="" title="Notícias  e Artigos">
                                    Notícias  e Artigos
                                </a>
                            </li>
                            <li>
                                <a href="" title="Carreiras">
                                    Carreiras
                                </a>
                            </li>
                            <li>
                                <a href="" title="Contato">
                                    Contato
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <nav class="w-100 c-left m-top-80 list-social display-1024-none">
                        <ul class="m-left-40-px">
                            <li>
                                <a href="" title="Facebook">
                                    <img src="{{ asset('assets/site/images/facebook.png') }}" title="Facebook" alt="Facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <img src="{{ asset('assets/site/images/instagram.png') }}" title="Instagram" alt="Instagram" />
                                </a>
                            </li>
                            <li>
                                <a href="" title="Linkedin">
                                    <img src="{{ asset('assets/site/images/linkedin.png') }}" title="Linkedin" alt="Linkedin" />
                                </a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <aside class="w-450-px display-1024-none">
                    <article class="w-100">
                        <span class="w-100 color-white f-size-24 f-w-700">
                            Fale Conosco
                        </span>
                        <p class="w-100 m-top-25 color-white f-size-16">
                            Fone: 51 3212.2233
                        </p>
                        <p class="w-100 m-top-25 color-white f-size-16">
                            E-mail: <a class="color-white t-decoration" href="" title="contato@cfp.com.br">contato@cfp.com.br</a>
                        </p>
                    </article>
                    <article class="w-100 m-top-50">
                        <span class="w-100 d_flex title-3">
                            <b>
                                CFP News
                            </b>
                        </span>
                        <div class="w-100 m-top-30 color-white text">
                            <p>
                                Fique por dentro de notícias e artigos publicados em nosso Portal.
                            </p>
                        </div>
                        <form class="w-100 m-top-40 form-newsletter" id="fNewsletter" method="get" action="">
                            <label class="w-100 color-white f-size-16" for="newsletter-email">
                                Assine a nossa Newsletter. Insira seu
                            </label>
                            <div class="w-100 m-top-20 d_flex">
                                <fieldset class="flex-1">
                                    <input class="w-100" type="email" name="" value="" placeholder="seuemail@example.com.br" />
                                </fieldset>
                                <fieldset>
                                    <input class="w-100 pointer smooth" type="submit" id="send-newsletter" value="" />
                                </fieldset>
                            </div>
                        </form>
                    </article>
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