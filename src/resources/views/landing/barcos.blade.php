@extends('landing.layouts.landing')
@section('title', 'Nuestra flota')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/barcos.css') }}">
@endpush

@section('header')
    <h1>Nuestros barcos</h1>
@endsection
@section('content')
    <p>Estos son nuestros barcos.</p>
@endsection

@section('body')
    {{-- Contenedor para las tarjetas de barcos con diseño de cuadrícula --}}
    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); /* Crea columnas que se ajustan automáticamente, mínimo 380px de ancho */
        gap: 10px; /* Espacio entre las tarjetas */
        padding: 20px; /* Opcional: padding alrededor de la cuadrícula */
    ">

    @if ($barcos->isEmpty())
        <p>No hay barcos disponibles en este momento.</p>
    @else
        @foreach ($barcos as $barco)
            {{-- Cada tarjeta de barco dentro de un div para el elemento de la cuadrícula --}}
            <div>
                <x-barco :barco="$barco" :title="$barco->nombre" style="border: 1px solid #5965cd; border-radius: 8px; padding: 15px; text-align: center">
                    <p><strong>Capacidad de Pasajeros:</strong> {{ $barco->capacidad_pasajeros }}</p>
                    <p><strong>Tipo de Combustible:</strong> {{ $barco->tipo_combustible }}</p>
                    <p><strong>Velocidad Máxima:</strong> {{ $barco->velocidad_maxima }}</p>
                    @if ($barco->foto)
                        <img src="{{ $barco->foto }}" alt="Foto de {{ $barco->nombre }}" style="max-width: 100%; height: auto; margin-top: 10px;">
                    @else
                        <p>No hay foto disponible.</p>
                    @endif

                    @switch($barco->tipo_combustible)
                        @case('SOLAR')
                            <p style="color: green;"><strong>BARCO ECOLOGICO</strong></p>
                            @break
                        @case('HIBRIDO')
                            <p style="color: green;"><strong>BARCO ECOLOGICO</strong></p>
                            @break
                        @default
                            <p style="color: red;"><strong>NO ECOLOGICO</strong></p>
                    @endswitch
                </x-barco> 
            </div>
        @endforeach


    @endif 

    </div> 


    <div>
         @if ($barcos->isEmpty())
        <p>No hay barcos disponibles en este momento.</p>
    @else
        @foreach ($barcos as $barco)
            <li>{{ $loop->iteration }}. {{ $barco->nombre }} ({{ $barco->capacidad_pasajeros }} pasajeros)</li>
        @endforeach
    @endif
            <li> Tenemos un total de {{ $barcos->count() }} barcos disponibles.</li>
    </div>

    {{-- Botón para crear un nuevo barco --}}
    <div style="text-align: center; margin-top: 20px; margin-bottom: 20px;">
        <a href="{{ route('barcos.create') }}" style="
            background-color: #5965cd;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
        ">
            Crear Nuevo Barco
        </a>

        @if (request()->routeIs('barcos.ecologicos'))
            <a href="{{ route('barcos') }}" style="
                background-color: #5965cd;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                display: inline-block;
            ">
                Mostrar Todos los Barcos
            </a>
        @else
            <a href="{{ route('barcos.ecologicos') }}" style="
                background-color: #5965cd;
                color: white;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                display: inline-block;
            ">
                Mostrar Barcos Ecológicos
            </a>
        @endif
    </div>
    
@endsection