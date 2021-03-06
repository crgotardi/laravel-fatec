<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;
use App\Http\Requests\GeneroRequest;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::all();
        return view('genres')->with('generos', $generos);
    }

    public function store(GeneroRequest $request)
    {
        Genero::create($request->all());
        return redirect('/generos');
    }

    public function edit($id)
    {
        $genero = Genero::find($id);
        return view('genres-edit')->with('genero', $genero);
    }

    public function update(GeneroRequest $request, $id)
    {
        $genero = Genero::find($id);
        $genero->update($request->all());
        return redirect('/generos');
    }

    public function destroy($id)
    {
        Genero::destroy($id);
        return redirect('/generos');
    }
}
