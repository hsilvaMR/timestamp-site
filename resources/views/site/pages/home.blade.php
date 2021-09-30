@extends('site.layouts.template')
@section('title', $title)

@section('home')

<div class="container-fluid home ">

    <div class="container home-box-1">

        {{-- row-1 --}}
        <div class="row">

            {{-- row1 coluna 1 --}}
            <div class="col coluna1  justify-content-center align-self-center ">
                <img src="{{ asset('img/row1-col1.png') }}" class="img-fluid" alt="">
            </div>

            {{-- row1  coluna 2 --}}
            <div class=" col-8 coluna2 ">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-header w-50">
                        Quando, Onde e Como precisar!
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Os serviços da <i class="color-rose-words">Time Stamp Solutions </i> (Selos Temporais) fazem-se
                        valer de chaves
                        públicas e fontes de tempo credíveis para disponibilizar selos temporais
                        fiáveis, de acordo com os padrões internacionais.
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Um serviço com o objetivo de validação cronológica para disponibilizar selos
                        temporais para uso como suporte às assinaturas eletrónicas, conforme Diretiva
                        1999/93/CE do Parlamento Europeu e do
                        Conselho de 13 de Dezembro de 1999, do Decreto Lei 290-D/99, e demais legislação nacional
                        aplicável.
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Contudo, os selos temporais podem também ser utilizados para qualquer outro objetivo que
                        requeira prova de que determinado(s) dado(s) existiu(ram) numa determinada data/hora.
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        Os selos temporais emitidos pelos nossos
                        serviços <i class="color-rose-words">Time Stamp Solutions </i> respeitam e implementam os
                        seguintes standards:
                    </div>

                    <div class="p-2 bd-highlight  font-words-body ">
                        - ETSI TS 102.023: Electronic Signatures and Infrastructures (ESI); Policy requirements
                        for
                        time-stamping authorities
                        - RFC 3628: Requirements for Time-Stamping Authorities
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

            {{-- coluna 1 --}}
            <div class=" col col-1A">
                <img src="{{ asset('img/col1.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4">Tabela de Preço</div>

                    <div class="p-2 bd-highlight  font-body-box2">
                        Consulte os diferentes valores, de acordo
                        com o tipo de selo e com o pacote que
                        mais lhe convém.
                    </div>

                    <div class="p-2 bd-highlight  font-body-box2-color ">
                        Dispomos de uma âmpla seleção de pacotes dos diferentes tipos de selos.
                        {{-- <i class="color-rose-words">Time Stamp Solutions </i> --}}
                    </div>
                </div>

            </div>

            {{-- coluna 2 --}}
            <div class=" col col-2B">
                <img src="{{ asset('img/col2.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4">Processo de Compra</div>

                    <div class="p-2 bd-highlight font-body-box2">
                        Simples, fácil e acessível!
                        A partir do registo, siga os paços e as opções
                        de compra preenchendo com os seus dados.
                    </div>

                    <div class="p-2 bd-highlight    font-body-box2-color">
                        Queremos que tudo seja simples, e quando tiver dúvidas, nós ajudamos!
                    </div>
                </div>

            </div>
            {{-- coluna 3 --}}
            <div class=" col col-3B">
                <img src="{{ asset('img/col3.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight font-title-box2 mt-4"> Como adquirir ? </div>

                    <div class="p-2 bd-highlight  font-body-box2">
                        Basta fazer o registo, selecionar o produto
                        e efectuar o pagamento, simples não é?
                        Em caso de dúvidas, fale connosco.
                    </div>

                    <div class="p-2 bd-highlight  font-body-box2-color">
                        Criar conta...
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection