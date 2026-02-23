@extends('landing.layouts.landing')

@section('title', 'Crear Nuevo Barco')

@section('header')
    <h1>Crear un Nuevo Barco</h1>
@endsection

@section('content')
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px;">
        <form action="{{ route('barcos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 15px;">
                <label for="nombre" style="display: block; margin-bottom: 5px; font-weight: bold;">Nombre del Barco</label>
                <input type="text" id="nombre" name="nombre" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="tipo_combustible" style="display: block; margin-bottom: 5px; font-weight: bold;">Tipo de Combustible</label>
                <select id="tipo_combustible" name="tipo_combustible" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
                    <option value="DIESEL">DIESEL</option>
                    <option value="HIBRIDO">HÍBRIDO</option>
                    <option value="SOLAR">SOLAR</option>
                    <option value="ELECTRICO">ELÉCTRICO</option>
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="capacidad_pasajeros" style="display: block; margin-bottom: 5px; font-weight: bold;">Capacidad de Pasajeros</label>
                <input type="number" id="capacidad_pasajeros" name="capacidad_pasajeros" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="velocidad_maxima" style="display: block; margin-bottom: 5px; font-weight: bold;">Velocidad Máxima (nudos)</label>
                <input type="number" id="velocidad_maxima" name="velocidad_maxima" required style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ddd;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="foto" style="display: block; margin-bottom: 5px; font-weight: bold;">Foto del Barco</label>
                <input type="file" id="foto" name="foto" style="width: 100%; padding: 8px;">
            </div>

            <div style="text-align: center;">
                <button type="submit" style="
                    background-color: #5965cd;
                    color: white;
                    padding: 10px 20px;
                    border-radius: 5px;
                    text-decoration: none;
                    font-weight: bold;
                    border: none;
                    cursor: pointer;
                ">
                    Guardar Barco
                </button>
            </div>
        </form>
    </div>


@endsection
