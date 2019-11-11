@extends('site.layouts.app')
@section('content')
    <section class="w-100 top-page">
        <div class="center">
            <article class="w-100 p-top-80 p-bottom-80 p-top-1024-30 p-bottom-1024-30">
                <article class="w-100 d_flex justify-center">
                    <div class="d_flex direction-column">
                        <h1 class="w-100 f-size-55 color-white font-3 f-size-1024-35">
                            Fale Conosco
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
                            <a href="" title="CONTATO">
                                CONTATO
                            </a>
                        </li>
                    </ul>
                </nav>
            </article>
            <article class="w-100 t-align-c relative z-index-9">
                <section class="display-inline-block w-800-px f-none max-w-100 b-radius-10 overflow-h box-contact-internal">
                    <h2 class="w-100 title-contact f-size-1024-14">
                        Para melhor atendê-lo, solicitamos que você preencha<br />
                        o formulário abaixo por completo
                    </h2>
                    <section class="w-100">
                        {!! Form::open(['route' => 'contact.store', 'class' => 'w-100 bg-white-2 d_flex direction-column form form-internal', 'id' => 'fContact', 'files'=> true]) !!}
                            <article class="w-100 d_flex wrap">
                                <section class="flex-1 w-800-100">
                                    <fieldset>
                                        <label class="f-left bg-white-2" for="contact-name">
                                            Insira aqui o seu Nome Completo *
                                        </label>
                                        <input class="w-100" type="text" id="contact-name" name="name" placeholder="" required />
                                    </fieldset>
                                    <fieldset>
                                        <label class="f-left bg-white-2" for="contact-email">
                                            Insira o seu E-mail *
                                        </label>
                                        <input class="w-100" type="email" id="contact-email" name="email" placeholder="antoniosc@gmail.com" required />
                                    </fieldset>
                                    <fieldset>
                                        <label class="f-left bg-white-2" for="contact-phone">
                                            Insira seu Telefone *
                                        </label>
                                        <input class="w-100 masked-phone" type="text" id="contact-phone" name="phone" placeholder="(51) 3222.3012" required />
                                    </fieldset>
                                </section>
                                <aside class="flex-1 w-800-100">
                                    <fieldset>
                                        <label class="f-left bg-white-2" for="contact-subject">
                                            Insira aqui o Assunto
                                        </label>
                                        <input class="w-100" type="text" id="contact-subject" name="subject" placeholder="Dúvidas sobre Contratos" />
                                    </fieldset>
                                    <fieldset>
                                        <label class="f-left bg-white-2" for="contact-message">
                                            Escreva aqui sua Mensagem *
                                        </label>
                                        <textarea class="w-100" id="contact-message" name="message" placeholder="Lorem ipsum dolor sit amet" required></textarea>
                                    </fieldset>
                                    <fieldset class="box-submit w-600-100 send-contact">
                                        <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
                                    </fieldset>
                                </aside>
                            </article>
                            <span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
                        {!! Form::close() !!}
                    </section>
                </section>
            </article>
        </div>
    </section>
    <section class="w-100 m-top-120-neg d_flex wrap relative z-index-2 m-top-1024-30">
        <section class="flex-1 p-top-120 p-bottom-120 bg-white w-1024-100 p-left-1024-5 p-right-1024-5 p-top-1024-30 p-bottom-1024-30">
            <article class="f-right m-right-50-px p-top-120 right-contact w-1024-100 p-top-1024-0 f-1024-l">
                <h3 class="w-100 t-align-r main-color f-size-35 font-3 t-align-1024-c f-size-1024-26">
                    Onde Estamos
                </h3>
                <div class="w-100 m-top-30 t-align-r main-color text m-top-1024-20 t-align-1024-c">
                    <p>
                        {!! nl2br(session()->get('configuration')[9]['description']) !!}<br />
                        @if(session()->get('configuration')[6]['description'])
                        Fone: {!! nl2br(session()->get('configuration')[6]['description']) !!}
                        @endif
                    </p>
                </div>
            </article>
        </section>
        @if(session()->get('configuration')[8]['description'])
        <aside class="w-50 min-h-100 w-1024-100 h-1024-350-px h-600-250-px">
            <?php
            $map = str_replace('<iframe src=', '<iframe src=', session()->get('configuration')[8]['description']);
            ?>
            {!! $map !!}
            <!--
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.760236132119!2d-51.19081598427849!3d-30.043735738205317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197823229c28a5%3A0x6cf8e8f4472c08c!2sRua%20V%C3%ADtor%20Hugo%2C%2037%20-%20Petr%C3%B3polis%2C%20Porto%20Alegre%20-%20RS%2C%2090630-070!5e0!3m2!1spt-BR!2sbr!4v1571401437670!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            -->
        </aside>
        @endif
    </section>
@endsection