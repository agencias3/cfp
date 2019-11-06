@extends('site.layouts.app')
@section('content')
    @inject("page", "\AgenciaS3\Http\Controllers\Site\PageController")
    @include('site.home.inc.banner')
    <?php $page_1 = $page->show(1); ?>
    <section class="w-100 p-top-80 p-bottom-80 bg-white-1 p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <h1 class="w-100 title">
                {!! session()->get('page')[1]['name'] !!}
            </h1>
            <div class="w-100 m-top-30 text m-top-1024-20 t-align-1024-c">
                {!! session()->get('page')[1]['description'] !!}
            </div>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-100 container">
                <h2 class="w-100 title-2">
                    <span>Áreas de Atuação</span>
                </h2>
            </div>
            <article class="w-100 m-top-30 slider-slick-3 m-top-1024-20">
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
            <div class="w-100 m-top-80 container m-top-1024-30">
                <h3 class="w-100 t-align-c main-color f-size-35 font-3 f-size-1024-26">
                    Premiações
                </h3>
                <div class="w-70 m-top-30 m-left-15 t-align-c text w-1024-100 m-top-1024-20">
                    <p>
                        Nunc tempus mollis purus, ut mattis diam fermentum et. Fusce mi leo, faucibus sed eleifend tincidunt, dapibus at quam.
                        Aliquam erat volutpat. Cras imperdiet mattis velit, ac feugiat elit luctus vel. Vestibulum ante ipsum primis in faucibus
                        orci luctus et ultrices.
                    </p>
                </div>
            </div>
            <article class="w-100 m-top-40 d_flex wrap justify-center list-group m-top-1024-20">
                <div class="item-2">
                    <a class="smooth" href="" title="">
                        <figure class="w-100 d_flex justify-center">
                            <img class="max-w-100" src="{{ asset('/uploads/page/page-1.jpg') }}" title="" alt="" />
                        </figure>
                    </a>
                </div>
                <div class="item-2">
                    <a class="smooth" href="" title="">
                        <figure class="w-100 d_flex justify-center">
                            <img class="max-w-100" src="{{ asset('/uploads/page/page-1.jpg') }}" title="" alt="" />
                        </figure>
                    </a>
                </div>
                <div class="item-2">
                    <a class="smooth" href="" title="">
                        <figure class="w-100 d_flex justify-center">
                            <img class="max-w-100" src="{{ asset('/uploads/page/page-1.jpg') }}" title="" alt="" />
                        </figure>
                    </a>
                </div>
                <div class="item-2">
                    <a class="smooth" href="" title="">
                        <figure class="w-100 d_flex justify-center">
                            <img class="max-w-100" src="{{ asset('/uploads/page/page-1.jpg') }}" title="" alt="" />
                        </figure>
                    </a>
                </div>
                <div class="item-2">
                    <a class="smooth" href="" title="">
                        <figure class="w-100 d_flex justify-center">
                            <img class="max-w-100" src="{{ asset('/uploads/page/page-1.jpg') }}" title="" alt="" />
                        </figure>
                    </a>
                </div>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white-1 p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex wrap overflow-h b-radius-10 box-blog">
                <section class="w-35 p-bottom-100 min-h-100 d_flex direction-column p-bottom-1024-30 w-1024-100">
                    <div class="w-100 main-bg">
                        <h4 class="w-100 title">
                            Notícias
                        </h4>
                        <div class="w-100 m-top-30 color-white text m-top-1024-20 t-align-1024-c">
                            <p>
                                Fique por dentro de notícias e artigos publicados em nosso Portal.
                            </p>
                        </div>
                        <form class="w-100 m-top-40 form-newsletter m-top-1024-20" id="fNewsletter" method="get" action="">
                            <label class="w-100 color-white f-size-16 t-align-1024-c" for="newsletter-email">
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
                        <div class="w-100 m-top-40 c-left m-top-1024-30 t-align-1024-c">
                            <a class="display-inline-block see-more f-1024-n" href="" title="">
                                <span class="smooth">
                                    Veja todas as publicações
                                </span>
                                <b class="smooth">
                                    &#10140;
                                </b>
                            </a>
                        </div>
                    </div>
                </section>
                <aside class="flex-1 min-h-100 bg-white d_flex wrap list-group-2">
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
            </article>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex wrap box-contact">
                <section class="w-35 overflow-h b-radius-10 w-1024-100">
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
                        <div class="w-100 d_flex wrap">
                            <fieldset class="flex-1 w-800-100">
                                <label class="f-left bg-white-2" for="contact-email">
                                    Insira o seu E-mail
                                </label>
                                <input class="w-100" type="email" id="contact-email" value="" placeholder="antoniosc@gmail.com" />
                            </fieldset>
                            <fieldset class="flex-1 m-left-15-px w-800-100">
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
                <aside class="min-h-100 overflow-h b-radius-10 flex-1 m-left-30-px w-1024-100 m-top-1024-30 h-1024-350-px h-600-250-px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427849!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1571401437670!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </aside>
            </article>
        </div>
    </section>
@endsection