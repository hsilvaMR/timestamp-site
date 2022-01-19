@extends('plataforma/layouts/template')

{{-- title --}}
@section('title', $title)

@section('home')
{{-- MODALS  --}}
@include('plataforma/includes/loginModal')
@yield('modal')
@yield('scripts')

@endsection