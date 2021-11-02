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



    //open box data-client 
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
    $('#box-pagamento').on('click', function() {
        console.log("open-box-client-data");
        //$('.box-client-dados').addClass("d-none")
        $('.box-pagamentos').removeClass("d-none")
        $('.box-client-area').addClass("d-none")
    });

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



})