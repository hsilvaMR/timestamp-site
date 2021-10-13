@section('menu-header')

<div class="container-fluid header">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight logoHeader">
                {{-- Logo --}}
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logoHeader.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="p-2 bd-highlight loginArea">
                {{-- login area --}}
                <a href="{{ route('box-login') }}"> <img src="{{ asset('img/logoLogin.png') }}" class="img-fluid"
                        alt="">
                </a>
            </div>
        </div>
    </div>

</div>

{{-- card z-index --}}
<div class="container content-zIndex ">
    <div class="col-6  justify-content-start">

        <div class="d-flex flex-column mb-1 ">
            <div class="p-2 bd-highlight  font-title-header">
                Descubra <i class="color-rose-words">como</i>, <i class="color-rose-words">onde</i> e para que
                servem os
                <i class="color-rose-words">Selos Temporais</i>!
            </div>
            <div class="p-2 bd-highlight item-col font-words-body">
                Confira aos seus documentos, processos, aplicações e serviços a prova temporal que
                tanto necessitam, através dos <i class="color-rose-words">Mstamp</i> e <i
                    class="color-rose-words">Mtech</i>
                . Os selos temporais
                são uma garantia não só do conteúdo comunicado, mas também do exato momento em que ocorreu.
            </div>
            <div class="p-2 bd-highlight item-col bt-register bg-primary mt-3 w-50">
                <div class="d-flex justify-content-center mt-1">
                    <span>
                        <img src="{{ asset('img/register.png') }}" class="img-fluid" alt="">
                        Regista-se
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- card z-index  end --}}

@endsection