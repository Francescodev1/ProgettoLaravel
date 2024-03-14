<?php

namespace Database\Factories;

use App\Models\Progetti;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
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
            'descrizione' => $this->faker->text,
            'progetto_id' => Progetti::factory(),
        ];
    }
}
