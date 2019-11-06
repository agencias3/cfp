function mascara() {
    var masks = ['(00) 00000-0000', '(00) 0000-00009'];
    $(".masked-phone").mask(masks[1], {
        onKeyPress: function (val, e, field, options) {
            field.mask(val.length > 14 ? masks[0] : masks[1], options);
        }
    });
    $(".masked-cep").mask("99999-999");
    $(".masked-cpf").mask("999.999.999-99");
    $(".masked-cnpj").mask("99.999.999/9999-99");
    $(".masked-validity").mask("99/99");
    $(".masked-date").mask("99/99/9999");
    $('.masked-money').mask('000.000.000.000.000,00', {reverse: true});
}
function scrollPage(x) {
    var newbox = $(x);
    $('html, body').animate({scrollTop: newbox.offset().top - 50}, 600);
}
function menu(){
    if($(".main-menu").hasClass('display-1024-none')){
        $(".main-menu").removeClass('display-1024-none');
        $('body').addClass('overflow-h');
    }else{
        $(".main-menu").addClass('display-1024-none');
        $('body').removeClass('overflow-h');
    }
}
function topFix() {
    var h = $('.false-header').innerHeight();
    if($('.false-header').length > 0){
        h = parseFloat(h + $('.false-header').innerHeight());
    }else{
        h = $(".main-banner").innerHeight();
    }
    h = h - 115;
    var fix = $(".top-fix").offset().top;
    if (fix > h) {
        $('header.main-header').addClass('in-scroll');
    } else {
        $('header.main-header').removeClass('in-scroll');
    }
}
function openHeader() {
    if($("header.main-header").hasClass('open')){
        $("header.main-header").removeClass('open');
        $(".action-menu b").text('Menu');
    }else{
        $("header.main-header").addClass('open');
        $(".action-menu b").text('Fechar');
    }
}
function segment(el) {
    if(el.parents('li').hasClass('active')){
        el.parents('.list-segment').find('.active').removeClass('active');
    }else{
        el.parents('.list-segment').find('.active').removeClass('active');
        el.parents('li').addClass('active');
    }
}
function loadJob(el, id){
    $(".popup-ajax").removeClass('display-none');
    el.addClass('active');
}
function closeJob(){
    $(".popup-ajax").addClass('display-none');
    $(".item-job.active").removeClass('active');
    //$(".popup-ajax").html('').addClass('display-none');
}
$(document).ready(function () {
    mascara();
    $(window).resize(function () {
        topFix();
    });
    $(window).scroll(function () {
        topFix();
    });
    $(window).on('load', function () {
        $('body').addClass('load');
        topFix();
    });
});