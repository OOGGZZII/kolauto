<?php

namespace App\Http\Controllers;
use App\Models\Gearshift;
use Illuminate\Http\Request;

class GearshiftController extends Controller
{
    public function index()
    {
        return view('gearshifts/list', ['entities' => Gearshift::all()]);
    }
}
