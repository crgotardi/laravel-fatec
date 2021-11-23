<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::all();
        return view('authors')->with('autores', $autores);
    }

    public function store(Request $request)
    {
        Autor::create($request->all());
        return redirect('/autores');
    }

    public function edit($id)
    {
        $autor = Autor::find($id);
        return view('authors')->with('autor', $autor);
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        $autor->update($request->all());
        return redirect('/autores');
    }

    public function destroy($id)
    {
        Autor::destroy($id);
        return redirect('/autores');
    }
}
