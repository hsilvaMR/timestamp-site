@section('modal')

{{-- Modal os nossos selos temporais  tipos de selos MsTamp | Mtech --}}
<div class="modal fade modal-tipo-selos" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- title --}}
            <div class="modal-header border-0 modal-header-title-font">
                <h5 class="modal-title" id="staticBackdropLabel">
                    {{ trans('homeWords.modatTitleTiposSelos') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- body --}}
            <div class="modal-body">

                <div class="row mt-5  justify-content-center">
                    {{-- col  Mstamp --}}
                    <div class="col col-mstamp">

                        <img src="{{ asset('img/Mstamp-figureA.svg') }}" class="img-fluid" alt="">

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
                    {{-- col  Mtech --}}
                    <div class="col col-mstamp">

                        <img src="{{ asset('img/Mtech-figureB.svg') }}" class="img-fluid" alt="">

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

        </div>
    </div>
</div>
{{-- Modal Tabela de Preços | Mstamp--}}
<div class="modal fade" id="tabelaPreco-Mstamp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- title --}}
            <div class="modal-header modal-header-title-font border-0">
                <h5 class="modal-title" id="exampleModalLabel">Tabela de Preço | Mstamp </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- body --}}
            <div class="modal-body">
                {{-- row --}}
                <div class="row">
                    {{-- col-basico --}}
                    <div class="col col-basico ">

                    </div>
                    {{-- col-premium --}}
                    <div class="col col-premium ">

                    </div>
                    {{-- col-ultimate --}}
                    <div class="col col-ultimate ">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal Tabela de Preços |  Mtech--}}
<div class="modal fade" id="tabelaPreco-Mtech" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- title --}}
            <div class="modal-header modal-header-title-font border-0">
                <h5 class="modal-title" id="exampleModalLabel">Tabela de Preço | Mtech </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- body --}}
            <div class="modal-body">
                {{-- row --}}
                <div class="row justify-content-center">

                    {{-- col-starter --}}
                    <div class="col col-starter">

                    </div>
                    {{-- col-premium --}}
                    <div class="col col-premium">

                    </div>
                    {{-- col-ultimate --}}
                    <div class="col col-ultimate">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal registe-se --}}
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal fade" id="modal-registar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                {{-- title --}}
                <div class="modal-header border-0">
                    {{-- <h5 class="modal-title " id="exampleModalLabel">Processo de Compra</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- body --}}
                <div class="modal-body">

                    <div class="d-flex justify-content-center">

                        <span class="text-light">
                            <img src="{{ asset('img/register.png') }}" class="img-fluid" alt="">
                            Regista-se
                        </span>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

{{-- Modal Processo de Compra  --}}
<div class="modal fade" id="processo-compra" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{-- title --}}
            <div class="modal-header modal-header-title-font border-0">
                <h5 class="modal-title" id="exampleModalLabel">Processo de Compra </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- body --}}
            <div class="modal-body">
                {{-- row --}}
                <div class="row">

                    {{-- Escolha o tipo de selo --}}
                    <div class="col col-plano">
                        <img src="{{ asset('img/col-a-tipoSelo.png') }}" class="img-fluid" alt="">

                        <div class="d-flex flex-column  justify-content-center mt-3">
                            <div class="p-2 bd-highlight modal-title-process-compra-font">
                                {{ trans('homeWords.escTipoSeloTitle') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2">
                                {{ trans('homeWords.SelecioneAtipodeSelo') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2-color">
                                {{ trans('homeWords.vejaAsDiferenca') }}
                            </div>
                        </div>
                    </div>

                    {{-- col seleciona o seu plano --}}
                    <div class="col col-plano">
                        <img src="{{ asset('img/col-b-plano.png') }}" class="img-fluid" height="80px" alt="">

                        <div class="d-flex flex-column  justify-content-center mt-3">
                            <div class="p-2 bd-highlight modal-title-process-compra-font">
                                {{ trans('homeWords.selecionePlanoTitle') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2">
                                {{ trans('homeWords.entreVarios') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2-color">
                                {{ trans('homeWords.vejaPacotes') }}
                            </div>
                        </div>
                    </div>


                    {{-- col pagamentos --}}
                    <div class="col col-pagamento">
                        <img src="{{ asset('img/col-c-pagamento.png') }}" class="img-fluid" alt="">

                        <div class="d-flex flex-column  justify-content-center mt-3">
                            <div class="p-2 bd-highlight modal-title-process-compra-font">
                                {{ trans('homeWords.pagamentoTitle') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2">
                                {{ trans('homeWords.podeAdicionar') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2-color">
                                {{ trans('homeWords.comoFunciona') }}
                            </div>
                        </div>
                    </div>

                    {{-- col gestor de carteira --}}
                    <div class="col col-gestao-carteira">
                        <img src="{{ asset('img/col-d-gestao-carteira.png') }}" class="img-fluid" alt="">

                        <div class="d-flex flex-column  justify-content-center mt-3">
                            <div class="p-2 bd-highlight modal-title-process-compra-font">
                                {{ trans('homeWords.gestorCarteiraTitle') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2">
                                {{ trans('homeWords.AposAdquirirselos') }}
                            </div>
                            <div class="p-2 bd-highlight  font-body-box2-color">
                                {{ trans('homeWords.verMais') }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection