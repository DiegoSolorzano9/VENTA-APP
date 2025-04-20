<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_documento' => $this->faker->numberBetween(1, 3), 
            'numero_documento' => $this->faker->unique()->numerify('##########'),
            'razon_social' => $this->faker->company(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
