@section('menu-header')

<div class="container-fluid header">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            {{-- Logo --}}
            <div class="me-auto p-2 bd-highlight logoHeader">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logoHeader.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            {{-- login area --}}
            <div class="p-2 bd-highlight loginArea">
                <a href="{{ route('box-login') }}">
                    <img src="{{ asset('img/logoLogin.png') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>

</div>

{{-- card z-index --}}
<div class="container content-zIndex ">
    <div class=" col-7    justify-content-start col-zIndex mt-4">

        <div class="d-flex flex-column mb-1  ms-3 me-5">
            <div class="p-2 bd-highlight  font-title-header mt-5">
                Descubra <i class="color-rose-words">como</i>, <i class="color-rose-words">onde</i> e para que
                servem os
                <i class="color-rose-words">Selos Temporais</i>!
            </div>
            <div class="p-2 bd-highlight  font-words-body mt-3 cardZindex me-5">
                Confira aos seus documentos, processos, aplicações e serviços a prova temporal que
                tanto necessitam, através dos <i class="color-rose-words">Mstamp</i> e <i
                    class="color-rose-words">Mtech</i>
                . Os selos temporais
                são uma garantia não só do conteúdo comunicado, mas também do exato momento em que ocorreu.
            </div>
            <div class="p-2 bd-highlight item-col btnRegister evtMVr  mt-5 text-center pt-3">
                <span>
                    <img src="{{ asset('img/register-white.png') }}" width="25px" height="25px" class="btnRegs" alt="">
                    {{trans('footerWords.registar')}}
                </span>
            </div>
        </div>

    </div>
</div>
{{-- card z-index  end --}}

@endsection