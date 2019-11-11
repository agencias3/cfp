<?php
$classForm = 'w-100 m-top-40 form-newsletter fNewsletter';
if (isset($class)) {
    $classForm = $class;
}
?>
{!! Form::open(['route' => 'newsletter.store', 'class' => $classForm, 'id' => 'fNewsletter', 'files'=> true]) !!}
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
@if(isset($trueMsg))
    <span class="w-100 m-top-15 color-white f-size-12">
    Assine para receber novidades por e-mail!
</span>
@endif
<span class="def-msg w-100 m-top-30 f-size-16 t-align-c"></span>
{!! Form::close() !!}