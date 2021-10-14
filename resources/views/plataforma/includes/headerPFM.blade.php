@section('menu-header')
<div class="container-fluid headerPFM">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            {{-- Logo --}}
            <div class="me-auto p-2 bd-highlight logoHeader">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logoHeader.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            {{-- login area --}}
            <div class="p-2 bd-highlight loginArea" data-bs-toggle="modal" data-bs-target="#boxModalLogin">
                {{-- <a href="{{ route('box-login') }}"> --}}
                <img src="{{ asset('img/logoLogin.png') }}" class="img-fluid" alt="">
                {{-- </a> --}}
            </div>
        </div>
    </div>

</div>

@endsection