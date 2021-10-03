@section('modal')
    {{-- Modal os nossos selos temporais  tipos de selos MsTamp | Mtech --}}

    <div class="modal fade modal-tipo-selos" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                {{-- title --}}
                <div class="modal-header">
                    <h5 class="modal-title title-modal-tipos-selos" id="staticBackdropLabel">
                        {{ trans('homeWords.modatTitleTiposSelos') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- body --}}
                <div class="modal-body">

                    <div class="row mt-5  justify-content-center">
                        {{-- col  Mstamp --}}
                        <div class="col col-mstamp">

                            <img src="{{ asset('img/col1.png') }}" class="img-fluid" alt="">

                            <div class="d-flex flex-column  justify-content-center mb-1">
                                <div class="p-2 bd-highlight  mt-4">
                                    {{ trans('homeWords.tabelaPreco') }}
                                </div>
                                <div class="p-2 bd-highlight  font-body-box2">
                                    {{ trans('homeWords.consulteDiferentes') }}
                                </div>
                                <div class="p-2 bd-highlight  font-body-box2-color ">
                                    {{ trans('homeWords.dispomosAmpla') }}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- footer --}}

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>

            </div>
        </div>
    </div>

    {{-- Modal Tabela de Preços --}}

    {{-- Modal registe-se --}}

    {{-- Modal Processo de Compra --}}
    <div class="modal fade modal-processo-compra" id="proce-compra" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                {{-- title --}}
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="exampleModalLabel">Processo de Compra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- body --}}
                <div class="modal-body">
                    <div class="row justify-content-center">
                         {{-- col escolhe tipo de selo --}}
                        <div class="col col-tipo-selo">

                            <img src="{{ asset('img/col-a-tipoSelo.png') }}" class="img-fluid" alt="">

                            <div class="d-flex flex-column  justify-content-center">
                                <div class="p-2 bd-highlight">
                                    {{ trans('homeWords.tabelaPreco') }}
                                </div>
                                <div class="p-2 bd-highlight  font-body-box2">
                                    {{ trans('homeWords.consulteDiferentes') }}
                                </div>
                                <div class="p-2 bd-highlight  font-body-box2-color ">
                                    {{ trans('homeWords.dispomosAmpla') }}
                                </div>
                            </div>

                        </div>

                         {{-- col seleciona o seu plano --}}
                        <div class="col col-plano">
                            <img src="{{ asset('img/col-b-plano.png') }}" class="img-fluid" height="80px" alt="">
                        </div>

                        {{-- col pagamentos--}}
                        <div class="col col-pagamento">
                            <img src="{{ asset('img/col-c-pagamento.png') }}" class="img-fluid" alt="">
                        </div>

                         {{-- col gestor de carteira--}}
                        <div class="col col-gestao-carteira">
                            <img src="{{ asset('img/col-d-gestao-carteira.png') }}" class="img-fluid" alt="">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
