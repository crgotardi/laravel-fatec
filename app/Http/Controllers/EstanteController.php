<?php

namespace App\Http\Controllers;

use App\Models\Estante;
use App\Models\Livro;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\EstanteRequest;

class EstanteController extends Controller
{
    public function index()
    {
        $emprestimos = Estante::all();
        $livros = Livro::all();
        $clientes = Usuario::all();
        return view('shelf')->with('emprestimos', $emprestimos)->with('livros', $livros)->with('clientes', $clientes);
    }

    public function store(EstanteRequest $request)
    {
        Estante::create($request->all());
        return redirect('/emprestimos');
    }

    public function edit($id)
    {
        $emprestimo = Estante::find($id);
        $livros = Livro::all();
        $clientes = Usuario::all();
        return view('shelf-edit')->with('emprestimo', $emprestimo)->with('livros', $livros)->with('clientes', $clientes);
    }

    public function update(EstanteRequest $request, Estante $estante)
    {
        $emprestimo = Estante::find($id);
        $emprestimo->update($request->all());
        return redirect('/emprestimos');
    }

    public function destroy($id)
    {
        Estante::destroy($id);
        return redirect('/emprestimos');
    }
}
