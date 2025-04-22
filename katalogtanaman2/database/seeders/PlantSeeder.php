<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plant;

class PlantSeeder extends Seeder
{
    public function run(): void
    {
        Plant::create([
            'name' => 'Monstera',
            'type' => 'Indoor',
            'care_instructions' => 'Siram 2x seminggu'
        ]);

        Plant::create([
            'name' => 'Kaktus Mini',
            'type' => 'Outdoor',
            'care_instructions' => 'Siram seminggu sekali'
        ]);

        Plant::create([
            'name' => 'Lidah Mertua',
            'type' => 'Indoor',
            'care_instructions' => 'Tidak perlu banyak air'
        ]);
    }
}
