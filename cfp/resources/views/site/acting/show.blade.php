@extends('site.layouts.app')
@section('content')
    <section class="w-100 p-bottom-80 relative z-index-1 top-page p-bottom-1024-30">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80">
                <article class="w-100 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35 t-align-600-c">
                            Direito Civil e Comercial
                        </h1>
                    </div>
                </article>
                <nav class="w-100 m-top-20 bread-crumbs">
                    <ul class="w-100 d_flex justify-center c-left">
                        <li>
                            <a href="" title="HOME">
                                HOME
                            </a>
                        </li>
                        <li>
                            •
                        </li>
                        <li>
                            <a href="" title="ÁREAS DE ATUAÇÃO">
                                ÁREAS DE ATUAÇÃO
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
        </div>
    </section>
    <section class="w-100 bg-white d_flex relative z-index-2 content-page-internal">
        <section class="flex-1">
            <article class="w-90 p-top-80 f-right p-top-1024-30">
                <h2 class="w-100 title-segment">
                    Atuamos fortemente
                    em litígios de natureza
                    civil e comercial,
                </h2>
                <div class="w-100 m-top-30 text">
                    <p>
                        conduzindo as demandas judiciais em conformidade com o perfil do cliente. O acompanhamento processual é realizado de forma individualizada,
                        possibilitando a determinação da melhor estratégia a ser utilizada no caso específico. O atendimento pessoalizado é elemento altamente prezado
                        pelos profissionais, havendo sempre o cuidado com as necessidades inerentes ao segmento de atuação próprio de cada cliente.
                    </p>
                </div>
            </article>
        </section>
        <aside class="w-50" style="background: url({{ asset('/uploads/page/segment.jpg') }}) no-repeat;background-position: center center;background-size: cover;"></aside>
    </section>
    <section class="w-100 bg-white p-top-80">
        <div class="center">
            <article class="w-100">
                <span class="w-100 t-upper main-color f-size-16">
                    Por meio deste mecanismo operacional, o escritório exerce representação nas diversas demandas dos âmbitos civil e comercial, tais como:
                </span>
                <ul class="w-100 m-top-10 list-segment list-segment-2">
                    <li class="w-100">
                        <div class="w-100">
                            <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                <figure class="self-center">
                                    <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                </figure>
                                <span class="flex-1 self-center">
                                   LOREM IPSUM DOLOR SIT AMET
                               </span>
                            </a>
                            <article class="w-100 text">
                                <p>
                                    Fusce sed consequat ex. Praesent pellentesque commodo tellus sed dapibus. Nunc arcu augue, varius et efficitur in, porta id lectus. Sed sit
                                    amet dictum eros, id dapibus neque.
                                </p>
                            </article>
                        </div>
                    </li>
                    <li class="w-100">
                        <div class="w-100">
                            <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                <figure class="self-center">
                                    <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                </figure>
                                <span class="flex-1 self-center">
                                   LOREM IPSUM DOLOR SIT AMET
                               </span>
                            </a>
                            <article class="w-100 text">
                                <p>
                                    Fusce sed consequat ex. Praesent pellentesque commodo tellus sed dapibus. Nunc arcu augue, varius et efficitur in, porta id lectus. Sed sit
                                    amet dictum eros, id dapibus neque.
                                </p>
                            </article>
                        </div>
                    </li>
                    <li class="w-100">
                        <div class="w-100">
                            <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                <figure class="self-center">
                                    <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                </figure>
                                <span class="flex-1 self-center">
                                   LOREM IPSUM DOLOR SIT AMET
                               </span>
                            </a>
                            <article class="w-100 text">
                                <p>
                                    Fusce sed consequat ex. Praesent pellentesque commodo tellus sed dapibus. Nunc arcu augue, varius et efficitur in, porta id lectus. Sed sit
                                    amet dictum eros, id dapibus neque.
                                </p>
                            </article>
                        </div>
                    </li>
                    <li class="w-100">
                        <div class="w-100">
                            <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                <figure class="self-center">
                                    <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                </figure>
                                <span class="flex-1 self-center">
                                   LOREM IPSUM DOLOR SIT AMET
                               </span>
                            </a>
                            <article class="w-100 text">
                                <p>
                                    Fusce sed consequat ex. Praesent pellentesque commodo tellus sed dapibus. Nunc arcu augue, varius et efficitur in, porta id lectus. Sed sit
                                    amet dictum eros, id dapibus neque.
                                </p>
                            </article>
                        </div>
                    </li>
                    <li class="w-100">
                        <div class="w-100">
                            <a class="d_flex wrap" onclick="segment($(this))" href="javascript:void(0);" title="">
                                <figure class="self-center">
                                    <img class="f-left" src="{{ asset('/assets/site/images/action-list.png') }}" title="LOREM IPSUM DOLOR SIT AMET" alt="LOREM IPSUM DOLOR SIT AMET" />
                                </figure>
                                <span class="flex-1 self-center">
                                   LOREM IPSUM DOLOR SIT AMET
                               </span>
                            </a>
                            <article class="w-100 text">
                                <p>
                                    Fusce sed consequat ex. Praesent pellentesque commodo tellus sed dapibus. Nunc arcu augue, varius et efficitur in, porta id lectus. Sed sit
                                    amet dictum eros, id dapibus neque.
                                </p>
                            </article>
                        </div>
                    </li>
                </ul>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-30 bg-white p-top-1024-30">
        <div class="center">
            <div class="w-100 container">
                <h3 class="w-100 title-2">
                    <span>Segmentos Relacionados</span>
                </h3>
            </div>
            <article class="w-100 m-top-30 slider-slick-3">
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="" title="">
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-2.jpg') }}" title="" alt="" />
                        </figure>
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                <div class="self-center smooth">
                                    <img src="{{ asset('/uploads/page/icon-acting-1.png') }}" title="" alt="" />
                                </div>
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('/uploads/page/icon-acting-1-hover.png') }}" title="" alt="" />
                                </div>
                            </figure>
                            <span class="w-100 smooth">
                                DIREITO CIVIL E COMERCIAL
                            </span>
                        </article>
                    </a>
                </div>
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="" title="">
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-3.jpg') }}" title="" alt="" />
                        </figure>
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                <div class="self-center smooth">
                                    <img src="{{ asset('/uploads/page/icon-acting-2.png') }}" title="" alt="" />
                                </div>
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('/uploads/page/icon-acting-2-hover.png') }}" title="" alt="" />
                                </div>
                            </figure>
                            <span class="w-100 smooth">
                                DIREITO CIVIL E COMERCIAL
                            </span>
                        </article>
                    </a>
                </div>
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="" title="">
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-4.jpg') }}" title="" alt="" />
                        </figure>
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                <div class="self-center smooth">
                                    <img src="{{ asset('/uploads/page/icon-acting-3.png') }}" title="" alt="" />
                                </div>
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('/uploads/page/icon-acting-3-hover.png') }}" title="" alt="" />
                                </div>
                            </figure>
                            <span class="w-100 smooth">
                                DIREITO CIVIL E COMERCIAL
                            </span>
                        </article>
                    </a>
                </div>
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="" title="">
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-5.jpg') }}" title="" alt="" />
                        </figure>
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                <div class="self-center smooth">
                                    <img src="{{ asset('/uploads/page/icon-acting-2.png') }}" title="" alt="" />
                                </div>
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('/uploads/page/icon-acting-2-hover.png') }}" title="" alt="" />
                                </div>
                            </figure>
                            <span class="w-100 smooth">
                                DIREITO CIVIL E COMERCIAL
                            </span>
                        </article>
                    </a>
                </div>
                <div class="d_flex direction-column item">
                    <a class="w-100 h-100 d_flex direction-column" href="" title="">
                        <figure class="w-100">
                            <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-6.jpg') }}" title="" alt="" />
                        </figure>
                        <article class="w-100">
                            <figure class="w-100 d_flex justify-center relative">
                                <div class="self-center smooth">
                                    <img src="{{ asset('/uploads/page/icon-acting-1.png') }}" title="" alt="" />
                                </div>
                                <div class="self-center w-100 h-100 d_flex justify-center absolute top-0 left-0 opacity-0 smooth">
                                    <img class="self-center" src="{{ asset('/uploads/page/icon-acting-1-hover.png') }}" title="" alt="" />
                                </div>
                            </figure>
                            <span class="w-100 smooth">
                                DIREITO CIVIL E COMERCIAL
                            </span>
                        </article>
                    </a>
                </div>
            </article>
            <section class="w-100 m-top-80 m-top-1024-30">
                <h4 class="w-100 container main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    Notícias Relacionadas
                </h4>
                <aside class="w-100 m-top-20 d_flex wrap justify-center list-group-2 list-group-blog">
                    <div class="d_flex direction-column item">
                        <a class="w-100 h-100 d_flex direction-column" href="" title="">
                            <figure class="w-100">
                                <img class="w-100 smooth" src="{{ asset('/uploads/post/blog.jpg') }}" title="" alt="" />
                            </figure>
                            <article class="w-100">
                                    <span class="w-100 smooth">
                                        Entenda o que é Recuperação de Crédito
                                    </span>
                                <div class="w-100 m-top-10 t-italic text">
                                    <p>
                                        Atualmente, a inadimplência é um dos maiores problemas enfrentado por empresas, independentemente de seu porte.
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
                    <div class="d_flex direction-column item">
                        <a class="w-100 h-100 d_flex direction-column" href="" title="">
                            <figure class="w-100">
                                <img class="w-100 smooth" src="{{ asset('/uploads/post/blog.jpg') }}" title="" alt="" />
                            </figure>
                            <article class="w-100">
                                    <span class="w-100 smooth">
                                        Entenda o que é Recuperação de Crédito
                                    </span>
                                <div class="w-100 m-top-10 t-italic text">
                                    <p>
                                        Atualmente, a inadimplência é um dos maiores problemas enfrentado por empresas, independentemente de seu porte.
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
                    <div class="d_flex direction-column item">
                        <a class="w-100 h-100 d_flex direction-column" href="" title="">
                            <figure class="w-100">
                                <img class="w-100 smooth" src="{{ asset('/uploads/post/blog.jpg') }}" title="" alt="" />
                            </figure>
                            <article class="w-100">
                                    <span class="w-100 smooth">
                                        Entenda o que é Recuperação de Crédito
                                    </span>
                                <div class="w-100 m-top-10 t-italic text">
                                    <p>
                                        Atualmente, a inadimplência é um dos maiores problemas enfrentado por empresas, independentemente de seu porte.
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
                </aside>
            </section>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex box-contact">
                <section class="w-35 overflow-h b-radius-10">
                    <h5 class="w-100 p-top-30 p-bottom-30 main-bg t-align-c color-white f-size-35 font-3 f-size-1024-26">
                        Entre em Contato
                    </h5>
                    <form class="w-100 bg-white-2 d_flex direction-column form" id="fContact" method="get" action="">
                        <fieldset>
                            <label class="f-left bg-white-2" for="contact-name">
                                Insira aqui o seu Nome Completo
                            </label>
                            <input class="w-100" type="text" id="contact-name" value="" placeholder="" />
                        </fieldset>
                        <div class="w-100 d_flex">
                            <fieldset class="flex-1">
                                <label class="f-left bg-white-2" for="contact-email">
                                    Insira o seu E-mail
                                </label>
                                <input class="w-100" type="email" id="contact-email" value="" placeholder="antoniosc@gmail.com" />
                            </fieldset>
                            <fieldset class="flex-1 m-left-15-px">
                                <label class="f-left bg-white-2" for="contact-phone">
                                    Insira seu Telefone
                                </label>
                                <input class="w-100 masked-phone" type="text" id="contact-phone" value="" placeholder="(51) 3222.3012" />
                            </fieldset>
                        </div>
                        <fieldset>
                            <label class="f-left bg-white-2" for="contact-message">
                                Escreva aqui sua Mensagem
                            </label>
                            <textarea class="w-100" id="contact-message" placeholder="Lorem ipsum dolor sit amet"></textarea>
                        </fieldset>
                        <fieldset class="box-submit">
                            <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
                        </fieldset>
                    </form>
                </section>
                <aside class="min-h-100 overflow-h b-radius-10 flex-1 m-left-30-px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427849!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1571401437670!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </aside>
            </article>
        </div>
    </section>
@endsection