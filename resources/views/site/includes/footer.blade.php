<div class="container-fluid footer border-top border-1">

    <div class="container">
        <div class="row mt-5  justify-content-center">
            <div class="col col-A">
                <img src="{{ asset('img/logoFoter.png') }}" class="img-fluid" alt="">
                {{trans('footerWords.timestampSolution')}}
            </div>

            {{-- Descobrir  | Processo de compra  | Tabela precos | ... --}}
            <div class=" col col-b">
                <div class="d-flex flex-column  justify-content-cente mb-1">
                    <div class="p-2 bd-highlight titulo-col"> {{trans('footerWords.descobrir')}} </div>
                    <div class="p-2 bd-highlight item-col" data-bs-toggle="modal" data-bs-target="#processo-compra">
                        {{trans('footerWords.processoCompra')}}</div>
                    <div class="p-2 bd-highlight item-col" data-bs-toggle="modal" data-bs-target="#mdTbl_mstp">
                        {{trans('footerWords.tabelaPreco')}}
                    </div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.comoAdquirir')}}</div>
                    <div class="p-2 bd-highlight item-col"> {{trans('footerWords.sobreNos')}}</div>
                </div>
            </div>

            {{-- col Crie uma conta  | Registe-se | FAQS | as vantagem--}}
            <div class="col  col-c ">
                <div class="d-flex flex-column  justify-content-cente mb-1">
                    <div class="p-2 bd-highlight titulo-col">{{trans('footerWords.criarConta')}}</div>
                    <div class="p-2 bd-highlight item-col" data-bs-toggle="modal" data-bs-target="#modal-registar">
                        {{trans('footerWords.registar')}}</div>
                    <div class="p-2 bd-highlight item-col">{{trans('footerWords.vantagem')}}</div>
                </div>
            </div>

            {{-- col Assistencia | suporte | FAQS | Seguranca e Privacidade --}}
            <div class="col col-d">
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
        <div class="d-flex  bd-highlight mb-3 mt-3 aboutMredis">
            <div class="me-auto  p-2 bd-highlight  titulo-col ">
                {{trans('footerWords.mredisLda')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.sobre')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.mapSite')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.termsCondition')}}</div>
            <div class="p-2 bd-highlight item-col"> {{trans('footerWords.termsCondition')}}</div>
            <div class="p-2 bd-highlight item-col">{{trans('footerWords.contactos')}}</div>
        </div>

    </div>

</div>