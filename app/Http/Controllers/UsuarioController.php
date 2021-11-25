<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function index()
    {
        $clientes = Usuario::all();
        return view('customers')->with('clientes', $clientes);
    }

    public function store(UsuarioRequest $request)
    {
        Usuario::create($request->all());
        return redirect('/clientes');
    }

    public function edit($id)
    {
        $cliente = Usuario::find($id);
        return view('customers-edit')->with('cliente', $cliente);
    }

    public function update(UsuarioRequest $request, $id)
    {
        $cliente = Usuario::find($id);
        $cliente->update($request->all());
        return redirect('/clientes');
    }


    public function destroy($id)
    {
        Usuario::destroy($id);
        return redirect('/clientes');
    }
}
