$(function() {

    /*
                    ================================                    ========================================
                                                              SITE              
                    ================================                    ==========================================
    */

    /*
    ================================                     ========================================
                                        PLATAFORMA
     ================================                    ==========================================

    /**  login form  */

    $('#formAddConta').on('submit', function(e) {
        var form = $(this);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            headers: { 'X-CSRF-Token': '{!! csrf_token() !!}' },
            success: function(data) {

                switch (data) {
                    case 'sucess':
                        $('#formAddConta')[0].reset();
                        var url = '/area-cliente';
                        window.location.href = url
                        break;
                    case 'invalidUser':
                        $('.errorMessage').removeClass('d-none')
                        $('.errorMessage').html(data);
                        break;
                    case 'invalidUser':
                        $('.errorMessage').removeClass('d-none')
                        $('.errorMessage').html(data);
                        break;
                    case 'emptyField':
                        $('.errorMessage').removeClass('d-none')
                        $('.errorMessage').html(data);
                        break;
                    case 'e-mail invalido':
                        $('.errorMessage').removeClass('d-none')
                        $('.errorMessage').html(data);
                        break;
                    default:
                        $('.errorMessage').removeClass('d-none')
                        $('.errorMessage').html(data);
                }
            },
            error: function(jqXHR) {
                //  https://www.w3schools.com/js/js_ajax_http.asp

                var msg = "";
                if (jqXHR.status != null) {

                    msg = jqXHR.statusText;
                }
                if (jqXHR.readyState != null) {

                    msg = jqXHR.responseText;
                }
                alert(msg)

            }
        })
    });

    $('.btnLogout').on('click', function() {
        // alert("test logout")
        var url = $('#routeID').val();
        window.location.href = url
            // 
    });

    /**   form registar user   */

    $('#formRegister').on('submit', function(e) {
        var form = $(this);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            headers: { 'X-CSRF-Token': '{!! csrf_token() !!}' },
            success: function(data) {

                switch (data) {
                    case 'registado':
                        alert(data)
                            // $('.errorMessage').removeClass('d-none')
                            // $('.errorMessage').html(data);
                        $('#formRegister')[0].reset();
                        break;
                    case 'invalid email':
                        alert(data)
                            // $('.errorMessage').removeClass('d-none')
                            // $('.errorMessage').html(data);
                        break;
                    case 'deve preencher todos campos':
                        alert(data)
                        break;
                    default:
                        alert(data)
                        break;
                }
            },
            error: function(jqXHR) {

                var msg = "";
                if (jqXHR.status != null) {

                    msg = jqXHR.statusText;
                }
                if (jqXHR.readyState != null) {

                    msg = jqXHR.responseText;
                }
                alert(msg)
            }
        })
    });


    /***********************************scripts modal login register*********************** */
    //abrir box dados pessoais menu-left
    $('#boxData-client').on('click', function() {
        console.log("open-box-client-data");
        $('.box-client-dados').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    });
    // open box area selos
    $('#seloArea').on('click', function() {
        console.log("open-box-client-data");
        //$('.box-client-dados').addClass("d-none")
        $('.box-selos').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    });

    // open box metodo de pagamento
    /* $('#box-pagamento').on('click', function() {
        console.log("open-box-client-data");
        //$('.box-client-dados').addClass("d-none")
        $('.box-pagamentos').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    }); */

    //open box API
    $('#apiBX').on('click', function() {
        console.log("open box api");
        $('.box-api').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    });

    //open box promocao 
    $('.bxPromo').on('click', function() {
        console.log("open box api");
        $('.box-promocao').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    });

    // voltar area client
    $('.btnBack').on('click', function() {

        if ($('.box-client-dados').is(':visible')) {

            $('.box-client-dados').addClass("d-none")
            $('.box-client-area').removeClass("d-none")
        }
        if ($('.box-selos').is(':visible')) {

            $('.box-selos').addClass("d-none")
            $('.box-client-area').removeClass("d-none")
        }
        if ($('.box-pagamentos').is(':visible')) {

            $('.box-pagamentos').addClass("d-none")
            $('.box-client-area').removeClass("d-none")
        }
        if ($('.box-api').is(':visible')) {

            $('.box-api').addClass("d-none")
            $('.box-client-area').removeClass("d-none")
        }
        if ($('.box-promocao').is(':visible')) {

            $('.box-promocao').addClass("d-none")
            $('.box-client-area').removeClass("d-none")
        }

    });

    // change icon whem mouseOver
    $('.evtMVr').on('mouseenter', function() {
        // selos btn 
        if ($('.btnSelos:hover').length > 0) {
            var pathImage = "img/selo-white.svg"
            $(".btnSelosIMG").attr("src", pathImage);
        }
        // consumo btn
        if ($('.btnConsumo:hover').length > 0) {
            var pathImage = "img/consumo-white.svg"
            $(".btnConsumoIMG").attr("src", pathImage);
        }
        // promocao btn
        if ($('.bxPromo:hover').length > 0) {
            var pathImage = "img/promocao-white.svg"
            $(".bxPromoIMG").attr("src", pathImage);
        }
        // dados pessoas btn
        if ($('.boxDados:hover').length > 0) {
            var pathImage = "img/dadosP-white.svg"
            $(".boxDadoIMG").attr("src", pathImage);
        }
        // pagamento btn
        if ($('.boxPagamento:hover').length > 0) {
            var pathImage = "img/payment-white.svg"
            $(".boxPagamentoIMG").attr("src", pathImage);
        }
        // api  btn
        if ($('.boxAPI:hover').length > 0) {
            var pathImage = "img/api-white.svg"
            $(".boxAPiIMG").attr("src", pathImage);
        }

        // registar btn header 
        if ($('.btnRegister:hover').length > 0) {
            var pathImage = "img/register.svg"
            $(".btnRegs").attr("src", pathImage);
            $(".btnRegs").attr("width", "25px");
            $(".btnRegs").attr("height", "25px");
        }

    });

    // change icon whem mouseLeave
    $('.evtMVr').on('mouseleave', function() {
        // selo btn leave 
        if ($('.btnSelos:hover').length == 0) {
            var pathImage = "img/selo.svg"
            $(".btnSelosIMG").attr("src", pathImage);
        }
        // consumo btn leave 
        if ($('.btnConsumo:hover').length == 0) {
            var pathImage = "img/consumo.svg"
            $(".btnConsumoIMG").attr("src", pathImage);
        }
        // promocao btn leave 
        if ($('.bxPromo:hover').length == 0) {
            var pathImage = "img/promocao.svg"
            $(".bxPromoIMG").attr("src", pathImage);
        }
        // dados pessoas btn
        if ($('.boxDados:hover').length == 0) {
            var pathImage = "img/dadosP.svg"
            $(".boxDadoIMG").attr("src", pathImage);
        }
        // pagamento btn
        if ($('.boxPagamento:hover').length == 0) {
            var pathImage = "img/payment.svg"
            $(".boxPagamentoIMG").attr("src", pathImage);
        }
        // api  btn
        if ($('.boxAPI:hover').length == 0) {
            var pathImage = "img/api.svg"
            $(".boxAPiIMG").attr("src", pathImage);
        }
        // registar btn header 
        if ($('.btnRegister:hover').length == 0) {
            var pathImage = "img/register-white.png"
            $(".btnRegs").attr("src", pathImage);
            $(".btnRegs").attr("width", "25px");
            $(".btnRegs").attr("height", "25px");
        }

    });

    $('.btnRegister').on('click', function() {
        window.location.href = $(this).data('value');
    });

    //abrir box menu-right
    $('.evtMVr').on('click', function() {
        // abrir box selos 
        if ($('.btnSelos:hover').length > 0) {
            $('.box-selos').removeClass("d-none")
            $('.box-client-area').addClass("d-none")
        }
        // abrir box promocao 
        if ($('.bxPromo:hover').length > 0) {
            $('.box-promocao').removeClass("d-none")
            $('.box-client-area').addClass("d-none")
        }
        // abrir box dados pessoas 
        if ($('.boxDados:hover').length > 0) {
            $('.box-client-dados').removeClass("d-none")
            $('.box-client-area').addClass("d-none")
        }

        // abrir box pagamentos 
        if ($('.boxPagamento:hover').length > 0) {
            $('.box-pagamentos').removeClass("d-none")
            $('.box-client-area').addClass("d-none")
        }
        // abrir box api 
        if ($('.boxAPI:hover').length > 0) {
            $('.box-api').removeClass("d-none")
            $('.box-client-area').addClass("d-none")
        }

    });

    //abrir box menu-left
    $('.evtOclick').on('click', function() {
        /*  box dados pessoas  */
        //  abrir pagamentos
        if ($('.itemPagamento:hover').length > 0) {
            $('.box-pagamentos').removeClass("d-none")
            $('.box-client-dados').addClass("d-none")
        }
        //   abrir promocao 
        if ($('.itemPromocao:hover').length > 0) {
            $('.box-promocao').removeClass("d-none")
            $('.box-client-dados').addClass("d-none")
        }
        //   abrir meus selos 
        if ($('.itemSelos:hover').length > 0) {
            $('.box-selos').removeClass("d-none")
            $('.box-client-dados').addClass("d-none")
        }

        /****  box selos   ****/
        // pagamento
        if ($('.itemPagamento:hover').length > 0) {
            $('.box-pagamentos').removeClass("d-none")
            $('.box-selos').addClass("d-none")
        }
        //   abrir promocao 
        if ($('.itemPromocao:hover').length > 0) {
            $('.box-promocao').removeClass("d-none")
            $('.box-selos').addClass("d-none")
        }
        //   abrir dados pessoas  
        if ($('.itemDados:hover').length > 0) {
            $('.box-selos').addClass("d-none")
            $('.box-client-dados').removeClass("d-none")
        }

        /**** box  pagamentos   ****/
        // selos 
        if ($('.itemSelos:hover').length > 0) {
            $('.box-selos').removeClass("d-none")
            $('.box-pagamentos').addClass("d-none")
        }
        // 
        //  abrir promocao 
        if ($('.itemPromocao:hover').length > 0) {
            $('.box-pagamentos').addClass("d-none")
            $('.box-promocao').removeClass("d-none")
        }
        //   abrir dados pessoas  
        if ($('.itemDados:hover').length > 0) {
            $('.box-client-dados').removeClass("d-none")
            $('.box-pagamentos').addClass("d-none")
        }
        /**** box  promocao    ****/
        // selos 
        if ($('.itemSelos:hover').length > 0) {
            $('.box-selos').removeClass("d-none")
            $('.box-promocao').addClass("d-none")
        }
        //  abrir pagamento 
        if ($('.itemPagamento:hover').length > 0) {
            $('.box-pagamentos').removeClass("d-none")
            $('.box-promocao').addClass("d-none")
        }
        //   abrir dados pessoas  
        if ($('.itemDados:hover').length > 0) {
            $('.box-client-dados').removeClass("d-none")
            $('.box-promocao').addClass("d-none")
        }

    })

    window.addEventListener('resize', function() {
        // if (window.innerWidth < 770) {
        if (window.matchMedia("(max-width: 770px)").matches) {
            $('.aboutMredis').addClass("row")
        } else {
            $('.aboutMredis').removeClass("row")
        }
    }, false);

    // Open autoload Modal 
    $(window).on('load', function() {
        // checkSession();
        $('#boxModalLogin').modal('show');
    });

})


function checkSession() {

    $.ajax({
        type: "POST",
        url: "/login-validation",
        contentType: false,
        processData: false,
        dataType: "text",
        cache: false,
        headers: { 'X-CSRF-Token': '{!! csrf_token() !!}' },
        success: function(data) {

            switch (data) {
                case 'sucess':
                    var url = '/area-cliente';
                    window.location.href = url
                    break;
                default:
                    $('#boxModalLogin').modal('show');
                    break;
            }
        },
        error: function(jqXHR) {
            var msg = "";
            if (jqXHR.status != null) {
                msg = jqXHR.statusText;
            }
            if (jqXHR.readyState != null) {

                msg = jqXHR.responseText;
            }
            alert(msg)
        }
    })

}
// scroll to top 
$('#myBtn').on('click', function() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

window.onscroll = function() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $('#myBtn').css("display", "block");
    } else {
        $('#myBtn').css("display", "none");
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


function resizeScren() {

    if (window.matchMedia("(max-width: >=700px)").matches) {
        /* The viewport is less than, or equal to, 700 pixels wide */
    } else {
        /* The viewport is greater than 700 pixels wide */
    }
}


// REF: http://www.javascriptkit.com/dhtmltutors/cssmediaqueries4.shtml

// var display = window.matchMedia("screen and (max-device-width: 765px) and (orientation: portrait)")
// var display = window.matchMedia("screen and (max-device-width: 765px)")
/*matchDisplay(display) // call listener function explicitly at run time
display.addEventListener(matchDisplay) */ // attach listener function to listen in on state changes

/*function matchDisplay(matchD) {
    if (matchD.matches) { // if media query matches
        console.log("The condition " + matchD.media + " has been met")
        $('.aboutMredis').addClass("row")

    } else {
        // console.log("Condition not met yet")
        $('.aboutMredis').removeClass("row")
    }
}*/