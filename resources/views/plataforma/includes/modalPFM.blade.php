@section('modal')

{{-- modal login box --}}

<div class="modal fade" id="boxModalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-0 modal-dialog-centered">
        <div class="modal-content">
            {{-- btn close --}}
            <div class="d-flex justify-content-end mt-2 me-3">
                <button type="button" class="btn-close modal-login-btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            {{-- title --}}
            <div class="modal-header border-0 ">
                <h5 class="modal-title modal-login-title-font" id="exampleModalLabel">ACESSO</h5>
            </div>
            {{-- body --}}
            <div class="modal-body">
                <div class="d-flex flex-column bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        <label for="">EMAIL</label>
                    </div>
                    <div class="p-2 bd-highlight">
                        <label for="">PASSWORD</label>
                    </div>
                    <div class="p-2 bd-highlight text-center">
                        <label for="">ESQUECEU A PASSWORD?</label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection