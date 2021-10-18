@section('client-box')
{{-- BOX AREA DE CLIENTE --}}
{{-- {{trans('footerWords.tabelaPreco')}} --}}
<div class="container main-client  justify-content-center mt-5 mb-2">

    <div class="row">
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
                {{--       items    --}}
                <div class="d-flex bd-highlight border-bottom">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meuSelos')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item  ">
                        {{trans('areaClientWords.historicoC')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight  item">
                        {{trans('areaClientWords.meusDados')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item ">
                        {{trans('areaClientWords.meusVale')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

                <div class="d-flex bd-highlight border-bottom ">
                    <div class="me-auto p-2 bd-highlight item">
                        {{trans('areaClientWords.metodoPagamento')}}
                    </div>
                    <div class="p-2 bd-highlight">
                        <i class="fas ms-5 fa-chevron-right"></i>
                    </div>
                </div>

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
{{-- end box client --}}
@endsection