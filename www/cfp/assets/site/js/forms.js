$(document).ready(function () {
    contact();
    info();
    call();
});
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
            url: "/contato/store",
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
                    $('#fContact .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fContact .send-contact').fadeIn();
            }
        });
        return false;
    });
}
function info() {
    $("#fInfo").submit(function () {
        $('#fInfo .def-msg').fadeIn();
        $('#fInfo .send-calc').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/contato/store",
            beforeSend: function () {
                $('#fInfo .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                if (result.success) {
                    $('#fInfo .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $.each(arr, function (index, value) {
                        if (value.length !== 0) {
                            msgError = msgError + value + '<br />';
                        }
                    });
                    $('#fInfo .def-msg').html("<strong class='color-red f-w-600'>" + msgError + "</strong>");
                }

                $('#fInfo .send-contact').fadeIn();
            }
        });
        return false;
    });
}
function call() {
    $("#fCall").submit(function () {
        $('#fCall .def-msg').fadeIn();
        $('#fCall .send-calc').hide();

        $.ajax({
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            url: "/contato/store",
            beforeSend: function () {
                $('#fCall .def-msg').removeClass('display-none').html("<strong class='color-orange f-w-600'>Enviando...</strong>");
            },
            success: function (result) {
                alert('dsadas '+result.message);
                if (result.success) {
                    $('#fCall .def-msg').html("<strong class='color-green f-w-600'>" + result.message + "</strong>");
                    $('input[type=text],input[type=email], textarea, select').val('');
                } else {

                    var arr = result.message;
                    var msgError = '';
                    $('#fCall .def-msg').html("<strong class='color-red f-w-600'>" + result.message + "</strong>");
                }

                $('#fCall .send-contact').fadeIn();
            }
        });
        return false;
    });
}