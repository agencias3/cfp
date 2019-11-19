<section class="w-35 overflow-h b-radius-10 w-1024-100">
    <h5 class="w-100 p-top-30 p-bottom-30 main-bg t-align-c color-white f-size-30 f-size-1024-24 f-size-600-18">
        Entre em Contato
    </h5>
    {!! Form::open(['route' => 'segment.store', 'class' => 'w-100 bg-white-2 d_flex direction-column form', 'id' => 'fSegmentContact', 'files'=> true]) !!}
        <input type="hidden" name="segment_id" value="{{ $segment->id }}" required />
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
                <input class="w-100" type="email" id="contact-email" name="email" placeholder="antoniosc@gmail.com" required />
            </fieldset>
            <fieldset class="flex-1 m-left-15-px w-800-100">
                <label class="f-left bg-white-2" for="contact-phone">
                    Insira seu Telefone *
                </label>
                <input class="w-100 masked-phone" type="text" id="contact-phone" name="phone" placeholder="(51) 3222.3012" required />
            </fieldset>
        </div>
        <fieldset>
            <label class="f-left bg-white-2" for="contact-message">
                Escreva aqui sua Mensagem *
            </label>
            <textarea class="w-100" id="contact-message" name="message" placeholder="Lorem ipsum dolor sit amet" required></textarea>
        </fieldset>
        <fieldset class="box-submit">
            <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
        </fieldset>
        <span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
    {!! Form::close() !!}
</section>