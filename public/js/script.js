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
        $('.client-dados').removeClass("d-none")
        $('.main-client').addClass("d-none")
    });
    // open box area client
    $('#backBoxClient').on('click', function() {
        console.log("open-box-client-data");
        $('.client-dados').addClass("d-none")
        $('.selo-box').addClass("d-none")
        $('.main-client').removeClass("d-none")
    });
    // open box area selos
    $('#seloArea').on('click', function() {
        console.log("open-box-client-data");
        //$('.client-dados').addClass("d-none")
        $('.selo-box').removeClass("d-none")
        $('.main-client').addClass("d-none")
    });




})