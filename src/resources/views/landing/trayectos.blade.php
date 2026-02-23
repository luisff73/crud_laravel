@extends('landing.layouts.landing')
@section('title', 'Trayectos')
@section('header')
    <h1>Nuestros trayectos</h1>
@endsection
@section('content')
    <p>Estos son nuestros trayectos.</p>
@endsection

@section('body')
    {{-- Contenedor para las tarjetas de traye con diseño de cuadrícula --}}
    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); /* Crea columnas que se ajustan automáticamente, mínimo 380px de ancho */
        gap: 10px; /* Espacio entre las tarjetas */
        padding: 20px; /* Opcional: padding alrededor de la cuadrícula */
    ">
        @foreach ($trayectos as $trayecto)
            {{-- Cada tarjeta de trayecto dentro de un div para el elemento de la cuadrícula --}}
            <div>
                <x-card :title="$trayecto->descripcion" style="border: 1px solid #5965cd; border-radius: 8px; padding: 15px; text-align: center">
                    <p><strong>Salida:</strong> {{ $trayecto->inicio }}</p>
                    <p><strong>Destino:</strong> {{ $trayecto->destino }}</p>
                    <p><strong>Duracion:</strong> {{ $trayecto->duracion }}</p>
                    <p><strong>Precio:</strong> {{ $trayecto->precio }} €</p>
                    <p><strong>Salida:</strong> {{ $trayecto->horario_salida }}</p>
                    <p><strong>Llegada:</strong> {{ $trayecto->horario_llegada }}</p>
                    <p><strong>Barco:</strong> {{ $trayecto->barcos->nombre }}</p>
                    <img src="{{ $trayecto->barcos->foto }}" alt="Foto de {{ $trayecto->barcos->nombre }}" style="max-width: 100%; height: auto; margin-top: 10px;">
                </x-card>
            </div>
        @endforeach
@endsection
