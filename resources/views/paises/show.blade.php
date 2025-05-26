<!-- resources/views/paises/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle del País</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <a href="{{ route('paises.index') }}" class="btn btn-secondary mb-3">← Volver a la lista</a>
    <div class="card">
        <img src="{{ asset('images/banderas/' . $pais->imagen) }}" class="card-img-top" alt="Bandera de {{ $pais->nombre }}">
        <div class="card-body">
            <h3 class="card-title">{{ $pais->nombre }}</h3>
            <ul class="list-group">
                <li class="list-group-item"><strong>Capital:</strong> {{ $pais->capital }}</li>
                <li class="list-group-item"><strong>Región:</strong> {{ $pais->region }}</li>
                <li class="list-group-item"><strong>Población:</strong> {{ number_format($pais->poblacion) }}</li>
                <li class="list-group-item"><strong>Idioma:</strong> {{ $pais->idioma }}</li>
                <li class="list-group-item"><strong>Moneda:</strong> {{ $pais->moneda }}</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
