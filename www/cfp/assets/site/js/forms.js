$(document).ready(function () {
    contact();
    newsletter();
    serviceContact();
    segmentContact();
    work();
});

function segmentContact() {
    $("#fSegmentContact").submit(function () {
        $('#fSegmentContact .def-msg').fadeIn();
        $('#fSegmentContact .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/cfp/segmentos/store",
            beforeSend: function () {
                $('#fSegmentContact .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fSegmentContact .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fSegmentContact .def-msg').html("<strong class='color-white f-w-600'>" + msgError + "</strong>");
                }

                $('#fSegmentContact .send-contact').fadeIn();
            }
        });
        return false;

    });
}

function serviceContact() {
    $("#fServiceContact").submit(function () {
        $('#fServiceContact .def-msg').fadeIn();
        $('#fServiceContact .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/cfp/areas-atuacao/store",
            beforeSend: function () {
                $('#fServiceContact .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fServiceContact .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fServiceContact .def-msg').html("<strong class='color-white f-w-600'>" + msgError + "</strong>");
                }

                $('#fServiceContact .send-contact').fadeIn();
            }
        });
        return false;

    });
}

function contact() {
    $("#fContact").submit(function () {
        $('#fContact .def-msg').fadeIn();
        $('#fContact .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/cfp/contato/store",
            beforeSend: function () {
                $('#fContact .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fContact .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fContact .def-msg').html("<strong class='color-white f-w-600'>" + msgError + "</strong>");
                }

                $('#fContact .send-contact').fadeIn();
            }
        });
        return false;

    });
}

function newsletter() {
    $(".fNewsletter").submit(function () {
        $('.fNewsletter .def-msg').fadeIn();
        $('.fNewsletter .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/cfp/newsletter/store",
            beforeSend: function () {
                $('.fNewsletter .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('.fNewsletter .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('.fNewsletter .def-msg').html("<strong class='color-white f-w-600'>" + msgError + "</strong>");
                }

                $('.fNewsletter .send-contact').fadeIn();
            }
        });
        return false;
    });
}

function work() {
    $("#fWork").submit(function () {
        $('#fWork .def-msg').fadeIn();
        $('#fWork .send-contact').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/cfp/carreiras/store",
            beforeSend: function () {
                $('#fWork .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fWork .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fWork .def-msg').html("<strong class='color-white f-w-600'>" + msgError + "</strong>");
                }

                $('#fWork .send-contact').fadeIn();
            }
        });
        return false;

    });
}