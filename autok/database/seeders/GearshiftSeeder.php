<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gearshift;

class GearshiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            '0 - mechanikus',
            '1 - félautomata',
            '2 - automata',
            '3 - szekvenciális',
        ];
        $this->command->getOutput()->progressStart(count($types));
        foreach($types as $type){
            $item = new Gearshift();
            $item -> type = $type;
            $item -> save();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
