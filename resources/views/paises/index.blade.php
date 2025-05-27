@extends('layout')

@section('title', 'Lista de Países')

@section('content')
<h1 class="text-center mb-5">Lista de Países</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach($paises as $pais)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('images/banderas/' . $pais->imagen) }}" class="card-img-top" alt="{{ $pais->nombre }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $pais->nombre }}</h5>
                    <p class="card-text">Capital: {{ $pais->capital }}</p>
                    <a href="{{ route('paises.show', $pais->id) }}" class="btn btn-outline-primary w-100">Ver Detalles</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
