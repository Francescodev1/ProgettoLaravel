<?php

namespace Database\Seeders;

use App\Models\Attivita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttivitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Progetti::all()->each(function ($progetto) {
            Attivita::factory()->count(rand(1, 5))->create(['progetto_id' => $progetto->id]);
        });
    }
}
