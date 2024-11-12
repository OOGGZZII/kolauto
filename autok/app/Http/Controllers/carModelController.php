<?php

namespace App\Http\Controllers;

use App\Models\carModel;
use App\Models\Maker;
use Illuminate\Http\Request;

class carModelController extends Controller
{
    public function index()
    {
        return view('carModels/list', ['entities' => carModel::all()]);
    }
    public function makerModels(int $makerId)
    {
        $maker = Maker::find($makerId);
        $models = $maker->carModels;
        return view('carModels/list', ['entities' => $models]);
    }
}
