@extends('layout')

@section('title', 'Detalle de ' . $pais->nombre)

@section('content')
<a href="{{ route('paises.index') }}" class="btn btn-secondary mb-4">← Volver a la lista</a>

<div class="card mx-auto" style="max-width: 700px;">
    <img src="{{ asset('images/banderas/' . $pais->imagen) }}" class="card-img-top" alt="Bandera de {{ $pais->nombre }}">
    <div class="card-body">
        <h3 class="card-title">{{ $pais->nombre }}</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Capital:</strong> {{ $pais->capital }}</li>
            <li class="list-group-item"><strong>Región:</strong> {{ $pais->region }}</li>
            <li class="list-group-item"><strong>Población:</strong> {{ number_format($pais->poblacion) }}</li>
            <li class="list-group-item"><strong>Idioma:</strong> {{ $pais->idioma }}</li>
            <li class="list-group-item"><strong>Moneda:</strong> {{ $pais->moneda }}</li>
        </ul>
    </div>
</div>
@endsection
