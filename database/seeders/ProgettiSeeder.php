<?php

namespace Database\Seeders;

use App\Models\Progetti;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgettiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Crea 10 progetti di esempio
       Progetti::factory()->count(10)->create();
    }
}
