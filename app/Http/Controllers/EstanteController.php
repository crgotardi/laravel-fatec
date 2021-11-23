<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use App\Models\Livro;
use App\Models\Usuario;
use Illuminate\Http\Request;

class EstanteController extends Controller
{
    public function index()
    {
        {
            $emprestimos = Estante::all();
            $livros = Livro::all();
            $clientes = Usuario::all();
            return view('shelf')->with('emprestimos', $emprestimos)->with('livros', $livros)->with('clientes', $clientes);
        }
    }

    public function store(Request $request)
    {
        Estante::create($request->all());
        return redirect('/emprestimos');
    }

    public function edit(Estante $estante)
    {
        $estante = Estante::find($id);
        return view('shelf')->with('estante', $estante);
    }

    public function update(Request $request, Estante $estante)
    {
        $estante = Estante::find($id);
        $estante->update($request->all());
        return redirect('/emprestimos');
    }

    public function destroy(Estante $estante)
    {
        Estante::destroy($id);
        return redirect('/emprestimos');
    }
}
