@section('client-box')
{{-- BOX AREA DE CLIENTE --}}
{{-- {{trans('footerWords.tabelaPreco')}} --}}
<div class="container main-client  justify-content-center mt-5 mb-2">

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
        {{-- menu direita  --}}
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
{{--  dados cliente --}}
{{--  dados cliente --}}
{{--  dados cliente --}}
<div class="container client-dados ">
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
@endsection