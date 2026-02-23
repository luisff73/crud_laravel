@extends('landing.layouts.landing')
@section('title', 'Contacto')
@section('header')
    <h1>Contacto</h1>
@endsection

@section('content')
    <p>Contacta con nosotros</p>
@endsection

@section('body')
    <img src="{{ asset('assets/images/mundo.png') }}" alt="Ferry" width="528" style="display: block; margin-left: auto; margin-right: auto;">

    <p> Contacta con nosotros en:</p>
    <ul>
        <li>Teléfono: +34 123 456 789</li>
        <li>Email: info@viajesferries.com</li>
        <li>Dirección: Calle del Mar, 123, Barcelona, España</li>
    </ul>

    <x-button type="info" title="Contáctanos" class="underline" href="mailto:info@viajesferries.com">
        Contactanos
    </x-button>

@endsection
