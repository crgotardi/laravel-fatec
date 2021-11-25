<?php

namespace App\Http\Controllers;

use App\Models\Editora;
use Illuminate\Http\Request;
use App\Http\Requests\EditoraRequest;

class EditoraController extends Controller
{
    public function index()
    {
        $editoras = Editora::all();
        return view('publishers')->with('editoras', $editoras);
    }

    public function store(EditoraRequest $request)
    {
        Editora::create($request->all());
        return redirect('/editoras');
    }

    public function edit($id)
    {
        $editora = Editora::find($id);
        return view('publishers-edit')->with('editora', $editora);
    }

    public function update(EditoraRequest $request, $id)
    {
        $editora = Editora::find($id);
        $editora->update($request->all());
        return redirect('/editoras');
    }

    public function destroy($id)
    {
        Editora::destroy($id);
        return redirect('/editoras');
    }
}
