<?php

namespace App\Http\Controllers;
use App\Models\Body;

use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index()
    {
        return view('bodies/list', ['entities' => Body::all()]);
    }
}
