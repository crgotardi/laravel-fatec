@extends('layouts/app')
@section('title','Livros')
@section('content')
    <main>
        <div class="container my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Editar</h1>
            </div>
            <form action="/livros" method="post">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar Livro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{empty(old('nome')) ? $livro->nome : old('nome')}}">
                            @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="genero_id" value="{{empty(old('genero_id')) ? $livro->genero_id : old('genero_id')}}">
                                <option selected>Gênero</option>
                                @foreach($generos as $g)
                                <option value={{$g->id}}>{{$g->nome}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('genero'))
                            <p class="text-danger">{{$errors->first('genero')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="autor_id" value="{{empty(old('autor_id')) ? $livro->autor_id : old('autor_id')}}">>
                                <option selected>Autor</option>
                                @foreach($autores as $a)
                                <option value={{$a->id}}>{{$a->nome}} {{$a->sobrenome}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('autor_id'))
                            <p class="text-danger">{{$errors->first('autor_id')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição" value="{{empty(old('descricao')) ? $livro->descricao : old('descricao')}}">></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="ano" placeholder="Ano" aria-label="Ano" value="{{empty(old('ano')) ? $livro->ano : old('ano')}}">>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="edicao" placeholder="Edição" aria-label="Edição" value="{{empty(old('edicao')) ? $livro->edicao : old('edicao')}}">>
                            @if($errors->has('edicao'))
                            <p class="text-danger">{{$errors->first('edicao')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="editora_id" value="{{empty(old('editora')) ? $livro->editora : old('editora')}}">>
                                <option selected>Editora</option>
                                @foreach($editoras as $e)
                                <option value={{$e->id}}>{{$e->nome}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('editora'))
                            <p class="text-danger">{{$errors->first('editora')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </main>
@endsection
