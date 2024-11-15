<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maker;
use DB;
use App\Models\carModel;

class CarModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        $makers = Maker::all();
        $this->command->getOutput()->progressStart(count($makers));
        foreach ($makers as $maker) {
            $models = DB::select('SELECT DISTINCT model from car_db WHERE make = "' . $maker->name . '";');
            foreach ($models as $model) {
                $item = new carModel([
                    'makerId' => $maker->id,
                    'name' => $model -> model
                ]);
                $item->save();
            }
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
