<!doctype html>
<html lang="pt-PT">

<head>
    @include('plataforma/includes/head')
    <title>@yield('title')</title>
</head>

<body>

    @include('plataforma/includes/header')
    @yield('menu-header')

    @yield('home')

    @yield('javascript')

    <button id="myBtn"><i class="fas fa-arrow-up"></i></button>

    @include('plataforma/includes/footer')

    {{-- library jquery --}}
    <script src="{{ asset('js/jquery.js') }}"></script>

    {{-- library bootstrap bundle --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    {{-- library bootstrap min --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{-- custom scripts --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>