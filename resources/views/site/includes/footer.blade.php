<div class="container-fluid footer border-top border-2">

    <div class="container">
        <div class="row mt-5  justify-content-center">
            <div class="col col-A">
                {{-- {!! trans('footerWords.timestampSolution') !!} --}}
                <img src="{{ asset('img/logoFoter.png') }}" class="img-fluid" alt="">
                {{trans('footerWords.timestampSolution')}}
            </div>

            <div class=" col col-b">
                <div class="d-flex flex-column  justify-content-cente mb-1">
                    <div class="p-2 bd-highlight titulo-col"> {{trans('footerWords.descobrir')}} </div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.processoCompra')}}</div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.tabelaPreco')}}</div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.comoAdquirir')}}</div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.sobreNos')}}</div>
                </div>
            </div>

            <div class="col col col-c titulo-col">
                <div class="d-flex flex-column  justify-content-cente mb-1">
                    <div class="p-2 bd-highlight titulo-col">{{trans('footerWords.criarConta')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.registar')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.vantagem')}}</div>
                </div>
            </div>

            <div class="col col-d titulo-col">
                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight titulo-col">{{trans('footerWords.assistencia')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.suporte')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.faqs')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.segurancaPrivacidade')}}</div>
                </div>
            </div>

        </div>
        {{--  entidades certificadora logos   width="200" height="100--}}
        <div class="d-flex justify-content-end mb-2 certificacao-logos">
            <img src="{{ asset('img/Footer_logos.png') }}" class="img-fluid" alt="">
        </div>

        {{--  sobre a mredis--}}
        <div class="d-flex bd-highlight mb-3 mt-3">
            <div class="me-auto p-2 bd-highlight  titulo-col ">{{trans('footerWords.mredisLda')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.sobre')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.mapSite')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.termsCondition')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.termsCondition')}}</div>
            <div class="p-2 bd-highlight item-col">{{trans('footerWords.contactos')}}</div>
        </div>

    </div>

</div>