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
            @include('site.home.inc.service')
            @include('site.home.inc.awards')
        </div>
    </section>
    @include('site.home.inc.blog')
    <section class="w-100 p-top-80 p-bottom-80 bg-white p-top-1024-30 p-bottom-1024-30">
        <div class="center container">
            <article class="w-100 d_flex wrap box-contact">
                <section class="w-35 overflow-h b-radius-10 w-1024-100">
                    <h5 class="w-100 p-top-30 p-bottom-30 main-bg t-align-c color-white f-size-35 font-3 f-size-1024-26">
                        Entre em Contato
                    </h5>
                    {!! Form::open(['route' => 'contact.store', 'class' => 'w-100 bg-white-2 d_flex direction-column form', 'id' => 'fContact', 'files'=> true]) !!}
                    <fieldset>
                        <label class="f-left bg-white-2" for="contact-name">
                            Insira aqui o seu Nome Completo *
                        </label>
                        <input class="w-100" type="text" id="contact-name" name="name" placeholder="" required />
                    </fieldset>
                    <div class="w-100 d_flex wrap">
                        <fieldset class="flex-1 w-800-100">
                            <label class="f-left bg-white-2" for="contact-email">
                                Insira o seu E-mail *
                            </label>
                            <input class="w-100" type="email" id="contact-email" name="email" placeholder="antoniosc@gmail.com *" required />
                        </fieldset>
                        <fieldset class="flex-1 m-left-15-px w-800-100">
                            <label class="f-left bg-white-2" for="contact-phone">
                                Insira seu Telefone *
                            </label>
                            <input class="w-100 masked-phone" type="text" id="contact-phone" name="phone" placeholder="(99) 9999.9999" required />
                        </fieldset>
                    </div>
                    <fieldset>
                        <label class="f-left bg-white-2" for="contact-message">
                            Escreva aqui sua Mensagem *
                        </label>
                        <textarea class="w-100" id="contact-message" name="message" placeholder="Lorem ipsum dolor sit amet" required></textarea>
                    </fieldset>
                    <fieldset class="box-submit send-contact">
                        <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
                    </fieldset>
                    <span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
                    {!! Form::close() !!}
                </section>
                @include('site.layouts._map')
            </article>
        </div>
    </section>
@endsection