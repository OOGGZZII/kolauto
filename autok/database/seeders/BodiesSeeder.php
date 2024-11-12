<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body;

class BodiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bodies = [
            'Crossover',
            'Fastback',
            'Hardtop',
            'Hatchback',
            'Kabrió',
            'Kombi',
            'Kupé',
            'Liftback',
            'Limuzin',
            'Minivan',
            'Pickup',
            'Roadster',
            'Szedán',
            'Targa',
        ];
        $this->command->getOutput()->progressStart(count(value: $bodies));
        foreach ($bodies as $body) {
            $item = new Body();
            $item -> name = $body;
            $item -> save();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
