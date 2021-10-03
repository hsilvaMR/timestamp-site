@extends('site.layouts.template')
{{-- @section('title', {{ $title }} ) --}}
@section('title', $title)

{{-- <title>{{ $title }}</title> --}}

@section('home')

<div class="container-fluid home ">

    <div class="container home-box-1">

        {{-- row-1  quando e onde comprar ... --}}
        <div class="row">

            {{-- row1 coluna 1 --}}
            <div class="col coluna1  justify-content-center align-self-center ">
                <img src="{{ asset('img/row1-col1.png') }}" class="img-fluid" alt="">
            </div>

            {{-- row1  coluna 2 --}}
            <div class=" col-8 coluna2 ">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-header w-50">
                        {{-- Quando, Onde e Como precisar! --}}
                        {{trans('homeWords.QuandoOnde')}}
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Os serviços da <i class="color-rose-words">Time Stamp Solutions </i> (Selos Temporais) fazem-se
                        valer de chaves
                        públicas e fontes de tempo credíveis para disponibilizar selos temporais
                        fiáveis, de acordo com os padrões internacionais.
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">

                        {{trans('homeWords.umServico')}}

                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        {{trans('homeWords.contudo')}}
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Os selos temporais emitidos pelos nossos
                        serviços <i class="color-rose-words">Time Stamp Solutions </i> respeitam e implementam os
                        seguintes standards:
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        {{trans('homeWords.eTSI')}}
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        A Política e Práticas de Certificação de Validação Cronológica e a Declaração de Práticas de
                        Certificação (DPC) da
                        <i class="color-rose-words">Time Stamp Solutions </i> poderão ser consultadas em:
                        http://www.timestampsolutions.pt/pt/dpc
                    </div>
                </div>

            </div>
        </div>

        {{-- row-2 --}}
        <div class="row mt-5  justify-content-center">

            {{-- coluna 1  tabela de precos --}}
            <div class=" col col-1A" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="{{ asset('img/col1.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4"> {{trans('homeWords.tabelaPreco')}} </div>

                    <div class="p-2 bd-highlight  font-body-box2">
                        {{trans('homeWords.consulteDiferentes')}}
                    </div>

                    <div class="p-2 bd-highlight  font-body-box2-color ">
                        {{trans('homeWords.dispomosAmpla')}}
                    </div>
                </div>

            </div>

            {{-- coluna 2 processo de compra --}}
            <div class=" col col-2B">
                <img src="{{ asset('img/col2.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4"> {{trans('homeWords.processoCompra')}}</div>

                    <div class="p-2 bd-highlight font-body-box2">
                        {{trans('homeWords.simplesFacil')}}
                    </div>

                    <div class="p-2 bd-highlight    font-body-box2-color">
                        {{trans('homeWords.queremosTudo')}}
                    </div>
                </div>

            </div>
            {{-- coluna 3 como adquirir --}}
            <div class=" col col-3B">
                <img src="{{ asset('img/col3.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4"> {{trans('homeWords.comoAdquiri')}} </div>

                    <div class="p-2 bd-highlight  font-body-box2">
                        {{trans('homeWords.bastaFazer')}}
                    </div>

                    <div class="p-2 bd-highlight  font-body-box2-color">
                        {{trans('homeWords.criarConta')}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('site/includes/modals')
    @yield('modal')
</div>

@endsection