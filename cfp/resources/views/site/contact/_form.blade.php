{!! Form::open(['route' => 'contact.store', 'class' => $class, 'id' => 'fContact', 'files'=> true]) !!}
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