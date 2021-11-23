<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Editora;
use App\Models\Autor;
use App\Models\Genero;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        {
            $livros = Livro::all();
            $editoras = Editora::all();
            $autores = Autor::all();
            $generos = Genero::all();
            return view('books')->with('editoras', $editoras)->with('autores', $autores)->with('livros', $livros)->with('generos', $generos);
        }
    }

    public function store(Request $request)
    {
        Livro::create($request->all());
        return redirect('/livros');
    }

    public function edit(Livro $livro)
    {
        $livro = Livro::find($id);
        return view('books')->with('livro', $livro);
    }

    public function update(Request $request, Livro $livro)
    {
        $livro = Livro::find($id);
        $livro->update($request->all());
        return redirect('/livros');
    }

    public function destroy(Livro $livro)
    {
        Livro::destroy($id);
        return redirect('/livros');
    }
}
