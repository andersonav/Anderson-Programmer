/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(".btnEnviarEmail").click(function () {
    var form = $("#contactForm").serialize();

    $.ajax({
        url: '/sendEmail',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function (xhr) {
            $(".loader-wrap").css("display", "block");
            $(".loader-wrap").css("background-color", "transparent");
        },
        data: form,
        success: function (data, textStatus, jqXHR) {
            $(".loader-wrap").css("display", "none");
            $(".loader-wrap").css("background-color", "#ffffff");
            Swal.fire({
                type: 'success',
                title: 'Sucesso',
                text: 'Seu email foi enviado com sucesso. Entraremos em contato!'
            });
        }, complete: function (jqXHR, textStatus) {

        }
    });

});