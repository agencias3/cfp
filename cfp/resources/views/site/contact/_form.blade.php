<aside class="overflow-h min-h-100 b-radius-10 w-1024-100 m-top-1024-30">
    <h6 class="w-100 t-align-c secondary-color-1 f-size-26 font-4">
        Estamos prontos para te ajudar!
    </h6>
    <div class="w-100 m-top-20 l-height-14 t-align-c color-white f-size-14">
        Preencha os dados que nossa equipe entrará em<br />
        contato com você.
    </div>
    {!! Form::open(['route' => 'contact.store', 'class' => 'w-100 d_flex direction-column form form-2', 'id' => 'fContact']) !!}
    {!! Form::hidden('language', app()->getLocale(), ['required' => true]) !!}
    {!! Form::hidden('type', 'cont') !!}
    <fieldset class="d_flex direction-column">
        <label for="contact-name">Nome</label>
        {!! Form::text('name', null, ['id' => 'contact-name', 'required' => true]) !!}
    </fieldset>
    <fieldset class="d_flex direction-column">
        <label for="contact-email">E-mail</label>
        {!! Form::email('email', null, ['id' => 'contact-email', 'required' => true]) !!}
    </fieldset>
    <fieldset class="d_flex direction-column">
        <label for="contact-phone">Telefone</label>
        {!! Form::text('phone', null, ['id' => 'contact-phone', 'class' => 'masked-phone', 'required' => true]) !!}
    </fieldset>
    <fieldset class="d_flex direction-column">
        <label for="message-phone">Mensagem</label>
        {!! Form::textarea('message', null, ['id' => 'contact-message', 'required' => true]) !!}
    </fieldset>
    <fieldset class="w-100 t-align-c">
        <input class="display-inline-block see-more pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
    </fieldset>
    <div class="def-msg w-100 display-none m-top-30 f-size-16 t-align-c"></div>
    {!! Form::close() !!}
</aside>