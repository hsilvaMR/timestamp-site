@section('modal')
{{-- modal login box --}}
<div class="modal fade" id="boxModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0 modal-dialog-centered">
        <div class="modal-content modal-login">
            {{-- btn close --}}
            <div class="d-flex justify-content-end mt-2 me-3">
                <button type="button" class="btn-close btn-fechar" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- title --}}
            <div class="modal-header border-0 ">
                <h5 class="modal-title title-font" id="exampleModalLabel">ACESSO</h5>
            </div>
            {{-- body --}}
            <div class="modal-body">
                <div class="d-flex flex-column bd-highlight mb-3 box-fields">
                    <div class="p-2 bd-highlight fields-font">
                        <label for="">EMAIL</label><br>
                        <input type="text" id="fname" name="fname" class="py-2">
                    </div>
                    <div class="p-2 bd-highlight  fields-font">
                        <label for="">PASSWORD</label><br>
                        <input type="text" id="fname" name="fname" class="py-2">
                    </div>
                    <div class="p-2 bd-highlight text-center fields-font">
                        <label for="" class="py-3">ESQUECEU A PASSWORD?</label>
                    </div>
                </div>

            </div>
            {{-- BTN REGISTAR |  ENTRAR --}}
            <div class="container-fluid">

                {{-- <div class="d-flex flex-row bd-highlight mb-3 col-registar">
                    <div class="d-flex justify-content-center">
                        <span>REGISTAR</span>
                    </div>

                    <div class="d-flex justify-content-center col-entrar">
                        <span>ENTRAR</span>
                    </div>
                </div> --}}

                <div class="row  align-items-center">
                    <div class="col col-registar  d-flex justify-content-center">
                        <span class="py-4">REGISTAR</span>
                    </div>
                    <div class="col col-entrar d-flex justify-content-center">
                        <span class="py-4">ENTRAR</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection