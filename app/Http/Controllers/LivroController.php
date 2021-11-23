<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Livro_Autor;
use App\Models\Editora;
use App\Models\Autor;
use App\Models\Genero;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        $editoras = Editora::all();
        $autores = Autor::all();
        $generos = Genero::all();
        return view('books')->with('editoras', $editoras)->with('autores', $autores)->with('livros', $livros)->with('generos', $generos);
    }

    public function store(Request $request)
    {
        Livro::create($request->all());
        if($request->has('autor_id')){
            Livro_Autor::create($request->all());
        }
        return redirect('/livros');
    }

    public function edit(Livro $livro)
    {
        $livro = Livro::find($id);
        $editoras = Editora::all();
        $autores = Autor::all();
        $generos = Genero::all();
        return view('books.edit')->with('livro', $livro)->with('editoras', $editoras)->with('autores', $autores)->with('generos', $generos);;
    }

    public function update(Request $request, Livro $livro)
    {
        $livro = Livro::find($id);
        $livro->update($request->all());
        if($request->has('autor_id')){
            $livro_autor = Livro_Autor::find($id);
            $livro_autor->update($request->all());
        }
        return redirect('/livros');
    }

    public function destroy($id)
    {
        Livro::destroy($id);
        return redirect('/livros');
    }
}
