<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisSeeder extends Seeder
{
    public function run(): void
    {
        // Países reales con datos correctos
        $paises = [
            [
                'nombre' => 'Argentina',
                'capital' => 'Buenos Aires',
                'region' => 'América del Sur',
                'poblacion' => 46000000,
                'idioma' => 'Español',
                'moneda' => 'Peso argentino',
                'imagen' => 'argentina.png',
            ],
            [
                'nombre' => 'Brasil',
                'capital' => 'Brasilia',
                'region' => 'América del Sur',
                'poblacion' => 213000000,
                'idioma' => 'Portugués',
                'moneda' => 'Real',
                'imagen' => 'brasil.png',
            ],
            [
                'nombre' => 'México',
                'capital' => 'Ciudad de México',
                'region' => 'América del Norte',
                'poblacion' => 126000000,
                'idioma' => 'Español',
                'moneda' => 'Peso mexicano',
                'imagen' => 'mexico.png',
            ],
            [
                'nombre' => 'Francia',
                'capital' => 'París',
                'region' => 'Europa Occidental',
                'poblacion' => 67000000,
                'idioma' => 'Francés',
                'moneda' => 'Euro',
                'imagen' => 'francia.png',
            ],
            [
                'nombre' => 'Alemania',
                'capital' => 'Berlín',
                'region' => 'Europa Central',
                'poblacion' => 83000000,
                'idioma' => 'Alemán',
                'moneda' => 'Euro',
                'imagen' => 'alemania.png',
            ],
            [
                'nombre' => 'España',
                'capital' => 'Madrid',
                'region' => 'Europa del Sur',
                'poblacion' => 47000000,
                'idioma' => 'Español',
                'moneda' => 'Euro',
                'imagen' => 'espana.png',
            ],
        ];

        // Insertar esos países con datos fijos
        foreach ($paises as $data) {
            Pais::create($data);
        }

        // Rellenar con 44 países falsos
        Pais::factory(44)->create();
    }
}
