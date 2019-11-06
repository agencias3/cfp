@extends('site.layouts.app')
@section('content')
    <section class="w-100 relative z-index-1 top-page p-bottom-1024-30">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80">
                <article class="w-100 d_flex justify-center p-top-1024-30 p-bottom-1024-30">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-45 color-white font-2 f-size-1024-35">
                            Notícias e Artigos
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
                            <a href="" title="NOTÍCIAS">
                                NOTÍCIAS
                            </a>
                        </li>
                        <li>
                            •
                        </li>
                        <li>
                            <a href="" title="LOREM IPSUM DOLLOR">
                                LOREM IPSUM DOLLOR
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
        </div>
    </section>
    <section class="w-100 p-bottom-80 bg-white relative z-index-2 p-bottom-1024-30">
        <div class="center">
            <section class="w-100 container p-top-80 p-top-1024-30">
                <h1 class="w-100 m-bottom-50 l-height-14 t-align-c f-size-30 color-black f-w-700 m-bottom-1024-30 t-align-1024-c f-size-1024-20">
                    Entenda o que é Recuperação de Crédito
                </h1>
                <div class="w-70 m-left-15 m-bottom-50 overflow-h b-radius-10 main-bg gallery-wrapper w-800-100 m-bottom-800-30">
                    <div class="w-100 relative slider-slick-1">
                        <div class="f-left">
                            <a class="w-100" href="" title="">
                                <figure class="w-100">
                                    <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-5.jpg') }}" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                        <div class="f-left">
                            <a class="w-100" href="" title="">
                                <figure class="w-100">
                                    <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-6.jpg') }}" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                        <div class="f-left">
                            <a class="w-100" href="" title="">
                                <figure class="w-100">
                                    <img class="w-100 smooth" src="{{ asset('/uploads/page/acting-7.jpg') }}" title="" alt="" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-100 d_flex justify-600-center">
                    <img src="{{ asset('assets/site/images/date.png') }}" title="" alt="" />
                    <span class="m-top-8 m-left-15-px color-grey f-size-16">
                        16 de ago, 2019
                    </span>
                </div>
                <div class="w-100 m-top-30 text t-align-1024-c">
                    <p>
                        Atualmente, a inadimplência é um dos maiores problemas enfrentado por empresas, independentemente de seu porte.
                        Desse modo, receber os créditos que são devidos por clientes inadimplentes é de grande importância para saúde financeira da sua empresa.
                    </p>
                    <p>
                        A recuperação de crédito pode ser utilizada de modo estratégico. É possível buscar o pagamento de créditos vencidos ou em mora de maneira amigável. Entretanto, quando necessário, a recuperação de crédito pode ser feita pela via judicial, ajuizando demandas específicas para cada contrato inadimplido.
                    </p>
                    <p>
                        Donec consectetur condimentum est at condimentum. Nam nec scelerisque ipsum. Cras suscipit justo nec dolor lobortis, sit amet vulputate arcu fringilla. Curabitur efficitur et lacus facilisis suscipit. Quisque id est vel purus interdum rutrum. Nam sagittis leo sit amet lacinia ornare. Integer est enim, dapibus commodo rhoncus sed, fermentum eget nulla.
                    </p>
                </div>
                <ul class="w-100 m-top-25 d_flex wrap list-group-tags-2 m-top-1024-20 justify-1024-center">
                    <li>
                        TAGS:
                    </li>
                    <li>
                        <a href="" title="">
                            #lorem ipsum
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            #lorem ipsum
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            #lorem ipsum
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            #lorem ipsum
                        </a>
                    </li>
                    <li>
                        <a href="" title="">
                            #lorem ipsum
                        </a>
                    </li>
                </ul>
                <div class="w-100 m-top-30 d_flex wrap box-social-page m-top-1024-20 direction-600-column">
                    <section class="c-left d_flex w-600-100 justify-600-center">
                        <a class="self-center m-top-2 t-decoration" href="{{ route('blog') }}" title="Voltar para o Blog">
                            <img class="m-top-2" src="{{ asset('assets/site/images/back.png') }}" title="Voltar para o Blog" alt="Voltar para o Blog">
                            <span class="m-left-15-px f-w-600 main-color f-size-16">
                                Voltar para o Blog
                            </span>
                        </a>
                    </section>
                    <aside class="c-left flex-1 d_flex justify-end justify-600-center m-top-600-20">
                        <ul class="d_flex">
                            <li class="self-center m-top-2 f-w-600 main-color f-size-16 display-600-none">
                                COMPARTILHAR
                            </li>
                            <li class="m-left-10-px m-left-600-0">
                                <a href="https://www.facebook.com/sharer.php?u=" target="_blank" title="Facebook">
                                    <img src="{{ asset('assets/site/images/icon-social-1.png') }}" title="Facebook" alt="Facebook">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="http://twitter.com/home?status=" target="_blank" title="Twitter">
                                    <img src="{{ asset('assets/site/images/icon-social-2.png') }}" title="Twitter" alt="Twitter">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="https://plus.google.com/share?url=" target="_blank" title="GooglePlus">
                                    <img src="{{ asset('assets/site/images/icon-social-3.png') }}" title="GooglePlus" alt="GooglePlus">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="whatsapp://send?text=" target="_blank" title="Whatsapp">
                                    <img src="{{ asset('assets/site/images/icon-social-4.png') }}" title="Whatssapp" alt="Whatsapp">
                                </a>
                            </li>
                            <li class="m-left-10-px">
                                <a href="" target="_blank" title="">
                                    <img src="{{ asset('assets/site/images/icon-social-5.png') }}" title="" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </section>
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
@endsection