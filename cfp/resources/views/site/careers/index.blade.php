@extends('site.layouts.app')
@section('content')
    <section class="w-100 relative z-index-1 top-page">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
                <article class="w-100 d_flex justify-center">
                    <div class="d_flex direction-column">
                        <h1 class="w-80 m-left-10 f-size-55 t-align-c color-white font-3 f-size-1024-35 f-size-600-30">
                            Bem-vindo(a) ao escritório que gera resultados e compartilha experiências há 16 anos
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
                            <a href="" title="CARREIRAS">
                                CARREIRAS
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
        </div>
    </section>
    <section class="w-100 p-top-80 p-bottom-80 bg-white relative z-index-2 p-top-1024-30 p-bottom-1024-30">
        <div class="center">
            <div class="w-100 container">
                <h2 class="w-100 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    Trabalhe no CFP
                </h2>
                <div class="w-100 m-top-25 text t-align-1024-c">
                    <p>
                        A tomada de decisão rápida e inteligente, calcada nos princípios da ética, além da busca pela qualidade da técnica jurídica e o constante aprimoramento são
                        marcas daqueles que atuam no escritório.
                    </p>
                    <p>
                        Ao longo dos anos de atuação, foi construída uma trajetória sólida, através da estruturação de um corpo jurídico de alto padrão técnico.<br />
                        A motivação profissional sempre foi a incessante busca pelo êxito, mantendo continuamente o compromisso com a ética e a satisfação dos clientes.
                    </p>
                </div>
                <h3 class="w-100 m-top-60 main-color f-size-35 font-3 m-top-1024-30 t-align-1024-c f-size-1024-26">
                    Vagas Abertas
                </h3>
            </div>
            <div class="w-100 h-100 fixed z-index-9 top-0 left-0 bg-black-transparent-05 popup-ajax">
                <div class="w-100 min-h-100 relative d_flex justify-center">
                    <span class="w-100 h-100 absolute top-0 left-0 z-index-1" onclick="closeJob()"></span>
                    <div class="w-500-px relative z-index-2 self-center">
                        <div class="w-100 relative b-radius-20 overflow-h">
                            <a class="absolute top-0 right-0 close-popup" href="javascript:void(0);" onclick="closeJob()" title="Fechar">
                                x
                            </a>
                            <div class="w-100 bg-white">
                                <p class="w-100 m-top-10">
                                    NOME DA VAGA SELECIONADA
                                </p>
                                <span class="w-100 m-top-30 f-w-700 main-color f-size-14">
                                    Requisitos ou Resumo sobre a Vaga
                                </span>
                                <div class="w-100 m-top-20 text">
                                    <ul>
                                        <li>
                                            Descrição: Lorem ipsum dolor sit amet
                                        </li>
                                        <li>
                                            Salário: Consectetur adipiscing elit Pellentesque sit
                                        </li>
                                        <li>
                                            Horário: Scelerisque porttitor id ut leo
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <a class="w-100 p-top-20 p-bottom-20 bg-white-1 d_flex justify-center" href="" title="Compartilhe essa vaga com alguém que você conhece">
                                <span class="m-top-1 color-grey f-size-14 f-w-600">
                                    Compartilhe essa vaga com alguém que você conhece
                                </span>
                                <figure class="m-left-10-px">
                                    <img src="{{ asset('assets/site/images/share.png') }}" title="Compartilhe essa vaga com alguém que você conhece" alt="Compartilhe essa vaga com alguém que você conhece" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100 m-top-10 list-job slider-slick-4">
                <div class="f-left item-job">
                    <a class="f-left active item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
                <div class="f-left item-job">
                    <a class="f-left item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
                <div class="f-left item-job">
                    <a class="f-left item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
                <div class="f-left item-job">
                    <a class="f-left item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
                <div class="f-left item-job">
                    <a class="f-left item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
                <div class="f-left item-job">
                    <a class="f-left item-job" href="javascript:void(0);" title="" onclick="loadJob($(this), 2)" >
                        <span>
                            NOME DA VAGA A SER PREENCHIDA
                        </span>
                    </a>
                </div>
            </div>
            <div class="w-100 container">
                <span class="w-300-px h-1-px m-top-60 bg-grey m-top-1024-30"></span>
                <h4 class="w-100 m-top-30 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    Aqui, valorizamos lorem ipsum dolor sit amet consectetur.
                </h4>
            </div>
            <div class="w-100 m-top-30 d_flex wrap justify-center list-group-2">
                <div class="item">
                    <a class="w-100 h-100 b-radius-10 overflow-h html5lightbox" data-group="gallery" style="background: url({{ asset('/uploads/page/acting-2.jpg') }}) no-repeat;background-size: cover;background-position: center center;" href="{{ asset('/uploads/page/acting-2.jpg') }}" title="">
                        <img class="w-100 opacity-0" src="{{ asset('/uploads/page/acting-2.jpg') }}" title="" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a class="w-100 h-100 b-radius-10 overflow-h html5lightbox" data-group="gallery" style="background: url({{ asset('/uploads/page/acting-3.jpg') }}) no-repeat;background-size: cover;background-position: center center;" href="{{ asset('/uploads/page/acting-3.jpg') }}" title="">
                        <img class="w-100 opacity-0" src="{{ asset('/uploads/page/acting-3.jpg') }}" title="" alt="" />
                    </a>
                </div>
            </div>
            <div class="w-100 container">
                <div class="w-100 m-top-25 text t-align-1024-c">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla maximus sem sit amet pellentesque bibendum. Maecenas ut turpis vitae erat mattis consequat quis quis neque.
                        Duis in lorem a ante dictum consequat ac ac neque. Sed eleifend elit at enim egestas, vel rutrum orci placerat. Proin non vulputate nulla. Duis consectetur velit est.
                        Mauris ante est, volutpat ut libero ac, tempor faucibus arcu. Aliquam pulvinar nisi vitae tempus egestas.
                    </p>
                </div>
                <article class="w-100 m-top-60 m-top-1024-30">
                    <section class="w-55 w-1024-100">
                        <span class="w-300-px h-1-px bg-grey"></span>
                        <h5 class="w-100 m-top-30 main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                            Envie o seu Currículo
                        </h5>
                        <div class="w-100 m-top-25 text">
                            <p>
                                Preencha o formulário por completo e insira seu currículo
                                para que possamos te conhecer melhor
                            </p>
                        </div>
                        <form class="w-100 d_flex direction-column form form-careers" id="fContact" method="get" action="">
                            <div class="w-100 d_flex wrap">
                                <fieldset class="flex-1 w-800-100">
                                    <label class="f-left bg-white" for="careers-name">
                                        Insira aqui o seu Nome Completo
                                    </label>
                                    <input class="w-100" type="text" id="careers-name" value="" placeholder="" />
                                </fieldset>
                                <fieldset class="flex-1 m-left-15-px w-800-100">
                                    <label class="f-left bg-white" for="careers-email">
                                        Insira aqui o seu E-mail
                                    </label>
                                    <input class="w-100" type="email" id="careers-email" value="" placeholder="" />
                                </fieldset>
                            </div>
                            <div class="w-100 d_flex wrap">
                                <fieldset class="flex-1 w-800-100">
                                    <label class="f-left bg-white" for="careers-phone">
                                        Insira seu Telefone
                                    </label>
                                    <input class="w-100 masked-phone" type="text" id="careers-phone" value="" placeholder="" />
                                </fieldset>
                                <fieldset class="flex-1 m-left-15-px w-800-100">
                                    <label class="f-left bg-white" for="careers-formation">
                                        Formação Profissional
                                    </label>
                                    <input class="w-100" type="text" id="careers-formation" value="" placeholder="" />
                                </fieldset>
                            </div>
                            <div class="w-100 d_flex wrap">
                                <fieldset class="flex-1 w-800-100">
                                    <label class="f-left bg-white" for="careers-uf">
                                        Estado
                                    </label>
                                    <input class="w-100" type="text" id="careers-uf" value="" placeholder="" />
                                </fieldset>
                                <fieldset class="flex-1 m-left-15-px w-800-100">
                                    <label class="f-left bg-white" for="careers-city">
                                        Cidade
                                    </label>
                                    <input class="w-100" type="text" id="careers-city" value="" placeholder="" />
                                </fieldset>
                            </div>
                            <div class="w-100 d_flex wrap">
                                <fieldset class="flex-1 w-800-100">
                                    <label class="f-left bg-white" for="careers-acting">
                                        Área de Atuação Principal
                                    </label>
                                    <input class="w-100" type="text" id="careers-acting" value="" placeholder="" />
                                </fieldset>
                                <fieldset class="flex-1 m-left-15-px w-800-100">
                                    <label class="f-left bg-white" for="careers-file">
                                        Anexar Currículo
                                    </label>
                                    <input class="w-100" type="file" id="careers-file" value="" placeholder="" />
                                </fieldset>
                            </div>
                            <fieldset>
                                <label class="f-left bg-white" for="careers-message">
                                    Escreva aqui sua Mensagem
                                </label>
                                <textarea class="w-100" id="careers-message" placeholder="Lorem ipsum dolor sit amet"></textarea>
                            </fieldset>
                            <fieldset class="box-submit w-600-100">
                                <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
                            </fieldset>
                        </form>
                    </section>
                    <nav class="w-40 f-right list-group-careers w-1024-100">
                        <ul class="w-100">
                            <li class="w-100 d_flex wrap">
                                <figure class="d_flex direction-column justify-center">
                                    <span class="self-center">
                                        <img src="{{ asset('/uploads/page/career-1.png') }}" title="" alt="" />
                                    </span>
                                </figure>
                                <div class="flex-1 self-center m-left-30-px text">
                                    <p class="m-bottom-5">
                                        <strong>
                                            Somos uma empresa em constante ascensão
                                        </strong>
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nulla tempor placerat tincidunt.
                                    </p>
                                </div>
                            </li>
                            <li class="w-100 d_flex wrap">
                                <figure class="d_flex direction-column justify-center">
                                    <span class="self-center">
                                        <img src="{{ asset('/uploads/page/career-2.png') }}" title="" alt="" />
                                    </span>
                                </figure>
                                <div class="flex-1 self-center m-left-30-px text">
                                    <p class="m-bottom-5">
                                        <strong>
                                            Local de trabalho amigável
                                        </strong>
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nulla tempor placerat tincidunt.
                                    </p>
                                </div>
                            </li>
                            <li class="w-100 d_flex wrap">
                                <figure class="d_flex direction-column justify-center">
                                    <span class="self-center">
                                        <img src="{{ asset('/uploads/page/career-3.png') }}" title="" alt="" />
                                    </span>
                                </figure>
                                <div class="flex-1 self-center m-left-30-px text">
                                    <p class="m-bottom-5">
                                        <strong>
                                            Planos de Saude
                                        </strong>
                                    </p>
                                    <p>
                                        Odontológicos, farmacêuticos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nulla tempor placerat
                                    </p>
                                </div>
                            </li>
                            <li class="w-100 d_flex wrap">
                                <figure class="d_flex direction-column justify-center">
                                    <span class="self-center">
                                        <img src="{{ asset('/uploads/page/career-4.png') }}" title="" alt="" />
                                    </span>
                                </figure>
                                <div class="flex-1 self-center m-left-30-px text">
                                    <p class="m-bottom-5">
                                        <strong>
                                            Excelência em Advocacia
                                        </strong>
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur nulla tempor placerat tincidunt.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </article>
                <div class="w-100 m-top-80 d_flex wrap box-social-page m-top-1024-30">
                    <aside class="w-100 c-left d_flex wrap justify-space direction-600-column">
                        <span class="self-center m-top-2 color-grey f-size-16 w-800-100 t-align-800-c">
                            Compartilhe esta página com alguém
                        </span>
                        <ul class="d_flex w-800-100 m-top-800-20 justify-800-center">
                            <li class="f-right m-left-600-0">
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
            </div>
        </div>
    </section>
@endsection