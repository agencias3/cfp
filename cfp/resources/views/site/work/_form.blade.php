{!! Form::open(['route' => 'work.store', 'class' => 'w-100 d_flex direction-column form form-careers', 'id' => 'fWork', 'files'=> true]) !!}
    <div class="w-100 d_flex wrap">
        <fieldset class="flex-1 w-800-100">
            <label class="f-left bg-white" for="careers-name">
                Insira aqui o seu Nome Completo *
            </label>
            <input class="w-100" type="text" id="careers-name" name="name" placeholder="" required />
        </fieldset>
        <fieldset class="flex-1 m-left-15-px w-800-100">
            <label class="f-left bg-white" for="careers-email">
                Insira aqui o seu E-mail *
            </label>
            <input class="w-100" type="email" id="careers-email" name="email" placeholder="" required />
        </fieldset>
    </div>
    <div class="w-100 d_flex wrap">
        <fieldset class="flex-1 w-800-100">
            <label class="f-left bg-white" for="careers-phone">
                Insira seu Telefone *
            </label>
            <input class="w-100 masked-phone" type="text" id="careers-phone" name="phone" placeholder="" required />
        </fieldset>
        <fieldset class="flex-1 m-left-15-px w-800-100">
            <label class="f-left bg-white" for="careers-formation">
                Formação Profissional
            </label>
            <input class="w-100" type="text" id="careers-formation" name="formation" placeholder="" />
        </fieldset>
    </div>
    <div class="w-100 d_flex wrap">
        <fieldset class="flex-1 w-800-100">
            <label class="f-left bg-white" for="careers-uf">
                Estado
            </label>
            <input class="w-100" type="text" id="careers-uf" name="state" placeholder="" />
        </fieldset>
        <fieldset class="flex-1 m-left-15-px w-800-100">
            <label class="f-left bg-white" for="careers-city">
                Cidade
            </label>
            <input class="w-100" type="text" id="careers-city" name="city" placeholder="" />
        </fieldset>
    </div>
    <div class="w-100 d_flex wrap">
        <fieldset class="flex-1 w-800-100">
            <label class="f-left bg-white" for="careers-acting">
                Área de Atuação Principal
            </label>
            <input class="w-100" type="text" id="careers-acting" name="occupation_area" placeholder="" required />
        </fieldset>
        <fieldset class="flex-1 m-left-15-px w-800-100">
            <label class="f-left bg-white" for="careers-file">
                Anexar Currículo
            </label>
            <input class="w-100" type="file" id="careers-file" name="file" placeholder="" required />
        </fieldset>
    </div>
    <fieldset>
        <label class="f-left bg-white" for="careers-message">
            Escreva aqui sua Mensagem *
        </label>
        <textarea class="w-100" id="careers-message" placeholder="Mensagem..." name="message" required></textarea>
    </fieldset>
    <fieldset class="box-submit w-600-100 send-contact">
        <input class="w-100 pointer smooth" type="submit" id="send-contact" value="ENVIAR" />
    </fieldset>
    <span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
{!! Form::close() !!}