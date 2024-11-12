<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maker;
use DB;

class MakersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $makers = DB::select("SELECT DISTINCT make FROM car_db");
        $this->command->getOutput()->progressStart(count($makers));
        foreach ($makers as $maker) {
            $item = new Maker();
            $item -> name = $maker -> make;
            $item -> save();
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
