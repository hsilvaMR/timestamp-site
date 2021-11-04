/*
                ================================                    ========================================
                                                          SITE              
                ================================                    ==========================================
*/






/*
================================                     ========================================
                                    PLATAFORMA
 ================================                    ==========================================
*/

/***********************************scripts modal login register*********************** */

//location.replace("{{ route('delivery') }}?id="+id);  dashboard-home
// <a href="{{ route('home') }}"> 
// $("#btn-login").on(function() {

// alert('test btn login');
/*console.log("inside in btn-login")
var url = "{{ route('dashboard-home') }}"
window.location.href = url;*/
// })

$(function() {

    $('#btn-login').on('click', function() {
        var routeName = 'dashboard-home'
        var url = '/area-cliente';
        window.location.href = url
            //console.log(url)
    });

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

    //open box api 
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

})