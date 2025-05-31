{{-- Plantilla  --}}
@extends('layouts.app')

@section('title', 'Laravel 12 N1')

@push('css')
    <style>
        body {
            background-color: #5097de; /* Color de fondo claro */
        }
    </style>    
@endpush

@push('css')
    <style>
        body {
            color: lightgreen; /* Color de texto oscuro */
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido a la pagina principal</br></h1>
        <x-alert type="sucess" class="mb-4">
            {{-- <strong>¡Éxito!</strong> \nHas accedido a la página principal. --}}
            <x-slot name="title">
                Bienvenido
            </x-slot>
            Contenido de la alerta
        </x-alert>
    </div>
@endsection


