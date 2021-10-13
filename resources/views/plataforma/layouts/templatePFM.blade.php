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

    @include('plataforma/includes/footerPFM')

    {{-- library jquery --}}
    <script src="{{ asset('site/js/jquery.js') }}"></script>

    {{-- library bootstrap bundle --}}
    <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>

    {{-- library bootstrap min --}}
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>

    {{-- custom scripts --}}
    <script src="{{ asset('plataforma/js/scriptPFM.js') }}"></script>
</body>

</html>