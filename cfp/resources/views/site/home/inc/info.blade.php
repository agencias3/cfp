<section class="w-100 d_flex wrap relative secondary-bg-1 direction-1024-column">
    <section class="w-50 p-top-50 p-bottom-50 w-1024-100 p-top-1024-30 p-bottom-1024-30">
        <div class="w-90 f-right content-form f-1024-l max-w-1024-100 m-left-1024-5">
            <h1 class="w-70 title w-1024-100">
                Quando vou<br />
                me aposentar?
            </h1>
            {!! Form::open(['route' => 'contact.store', 'class' => 'w-70 m-top-20 d_flex direction-column form w-1024-100 m-top-1024-10', 'id' => 'fInfo']) !!}
            {!! Form::hidden('language', app()->getLocale(), ['required' => true]) !!}
            {!! Form::hidden('type', 'info') !!}
            <fieldset class="d_flex direction-column">
                <label for="calc-name">Nome</label>
                {!! Form::text('name', null, ['id' => 'calc-name', 'required' => true]) !!}
            </fieldset>
            <fieldset class="d_flex direction-column">
                <label for="calc-email">E-mail</label>
                {!! Form::email('email', null, ['id' => 'calc-email', 'required' => true]) !!}
            </fieldset>
            <fieldset class="d_flex direction-column">
                <label for="calc-phone">Telefone</label>
                {!! Form::text('phone', null, ['id' => 'calc-phone', 'class' => 'masked-phone', 'required' => true]) !!}
            </fieldset>
            <fieldset class="w-100 t-align-c">
                <input class="display-inline-block pointer smooth" type="submit" id="send-calc" value="DESCUBRA" />
            </fieldset>
            <div class="def-msg w-100 display-none m-top-30 f-size-16 t-align-c"></div>
            {!! Form::close() !!}
        </div>
    </section>
    <figure class="w-50 d_flex min-h-100 w-1024-100 h-1024-350-px h-600-250-px" style="background: url({{ asset('uploads/page/calc.jpg')}}) no-repeat;background-size: cover;background-position: center center;"></figure>
</section>