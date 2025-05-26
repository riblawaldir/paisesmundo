<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisSeeder extends Seeder
{
    public function run(): void
{
    // Lista de países con imágenes reales
    $paisesConImagenes = [
        ['nombre' => 'Argentina', 'imagen' => 'argentina.png'],
        ['nombre' => 'Brasil', 'imagen' => 'brasil.png'],
        ['nombre' => 'México', 'imagen' => 'mexico.png'],
        ['nombre' => 'Francia', 'imagen' => 'francia.png'],
        ['nombre' => 'Alemania', 'imagen' => 'alemania.png'],
        ['nombre' => 'España', 'imagen' => 'espana.png'],
    ];

    // Crear esos países con imágenes específicas
    foreach ($paisesConImagenes as $data) {
        Pais::factory()->create([
            'nombre' => $data['nombre'],
            'imagen' => $data['imagen']
        ]);
    }

    // Crear 44 países restantes con imagen por defecto
    Pais::factory(44)->create();
}
}
