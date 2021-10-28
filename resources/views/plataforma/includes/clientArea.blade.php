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
                <div class="p-2 mb-2  box-btn mx-2 bd-highlight text-center">
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

            <div class="d-flex  mx-2 mt-2 justify-content-start">
                <div class="p-2 box-btn  bd-highlight">
                    <span>{{trans('areaClientWords.integraAPI')}}</span>
                </div>
            </div>

        </div>

    </div>

</div>
{{--  BOX  dados cliente --}}
{{-- BOX  dados cliente --}}
{{-- BOX  dados cliente --}}
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
                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight descricao">
                        {{trans('areaClientWords.descr')}}
                    </div>
                    <div class="p-2 bd-highlight" id="backBoxClient">
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
{{--  BOX OS MEUS SELOS  --}}
{{--  BOX OS MEUS SELOS  --}}
{{--  BOX OS MEUS SELOS  --}}
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
                    <div class="p-2 bd-highlight" id="backBoxClient">
                        <i class="fas fa-chevron-left"></i>
                        {{trans('areaClientWords.btnBack')}}
                    </div>
                </div>

                {{-- Tipos de selos  | btn Pesquisa --}}
                <div class="d-flex flex-row bd-highlight align-items-center">
                    {{-- radioBTN tipos de selos  me-auto   class=" p-2 bd-highlight " --}}
                    <div class=" me-auto">
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
                    <div id="pesquisa" class="d-flex flex-column align-items-end">
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
        {{--  menu esquerda  --}}
        {{--  menu esquerda  --}}
    </div>
</div>
@endsection