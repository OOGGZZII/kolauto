<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fuel;

class FuelController extends Controller
{
    public function index()
    {
        return view('fuels/list', ['entities' => Fuel::all()]);
    }
}
