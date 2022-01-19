$(function() {

    /*
        ================================           ========================================
                                            SITE              
        ================================           ==========================================
    */

    /*
    ================================                     ========================================
                                        PLATAFORMA
     ================================                    ==========================================

    /**  login form  */
    // v1 
    $('#formLogin').on('submit', function(e) {
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

    // login v2
    $('#btn-login').on('click', function(e) {
        //document.forms[0].submit()
        var form = $(document.forms[0]);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: new FormData(document.forms[0]),
            contentType: false,
            processData: false,
            cache: false,
            headers: { 'X-CSRF-Token': '{!! csrf_token() !!}' },
            success: function(data) {

                switch (data) {
                    case 'sucess':
                        $('#formLogin')[0].reset();
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

    /**   form registar user   **/
    $('#btn-registar').on('click', function(e) {

        var form = $(document.forms[1]);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: form.attr('action'),
            data: new FormData(document.forms[1]),
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



    $('.col-mstamp').on('click', function() {

        $('#mdTipoSelo').modal('hide');
        // $('#mdTipoSelo').css('display', 'none')
        $('#mdTbl_mstp').modal('show');
    });

    $('#btnTbl_precoClose').on('click', function() {

        $('.tblMstamp').modal('hide')
            // $('#mdTbl_mstp').css('display', 'none')
            // $('.modal-backdrop').modal('show');

    });

})

// ============MODAL=================
$(window).on('load', function() {
    // checkSession();
    $('#boxModalLogin').modal('show');
});

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

function resizeScren() {

    if (window.matchMedia("(max-width: >=700px)").matches) {
        /* The viewport is less than, or equal to, 700 pixels wide */
    } else {}
}


/*function loadHipay() {

    jQuery(document).ready(function() {
        jQuery('<div class="sa_payPal_overlay" style="visibility:visible;position:fixed; width:100%; height:100%; filter:progid:DXImageTransform.Microsoft.Gradient(GradientType=1, StartColorStr=\'#88ffffff\', EndColorStr=\'#88ffffff\'); background: rgba(0,0,0,0.7); top:0; left:0; z-index: 999999;"><div style="background:#FFF; background-image:linear-gradient(top, #FFFFFF 45%, #E9ECEF 80%);background-image: -o-linear-gradient(top, #FFFFFF 45%, #E9ECEF 80%);background-image: -moz-linear-gradient(top, #FFFFFF 45%, #E9ECEF 80%);background-image: -webkit-linear-gradient(top, #FFFFFF 45%, #E9ECEF 80%);background-image: -ms-linear-gradient(top, #FFFFFF 45%, #E9ECEF 80%);background-image: -webkit-gradient(linear, left top,left bottom,color-stop(0.45, #FFFFFF),color-stop(0.8, #E9ECEF));display: block;margin: auto;position: fixed; margin-left:-150px;left:50%;top:30%;text-align:center;color:#2F6395;font-family:Arial;padding:15px;font-size:13px;font-weight:bold;width: 300px;-webkit-box-shadow:3px 2px 13px rgba(50, 50, 49, 0.25);box-shadow:rgba(0, 0, 0, 0.2) 0px 0px 0px 5px;border:1px solid #CFCFCF;border-radius:6px;"><img style="display:block;margin:0 auto 10px" src="https://www.paypalobjects.com/en_US/i/icon/icon_animated_prog_dkgy_42wx42h.gif"><h2 style="font-size:30px; margin-bottom:10px;"><? if($LANG=='
            pt '){echo "Espere alguns segundos.";} if($LANG=='
            en '){echo "Wait a few seconds.";} ?></h2><p style="font-size:12px;color:#003171;font-weight:400"><? if($LANG=='
            pt '){echo "Você será redirecionado para um ambiente seguro do Hipay para finalizar o seu pagamento.";} if($LANG=='
            en '){echo "You will be redirected to a secure Hipay environment to finalize your payment.";} ?></p><div style="margin:20px auto 0;"><img src="/img/hipay-logo.svg" width="100px"/></div></div></div>').appendTo('body');
    });

}*/


function incializarHipay(id, tracking) {

    loadHipay();
    var call = "call";
    $.ajax({
        type: "POST",
        url: "/_carrinho/js_hipay.php",
        cache: false,
        data: {
            call: call,
            id: id,
            tracking: tracking
        },
        success: function(data) {

            var jsonRetorna = $.parseJSON(data);
            var url = jsonRetorna['url'];
            var result = jsonRetorna['result'];
            var message = jsonRetorna['message'];
            var id = jsonRetorna['id'];
            //var status = jsonRetorna['status'];

            //if(status!=""){
            if (url != "") {
                console.log(url)
                window.location.href = url;
            } else {

                if (result != "") {
                    console.log(result)
                }
                if (message != "") {

                    console.log(message)
                }
                if (id != "") {

                    console.log(id)
                }

                console.log(data)

            }
        },
        error: function(xhr, status, error) {
            //alert(ajaxContext.responseText)

            window.location.href = "https://www.ci-interiordecor.com";

            console.log(xhr.status)
            console.log(xhr.statusText)
            console.log(xhr.readyState)
            console.log(xhr.responseText)

        }
    });


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