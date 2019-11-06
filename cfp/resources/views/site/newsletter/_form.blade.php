<article class="w-100 m-top-50">
    <span class="w-100 d_flex title-3">
        <b>
            CFP News
        </b>
    </span>
    <div class="w-100 m-top-30 color-white text">
        <p>
            Fique por dentro de notícias e artigos publicados em nosso Portal.
        </p>
    </div>
    {!! Form::open(['route' => 'newsletter.store', 'class' => 'w-100 m-top-40 form-newsletter', 'id' => 'fNewsletter', 'files'=> true]) !!}
        <label class="w-100 color-white f-size-16" for="newsletter-email">
            Assine a nossa Newsletter. Insira seu
        </label>
        <div class="w-100 m-top-20 d_flex">
            <fieldset class="flex-1">
                <input class="w-100" type="email" name="email" placeholder="seuemail@example.com.br *" required />
            </fieldset>
            <fieldset>
                <input class="w-100 pointer smooth" type="submit" id="send-newsletter" value="" />
            </fieldset>
        </div>
        <span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
    {!! Form::close() !!}
</article>