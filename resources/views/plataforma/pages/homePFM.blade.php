@extends('plataforma/layouts/templatePFM')

{{-- title --}}
@section('title', $title)

@section('home')
{{-- MODALS  --}}
@include('plataforma/includes/modalPFM')
@yield('modal')

@endsection