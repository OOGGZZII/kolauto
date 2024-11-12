<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maker;

class MakerController extends Controller
{
    public function index()
    {
        return view('makers/list', ['entities' => Maker::all()]);
    }

    public function create()
    {
        return view('makers.create');
    }

    public function store(Request $request)
    {
        $body  = new Maker();
        $body->name = $request->input('name');
        $body->save();

        return redirect()->route('makers')->with('success', "Sikeresen hozzáadva");
    }

    public function edit(string $id)
    {
        $maker = Maker::find($id);
        return view('makers.edit', compact('maker'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>"required|min:3|max:10"], ['required'=>"Kötelező", "min"=>"Túl rövid, legalább 3", "max"=>"Túl hosszú, legfeljebb 10"]);
        $maker  = Maker::find($id);
        $maker->name = $request->input('name');
        $maker->save();

        return redirect()->route('makers')->with('success', "Sikeresen módisítva");
    }


    public function destroy(string $id)
    {
        $maker  = Maker::find($id);
        $maker->delete();

        return redirect()->route('makers')->with('success', "Sikeresen törölve");
    }
}
