<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetti>
 */
class ProgettiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word,
            'descrizione' => $this->faker->sentence,
            'data_inizio' => $this->faker->date,
            'data_fine' => $this->faker->date,
        ];
    }
}
