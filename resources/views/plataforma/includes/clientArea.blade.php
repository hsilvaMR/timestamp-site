@section('client-box')
{{-- BOX AREA DE CLIENTE --}}
{{-- BOX AREA DE CLIENTE --}}
{{-- BOX AREA DE CLIENTE   --}}
<div class="container box-client-area  justify-content-center mt-5 mb-2">

    <div class="row">
        {{--  menu esquerda col --}}
        <div class="col-4 left-menu text-start">
            <div class="d-flex flex-column bd-highlight mb-1 mt-2 ms-3">
                {{-- name title --}}
                <div class="p-2 bd-highlight">
                    <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                    <label for="" id="nameClient" class="py-2">Honorio Silva</label>
                </div>
                {{-- adquirir selos btn --}}
                <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                    <span>{{trans('areaClientWords.adqSelos')}}</span>
                </div>
                {{--       items | meus selos     --}}
                <div class="d-flex bd-highlight border-bottom" id="seloArea">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                {{--  items | historico consumo  --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | meus dados   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | promoção  --}}
                <div class="d-flex bd-highlight border-bottom  bxPromo">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | metodo de pagamento   --}}
                <div class="d-flex bd-highlight border-bottom" id="box-pagamento">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | encerrar sessão   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.encerrar')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

            </div>
        </div>
        {{-- menu direita  --}}
        {{-- menu direita  --}}
        <div class="col-6 right-menu">
            {{-- title  | descricao --}}
            <div class="d-flex flex-column   text-start bd-highlight mb-3 mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3">
                    <span class="titleName">{{trans('areaClientWords.titleBox')}}</span>
                </div>
                {{-- welcome descricao --}}
                <div class="p-2 bd-highlight descricao mb-3">
                    <span>{{trans('areaClientWords.welcome')}}</span>
                </div>

                <div class="p-2 bd-highlight  border-bottom">
                </div>

            </div>

            <div class="d-flex justify-content-start">
                {{-- btn | meus selos temporais  --}}
                <div class="p-2 mx-2 mb-2  box-btn  bd-highlight text-center">
                    <span>{{trans('areaClientWords.meuSelos')}}</span>
                </div>
                {{-- btn | historico de consumo --}}
                <div class="p-2 mb-2   box-btn mx-2  bd-highlight text-center">
                    <span>{{trans('areaClientWords.historicoC')}}</span>
                </div>
                {{-- btn | promoções --}}
                <div class="p-2 mb-2  box-btn mx-2 bd-highlight text-center bxPromo">
                    <span>{{trans('areaClientWords.meusVale')}}</span>
                </div>
            </div>

            <div class="d-flex  justify-content-start">
                {{-- btn | meus dados  --}}
                <div class="p-2 mx-2  box-btn  bd-highlight"><span>{{trans('areaClientWords.meusDados')}}</span></div>
                {{-- btn | selos disponíveis --}}
                <div class="p-2  mx-2 box-btn  bd-highlight"><span>{{trans('areaClientWords.seloDisponivel')}}</span>
                </div>
                {{-- btn | metodo pagamento --}}
                <div class="p-2 mx-2 box-btn  bd-highlight"><span>{{trans('areaClientWords.metodoPagamento')}}</span>
                </div>

            </div>
            {{-- btn | Integração API --}}

            <div class="d-flex  mx-2 mt-2 justify-content-start" id="apiBX">
                <div class="p-2 box-btn  bd-highlight">
                    <span>{{trans('areaClientWords.integraAPI')}}</span>
                </div>
            </div>

        </div>

    </div>

</div>
{{--  BOX  DADOS PESSOAIS --}}
{{-- BOX  DADOS PESSOAIS --}}
{{-- BOX  DADOS PESSOAIS --}}
<div class="container box-client-dados d-none">
    <div class="row">
        {{--  menu esquerda --}}
        <div class="col-4 left-menu text-start">

            <div class="d-flex flex-column bd-highlight mb-1 mt-2 ms-3">
                {{-- name title --}}
                <div class="p-2 bd-highlight">
                    <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                    <label for="" id="nameClient" class="py-2">Honorio Silva</label>
                </div>
                {{-- adquirir selos btn --}}
                <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                    <span>{{trans('areaClientWords.adqSelos')}}</span>
                </div>
                {{--       items | meus selos     --}}
                <div class="d-flex bd-highlight border-bottom">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                {{--  items | historico consumo  --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | meus dados   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | vale de desconto   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | metodo de pagamento   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | encerrar sessão   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.encerrar')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        {{--  menu direita --}}
        {{--  menu direita --}}
        <div class="col-7 right-menu">
            {{-- title  | descricao --}}
            <div class="d-flex flex-column text-start bd-highlight mb-3 mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3">
                    <span class="titleName">{{trans('areaClientWords.titleDadosPessoa')}}</span>
                </div>
                {{-- welcome descricao  | voltar --}}
                <div class="d-flex bd-highlight border-bottom">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.descr')}}
                    </div>
                    <div class="p-2 bd-highlight btnBack">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>
            </div>
            {{-- formulario --}}
            <div class="box-form  d-flex flex-column justify-content-start bd-highlight mb-3">
                <form action="">
                    {{-- title  |  tipo de cliente  --}}
                    <div class="p-2 bd-highlight text-start">
                        {{-- title  --}}
                        <label for="fname">{{trans('areaClientWords.frTypeClient')}}</label>
                    </div>
                    {{-- RADIOBTN | Empresas  Particular --}}
                    <div class="p-2 bd-highlight text-start border-bottom">
                        {{-- radioBtn | empresa --}}
                        <input type="radio" id="empresa" name="typeAcount" value="">
                        <label for="empresa">{{trans('areaClientWords.rbtnEmpresa')}}</label>
                        {{--  radioBtn | particular --}}
                        <input type="radio" id="particular" name="typeAcount" value="">
                        <label for="particular">{{trans('areaClientWords.rbtnParticular')}}</label>
                    </div>
                    {{--  NIF  --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frNIF')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- NOME --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frNome')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- APELIDO --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frApelido')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- ENDER. FACTURACAO --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frAdressFactura')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- LOCALIDADE --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frLocalidade')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- CODIGO POSTAL --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frCodPostal')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- PAÍS --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frPais')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- E-MAIL --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frEmail')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- NOME EMPRESA --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frNomeEmpresa')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- PALAVRA PASSE ACTUAL --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frPass')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- PALAVRA PASSE NOVA --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frNewPassword')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- COMFIRMAR PALAVRA PASSE  --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.frPassConfirm')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- btn | guardar --}}
                    <div class="p-2 bd-highlight btn-guardar text-center">

                        {{trans('areaClientWords.btnSave')}}
                        {{-- <button type="button">{{trans('areaClientWords.btnSave')}}</button> --}}
                        {{-- <input type="submit"><label for="submit">{{trans('areaClientWords.btnSave')}}</label> --}}
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>
{{--  BOX  SELOS  --}}
{{--  BOX  SELOS  --}}
{{--  BOX  SELOS  --}}
<div class="container box-selos justify-content-center mt-5 mb-2 d-none">

    <div class="row">

        {{--  menu esquerda  --}}
        <div class="col-4 left-menu text-start">
            <div class="d-flex flex-column bd-highlight mb-1 mt-2 ms-3">
                {{-- name title --}}
                <div class="p-2 bd-highlight">
                    <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                    <label for="" id="nameClient" class="py-2">Honorio Silva</label>
                </div>
                {{-- adquirir selos btn --}}
                <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                    <span>{{trans('areaClientWords.adqSelos')}}</span>
                </div>
                {{--       items | meus selos     --}}
                <div class="d-flex bd-highlight border-bottom">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                {{--  items | historico consumo  --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | meus dados   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | vale de desconto   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | metodo de pagamento   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | encerrar sessão   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.encerrar')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

            </div>
        </div>
        {{-- menu direita --}}
        {{-- menu direita --}}
        <div class="col-7 right-menu">

            {{-- title  | descricao --}}
            <div class="d-flex flex-column text-start bd-highlight mb-3 mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3">
                    <span class="titleName">{{trans('areaClientWords.titleAreaSelo')}}</span>
                </div>
                {{-- welcome descricao  | voltar --}}
                <div class="d-flex bd-highlight">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.descrSelos')}}
                    </div>
                    <div class="p-2 bd-highlight  btnBack">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>

                {{-- Tipos de selos  | btn Pesquisa --}}
                <div class="d-flex flex-row bd-highlight align-items-center">
                    {{-- radioBTN tipos de selos  me-auto   class=" p-2 bd-highlight " --}}
                    <div class=" me-auto typeSelo">
                        {{-- radioBtn | MSTAMP --}}
                        <input type="radio" id="mstamp" name="typeAcount" value="">
                        <label for="mstamp" class="me-3">
                            <img src="{{ asset('img/Mstamp-logoA.svg') }}" width="100px" height="100px" alt="">
                        </label>
                        {{--  radioBtn | MTECH --}}
                        <input type="radio" id="mtech" name="typeAcount" value="">
                        <label for="mtech">
                            <img src="{{ asset('img/Mtech-logoB.svg') }}" width="90px" height="90px" alt="">
                        </label>
                    </div>
                    {{-- btn Pesquisa class="p-2 bd-highlight" --}}
                    <div id="pesquisa" class="btnPesquisa d-flex flex-column align-items-end">
                        <div class="p-1 bd-highlight">
                            <label for="fname">
                                <i class="fas fa-search fa-1x"></i>
                                {{trans('areaClientWords.search')}}
                            </label>
                        </div>
                        <div class="p-1 bd-highlight">
                            <input type="text" id="fname" name="fname" value="">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
{{--  BOX METODO DE PAGAMENTO  --}}
{{--  BOX METODO DE PAGAMENTO  --}}
{{--  BOX METODO DE PAGAMENTO  --}}
<div class="container box-pagamentos d-none">
    <div class="row">
        {{--  menu esquerda  --}}
        {{--  menu esquerda  --}}
        <div class="col-4 left-menu text-start">
            <div class="p-2 bd-highlight">
                <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                <label for="" id="nameClient" class="py-2">Honorio Silva</label>
            </div>
            {{-- adquirir selos btn --}}
            <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                <span>{{trans('areaClientWords.adqSelos')}}</span>
            </div>
            {{--       items | meus selos     --}}
            <div class="d-flex bd-highlight border-bottom">
                <div class="me-auto p-2 bd-highlight item ">
                    {{trans('areaClientWords.meuSelos')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
            {{--  items | historico consumo  --}}
            <div class="d-flex bd-highlight border-bottom ">
                <div class="me-auto p-2 bd-highlight item  ">
                    {{trans('areaClientWords.historicoC')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
            {{--  items | meus dados   --}}
            <div class="d-flex bd-highlight border-bottom ">
                <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                    {{trans('areaClientWords.meusDados')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
            {{--  items | vale de desconto   --}}
            <div class="d-flex bd-highlight border-bottom ">
                <div class="me-auto p-2 bd-highlight item ">
                    {{trans('areaClientWords.meusVale')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
            {{--  items | metodo de pagamento   --}}
            <div class="d-flex bd-highlight border-bottom ">
                <div class="me-auto p-2 bd-highlight item">
                    {{trans('areaClientWords.metodoPagamento')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
            {{--  items | encerrar sessão   --}}
            <div class="d-flex bd-highlight border-bottom ">
                <div class="me-auto p-2 bd-highlight item ">
                    {{trans('areaClientWords.encerrar')}}
                </div>
                <div class="p-2 bd-highlight">
                    <i class="fas ms-5 fa-chevron-right"></i>
                </div>
            </div>
        </div>
        {{--  menu direita  --}}
        {{--  menu direita  --}}
        <div class="col-7 right-menu">
            {{-- title  | descricao --}}
            <div class="d-flex flex-column text-start bd-highlight mb-3 mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3">
                    <span class="titleName">{{trans('areaClientWords.titlePagamento')}}</span>
                </div>
                {{-- welcome descricao  | voltar --}}
                <div class="d-flex bd-highlight">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.descrPayment')}}
                    </div>
                    <div class="p-2 bd-highlight btnBack">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>
            </div>
            {{-- formulario pagamento  --}}
            <form action="" class="form-payment">
                {{-- card type | validade | cvv --}}
                <div class="d-flex flex-row bd-highlight mb-3 cardType">
                    {{-- card type  --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.cardType')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- card validade  --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.cardValidade')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- card CVV  --}}
                    <div class="p-2 bd-highlight text-start">
                        <label for="fname">{{trans('areaClientWords.cardCvv')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                </div>
                {{-- card   | number | name | terms --}}
                <div class="d-flex flex-column bd-highlight mb-3 ">
                    {{-- card number   --}}
                    <div class="p-2 bd-highlight text-start cardID">
                        <label for="fname">{{trans('areaClientWords.cardNumber')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- card name   --}}
                    <div class="p-2 bd-highlight text-start cardID">
                        <label for="fname">{{trans('areaClientWords.cardName')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                    {{-- termos   --}}
                    <div class="p-2 bd-highlight checkbox-custom text-start cardTerms">
                        <input id="checkboxValidTerm" type="checkbox">
                        <label for="checkboxValidTerm" class="labelCheck">
                            {{trans('areaClientWords.terms')}}
                        </label>
                    </div>
                </div>
                {{-- Mtech adicão automatica --}}
                <div class="d-flex flex-column bd-highlight mb-3 text-start">
                    {{--  logo |  MTECH --}}
                    <div class="p-2 bd-highlight">
                        <label for="mtech">
                            <img src="{{ asset('img/Mtech-logoB.svg') }}" width="90px" height="90px" alt="">
                        </label>
                    </div>
                    {{-- validar   nº de selos automatico --}}
                    <div class="p-2 bd-highlight checkbox-custom">
                        <input id="checkboxValid" type="checkbox">
                        <label for="checkboxValid" class="labelCheck">
                            {{trans('areaClientWords.definirMtech')}}
                        </label>
                    </div>
                    {{-- definir nº de selos --}}
                    <div class="p-2 bd-highlight addSelos">
                        <label for="fname">{{trans('areaClientWords.numberSelo')}}</label><br>
                        <input type="text" id="fname" name="fname" value=""><br>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
{{--  BOX INTEGRAÇÃO API  --}}
{{--  BOX INTEGRAÇÃO API  --}}
{{--  BOX INTEGRAÇÃO API  --}}
<div class="container box-api d-none">
    <div class="row">
        {{--  menu esquerda --}}
        <div class="col-4 left-menu text-start">

            <div class="d-flex flex-column bd-highlight mb-1 mt-2 ms-3">
                {{-- name title --}}
                <div class="p-2 bd-highlight">
                    <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                    <label for="" id="nameClient" class="py-2">Honorio Silva</label>
                </div>
                {{-- adquirir selos btn --}}
                <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                    <span>{{trans('areaClientWords.adqSelos')}}</span>
                </div>
                {{--       items | meus selos     --}}
                <div class="d-flex bd-highlight border-bottom">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                {{--  items | historico consumo  --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | meus dados   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | vale de desconto   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | metodo de pagamento   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | encerrar sessão   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.encerrar')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        {{--  menu direita --}}
        <div class="col-7 right-menu">
            {{-- title  | descricao --}}
            <div class="d-flex flex-column text-start bd-highlight  mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3 ">
                    <span class="me-2">
                        <img src="{{ asset('img/Mtech-logoB.svg') }}" width="90px" height="90px" alt="">
                    </span>
                    <span class="titleName">{{trans('areaClientWords.apTitle')}}</span>
                </div>
                {{-- welcome descricao  | voltar --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.descrApi')}}
                    </div>
                    <div class="p-2 bd-highlight btnBack">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>
                {{-- welcome descricao  | FAQS --}}
                <div class="p-2 bd-highlight mt-4 text-end curso-pointer" id="faQsAPI">
                    <span>{{trans('areaClientWords.faQS')}}</span>
                </div>
            </div>
            {{-- form  | id user | password --}}
            <div class="d-flex flex-column text-start bd-highlight form-api ">
                {{--  id utilizador  --}}
                <div class="p-2 bd-highlight text-start">
                    <label for="fname">{{trans('areaClientWords.frUserID')}}</label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                </div>
                {{-- palavra pass --}}
                <div class="p-2 bd-highlight text-start">
                    <label for="fname">{{trans('areaClientWords.frPassAPI')}}</label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                </div>
                {{-- codigo de api | text area  --}}
                {{-- <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div> --}}
                <div class="p-2 bd-highlight text-start">
                    <label for="fname">{{trans('areaClientWords.codAPI')}}</label><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                        style="resize:none !important"></textarea>
                </div>
                {{-- copiad codigo de api |   --}}
                <div class="p-2 bd-highlight text-start border-bottom">
                    <label for="fname" class="mb-2">{{trans('areaClientWords.copyCod')}}</label><br>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  BOX PROMOÇÕES  --}}
{{--  BOX PROMOÇÕES   --}}
{{--  BOX PROMOÇÕES   --}}
<div class="container box-promocao d-none">
    <div class="row">
        {{--  menu esquerda col --}}
        <div class="col-4 left-menu text-start">
            <div class="d-flex flex-column bd-highlight mb-1 mt-2 ms-3">
                {{-- name title --}}
                <div class="p-2 bd-highlight">
                    <label for="" class="titleName">{{trans('areaClientWords.nomeCliente')}}</label><br>
                    <label for="" id="nameClient" class="py-2">Honorio Silva</label>
                </div>
                {{-- adquirir selos btn --}}
                <div class="p-2 bd-highlight btn-pay-selos text-center mb-3 mt-3">
                    <span>{{trans('areaClientWords.adqSelos')}}</span>
                </div>
                {{--       items | meus selos     --}}
                <div class="d-flex bd-highlight border-bottom" id="seloArea">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                {{--  items | historico consumo  --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | meus dados   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item" id="boxData-client">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | vale de desconto   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | metodo de pagamento   --}}
                <div class="d-flex bd-highlight border-bottom" id="box-pagamento">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
                {{--  items | encerrar sessão   --}}
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.encerrar')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- menu direita  --}}
        {{-- menu direita  --}}
        <div class="col-7 right-menu">
            {{-- title  | descricao --}}
            <div class="d-flex flex-column text-start bd-highlight mb-3 mt-2  ">
                {{-- title --}}
                <div class="p-2 bd-highlight mb-3">
                    <span class="titleName">{{trans('areaClientWords.promoTitle')}}</span>
                </div>
                {{-- welcome descricao  | voltar --}}
                <div class="d-flex bd-highlight">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.promoDescr')}}
                    </div>
                    <div class="p-2 bd-highlight btnBack">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>
            </div>

            {{--  box promoções  --}}
            <div class="d-flex justify-content-center mt-5">
                {{-- pack | 20% --}}
                <div class="p-2 bd-highlight me-2 pack-promo curso-pointer">
                    <span class="mb-2"> -20%</span>
                </div>
                {{-- pack | 30% --}}
                <div class="p-2 bd-highlight me-2 pack-promo curso-pointer">
                    <span class="mb-2"> -30%</span>
                </div>
                {{-- pack | 40% --}}
                <div class="p-2 bd-highlight me-2 pack-promo curso-pointer">
                    <span class="mb-2"> -40%</span>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection