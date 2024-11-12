<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trim;
use App\Models\Maker;

class TrimsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makers = Maker::all();
        $this->command->getOutput()->progressStart(count($makers));
        foreach ($makers as $maker) {
            $models = $maker->carModels;
            foreach ($models as $model) {
                $trims = DB::select('SELECT DISTINCT trim FROM car_db WHERE make = "'.$maker->name.'" AND model = "'.$model->name.'";');
                foreach ($trims as $trim) {
                    $item = new Trim();
                    $item -> name = $trim -> trim;
                    $item -> carModel_id = $model->id;
                    $item -> save();
                }
            }
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
