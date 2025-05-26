<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pais>
 */
class PaisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'nombre' => $this->faker->country(),
        'capital' => $this->faker->city(),
        'region' => $this->faker->word(),
        'poblacion' => $this->faker->numberBetween(500000, 100000000),
        'idioma' => $this->faker->languageCode(),
        'moneda' => $this->faker->currencyCode(),
        'imagen' => 'default.png', // luego colocamos banderas reales
    ];
}

}
