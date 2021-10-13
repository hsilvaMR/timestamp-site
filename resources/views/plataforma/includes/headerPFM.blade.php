@section('menu-header')
<div class="container-fluid header">

    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight logoHeader">
                {{-- Logo --}}
                <img src="{{ asset('img/logoHeader.png') }}" class="img-fluid" alt="">
            </div>
            <div class="p-2 bd-highlight loginArea">
                {{-- login area --}}
                <img src="{{ asset('img/logoLogin.png') }}" class="img-fluid" alt=""
                    href="{{ route('clientTimePage') }}">
            </div>
        </div>
    </div>

</div>

@endsection