<!doctype html>
<html lang="pt-PT">

<head>
    @include('site/includes/head')
    <title>@yield('title')</title>
</head>

<body>

    {{-- @include('site/includes/header')
    @yield('menu')
    @yield('home') --}}

    @include('site/includes/footer')

    {{-- library jquery --}}
    <script src="{{ asset('site/js/jquery.js') }}"></script>

    {{-- library bootstrap bundle --}}
    <script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>

    {{-- library bootstrap min --}}
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>

    {{-- custom scripts --}}
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>

</html>