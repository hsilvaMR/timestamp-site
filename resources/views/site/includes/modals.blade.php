@section('modal')
{{-- Modal os nossos selos temporais  tipos de selos MsTamp | Mtech --}}
<div class="modal fade modal-tipo-selos" id="mdTipoSelo" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered  modal-site">
        <div class="modal-content">
            {{-- title --}}
            <div class="modal-header  modal-header-title-font  border-0">
                <h5 class="modal-title" id="staticBackdropLabel">
                    {{ trans('homeWords.modatTitleTiposSelos') }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                {{-- <span> <i class="fas fa-times" data-bs-dismiss="modal"></i> </span> --}}
            </div>

            {{-- body --}}
            <div class="modal-body">

                <div class="row mt-1 justify-content-center">

                    {{-- col  Mstamp --}}
                    <div class="col  curso-pointer">

                        <div class="d-flex flex-column col-mstamp  justify-content-center ms-4 me-4 mb-1">
                            {{-- img  Mstamp --}}
                            <div class="p-2 bd-highlight">
                                <img src="{{ asset('img/Mstamp-figureA.svg') }}" class="img-fluid" alt="">
                            </div>
                            {{-- LOGO Mstamp --}}
                            <div class="p-2 bd-highlight  mt-4">
                                <img src="{{ asset('img/Mstamp-logoA.svg') }}" width="100px" height="100px" alt="">
                            </div>
                            {{-- descrição Mstamp  --}}
                            <div class="p-2 bd-highlight ps-2 font-body-box2">
                                {{ trans('homeWords.oQueSaoSelosMsTamp') }}
                            </div>
                            {{-- link  precos --}}
                            <div class="p-2 bd-highlight  font-body-box2-color">
                                {{ trans('homeWords.msTampVejaOspreco') }}
                            </div>
                        </div>
                    </div>
                    {{-- col  Mtech --}}
                    <div class="col  " style="cursor: pointer;">
                        <div class="d-flex flex-column col-mtech  ms-4 me-4  justify-content-center mb-1">
                            {{-- img  Mtech --}}
                            <div class="p-2 bd-highlight">
                                <img src="{{ asset('img/Mtech-figureB.svg') }}" class="img-fluid" alt="">
                            </div>

                            {{-- LOGO Mtech --}}
                            <div class="p-2 bd-highlight  mt-4">
                                <img src="{{ asset('img/Mtech-logoB.svg') }}" width="100px" height="100px" alt="">
                            </div>
                            {{-- descrição Mtech  --}}
                            <div class="p-2 bd-highlight  font-body-box2">
                                {{ trans('homeWords.oQueSaoSelosMtech') }}
                            </div>
                            {{-- link  precos Mtech   --}}
                            <div class="p-2 bd-highlight  font-body-box2-color ">
                                {{ trans('homeWords.mTechVejaPreco') }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
{{-- Modal Tabela de Preços | Mstamp--}}
<div class="modal fade tblMstamp" id="mdTbl_mstp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-site">
        <div class="modal-content">
            {{-- title --}}
            <div class="d-flex bd-highlight  modal-header border-0 ">
                <div class="p-2 flex-grow-1 bd-highlight  border-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tabela de Preços | <img src="{{ asset('img/Mstamp-logoA.svg') }}" width="100px" height="65px"
                            alt="">
                    </h5>
                </div>
                {{--  CLOSE BTN --}}
                <div class="p-2 bd-highlight flex-shrink-1 curso-pointer text-end">
                    <i class="fas fa-times fa-2x " id="btnTbl_precoClose" data-bs-dismiss="modal"
                        aria-label="Close"></i>
                </div>
            </div>
            {{-- body --}}
            <div class="modal-body">
                <div class="container d-flex    justify-content-xl-center ">
                    <div class="row">
                        {{-- col-basico --}}
                        <div class="col-sm-3 col-md-3 col-lg-3 col-xxl-3 col-basico text-center">

                            <div class="d-flex flex-column bd-highlight mb-3 align-items-center item">

                                <div class="p-2 bd-highlight mb-1">
                                    <label for="">BÁSICO</label>
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    50 Mstamp
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Carteira de Gestão
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Info Adicional
                                </div>

                            </div>

                            <div class="d-flex flex-column bd-highlight  align-items-center  item ">

                                <div class="p-2 bd-highlight itemPrice">
                                    <label> € 15 </label> <span> /pack </span>
                                </div>
                                <div class="p-2 bd-highlight mt-5 btnPay">
                                    <span> Comprar</span>
                                </div>

                            </div>

                        </div>
                        {{-- col-premium --}}
                        <div class="col-sm-4 col-lg-3 col-xxl-3  text-center  col-premium">
                            <div class="d-flex flex-column bd-highlight mb-3 align-items-center item">

                                <div class="p-2 bd-highlight mb-1 ">
                                    <label for="">PREMIUM</label>
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/premium-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    50 Mstamp
                                </div>

                                <div class="p-2 bd-highlight">

                                    <img src="{{ asset('img/premium-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Carteira de Gestão
                                </div>

                                <div class="p-2 bd-highlight">

                                    <img src="{{ asset('img/premium-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Info Adicional
                                </div>
                            </div>

                            <div class="d-flex flex-column bd-highlight  align-items-center  item ">

                                <div class="p-2 bd-highlight itemPrice">
                                    <label> € 99 </label> <span> /pack </span>
                                </div>
                                <div class="p-2 bd-highlight mt-5 btnPay">
                                    <span> Comprar</span>
                                </div>

                            </div>

                        </div>

                        {{-- col-ultimate --}}
                        <div class="col-sm-4 col-lg-3 col-xxl-3  text-center  col-ultimate  ">
                            <div class="d-flex flex-column bd-highlight mb-3 align-items-center item">

                                <div class="p-2 bd-highlight  mb-1">
                                    <label for="">ULTIMATE</label>
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/ultimate-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    50 Mstamp
                                </div>

                                <div class="p-2 bd-highlight">
                                    <img src="{{ asset('img/ultimate-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Carteira de Gestão
                                </div>

                                <div class="p-2 bd-highlight">

                                    <img src="{{ asset('img/ultimate-icon.svg') }}" class="me-2" width="20px"
                                        height="20px">
                                    Info Adicional
                                </div>
                            </div>

                            <div class="d-flex flex-column bd-highlight  align-items-center item">

                                <div class="p-2 bd-highlight  itemPrice">
                                    <label> € 150 </label> <span> /pack </span>
                                </div>
                                <div class="p-2 bd-highlight mt-5  btnPay">
                                    <span class="btnPay"> Comprar</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal Tabela de Preços |  Mtech--}}
<div class="modal fade" id="tabelaPreco-Mtech" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-site">
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

                    {{-- col-basico   --}}
                    <div class="col col-basico   border-primary">

                        <div class="d-flex flex-column bd-highlight mb-3 align-items-center">

                            <div class="p-2 bd-highlight">
                                <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px" height="20px">
                                50 Mstamp
                            </div>

                            <div class="p-2 bd-highlight">

                                <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px" height="20px">
                                Carteira de Gestão
                            </div>

                            <div class="p-2 bd-highlight">

                                <img src="{{ asset('img/basic-icon.svg') }}" class="me-2" width="20px" height="20px">
                                Info Adicional
                            </div>
                        </div>

                    </div>
                    {{-- col-premium --}}
                    <div class="col col-premium border-secondary">

                    </div>
                    {{-- col-ultimate --}}
                    <div class="col col-ultimate border-success">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal registe-se --}}
<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal fade" id="modal-registar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-site">
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
    <div class="modal-dialog modal-dialog-centered modal-site">
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