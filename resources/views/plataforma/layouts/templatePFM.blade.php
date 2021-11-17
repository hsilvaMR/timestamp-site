<!doctype html>
<html lang="pt-PT">

<head>
    @include('plataforma/includes/headPFM')
    <title>@yield('title')</title>
</head>

<body>

    @include('plataforma/includes/headerPFM')
    @yield('menu-header')

    @yield('home')

    @yield('javascript')

    @include('plataforma/includes/footerPFM')

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