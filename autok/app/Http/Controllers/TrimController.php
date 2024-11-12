<?php

namespace App\Http\Controllers;
use App\Models\Trim;
use Illuminate\Http\Request;

class TrimController extends Controller
{
    public function index()
    {
        return view('trims/list', ['entities' => Trim::all()]);
    }
}
