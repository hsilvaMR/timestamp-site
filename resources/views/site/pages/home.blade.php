@extends('site.layouts.template')
@section('title', $title)


@section('home')

<div class="container-fluid home">

    <div class="container">

        <div class="row mt-5  justify-content-center">

            {{-- coluna 1  --}}
            <div class=" col col-1A">
                <img src="{{ asset('img/col1.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight titulo-col mt-4">Tabela de Preço</div>

                    <div class="p-2 bd-highlight item-col">
                        Consulte os diferentes valores, de acordo
                        com o tipo de selo e com o pacote que
                        mais lhe convém.
                    </div>

                    <div class="p-2 bd-highlight item-col">
                        Dispomos de uma âmpla seleção de pacotes dos diferentes tipos de selos.
                    </div>
                </div>

            </div>

            {{-- coluna 2  --}}
            <div class=" col col-2B">
                <img src="{{ asset('img/col2.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight titulo-col mt-4">Processo de Compra</div>

                    <div class="p-2 bd-highlight item-col">
                        Simples, fácil e acessível!
                        A partir do registo, siga os paços e as opções
                        de compra preenchendo com os seus dados.
                    </div>

                    <div class="p-2 bd-highlight item-col">
                        Queremos que tudo seja simples, e quando tiver dúvidas, nós ajudamos!
                    </div>
                </div>

            </div>
            {{-- coluna 3  --}}
            <div class=" col col-3B">
                <img src="{{ asset('img/col3.png') }}" class="img-fluid" alt="">

                <div class="d-flex flex-column  justify-content-center mb-1">
                    <div class="p-2 bd-highlight titulo-col mt-4"> Como adquirir ? </div>

                    <div class="p-2 bd-highlight item-col">
                        Basta fazer o registo, selecionar o produto
                        e efectuar o pagamento, simples não é?
                        Em caso de dúvidas, fale connosco.
                    </div>

                    <div class="p-2 bd-highlight item-col">
                        Criar conta...
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection