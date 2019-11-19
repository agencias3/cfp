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