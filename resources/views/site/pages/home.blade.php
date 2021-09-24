@extends('site.layouts.template')
@section('title', $title)


@section('home')

<div class="container-fluid home">

    <div class="container">

        <div class="row mt-5  justify-content-center">

            {{-- coluna 1  --}}
            <div class=" col col-1">
                <img src="{{ asset('img/col1.png') }}" class="img-fluid" alt="">

                {{-- coluna 2  --}}
                {{-- coluna 3  --}}

            </div>
        </div>


    </div>
</div>

@endsection