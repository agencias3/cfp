
<div class="w-100 h-100 fixed z-index-9 top-0 left-0 display-none main-popup">
    <div class="w-100 h-100 fixed z-index-1 top-0 left-0 bg-black-transparent-05 pointer" onclick="actionPopup();"></div>
    <aside class="fixed z-index-2 top-50 left-50 secondary-bg-1 overflow-h b-radius-10 w-1024-100 m-top-1024-30">
        <a class="absolute z-index-2 top-0 right-0 bt-close-popup smooth" onclick="actionPopup();" href="javascript:void(0);" title="x">
            x
        </a>
        <article class="w-100 relative z-index-1">
            <h6 class="w-100 t-align-c l-height-14 main-color f-size-26 font-4 f-size-1024-18">
                Precisa de ajuda com o INSS?<br />
                Nós podemos te ajudar!
            </h6>
            <div class="w-100 m-top-20 l-height-14 t-align-c color-white f-size-16">
                Preencha os dados que ligaremos para você!
            </div>
            {!! Form::open(['route' => 'contact.store', 'class' => 'w-100 d_flex direction-column form form-2', 'id' => 'fCall']) !!}
            {!! Form::hidden('language', app()->getLocale(), ['required' => true]) !!}
            {!! Form::hidden('type', 'call') !!}
            <fieldset class="d_flex direction-column">
                <label for="call-name">Nome</label>
                {!! Form::text('name', null, ['id' => 'call-name', 'required' => true]) !!}
            </fieldset>
            <fieldset class="d_flex direction-column">
                <label for="call-phone">Telefone</label>
                {!! Form::text('phone', null, ['id' => 'call-phone', 'class' => 'masked-phone', 'required' => true]) !!}
            </fieldset>
            <fieldset class="d_flex direction-column">
                <label for="call-phone">Repetir Telefone*</label>
                {!! Form::text('phone2', null, ['id' => 'call-phone', 'class' => 'masked-phone', 'required' => true]) !!}
            </fieldset>
            <fieldset class="d_flex direction-column justify-center box-radio">
                <label class="w-100 t-align-c">
                    Selecione o melhor turno para entrarmos em contato:
                </label>
                <div class="w-100 m-top-15 d_flex wrap justify-center">
                        <span>
                            <input type="radio" name="turn" checked id="call-turn-m" value="m" />
                            <label for="call-turn-m">
                                MANHÃ
                            </label>
                        </span>
                    <span class="m-left-20-px">
                            <input type="radio" name="turn" id="call-turn-a" value="a" />
                            <label for="call-turn-a">
                                TARDE
                            </label>
                        </span>
                </div>
            </fieldset>
            <fieldset class="w-100 t-align-c">
                <input class="display-inline-block see-more pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
            </fieldset>
            <div class="def-msg w-100 display-none m-top-30 f-size-16 t-align-c"></div>
            {!! Form::close() !!}
        </article>
    </aside>
</div>