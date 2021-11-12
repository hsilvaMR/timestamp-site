<!doctype html>
<html lang="pt-PT">

<head>
    @include('site/includes/head')
    <title>@yield('title')</title>
</head>

<body>

    @include('site/includes/header')
    @yield('menu-header')
    @yield('home')

    @include('site/includes/footer')

    {{-- @yield('javascript') --}}

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