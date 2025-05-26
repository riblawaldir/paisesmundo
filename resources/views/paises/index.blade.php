<!-- resources/views/paises/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Países</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
    <h1 class="text-center mb-4">Países del Mundo</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($paises as $pais)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/banderas/' . $pais->imagen) }}" class="card-img-top" alt="Bandera de {{ $pais->nombre }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pais->nombre }}</h5>
                        <p class="card-text">Capital: {{ $pais->capital }}</p>
                        <a href="{{ route('paises.show', $pais->id) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
