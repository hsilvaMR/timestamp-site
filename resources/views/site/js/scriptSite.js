
$(document).ready(function () {

    /***  Modal tabela de precos  | tipos de selos  */
    //  for call classe tag $(".btn-open-recrutment").click(function() {
    $(".col-1A").click(function () {

        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function () {
            myInput.focus()
        })

    })


})