@extends('layouts/app')
@section('title','Livros')
@section('content')
    <main>
        <div class="container my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Livros</h1>
                <div>
                    <button class="btn btn-dark" id="btnModal" data-bs-toggle="modal" data-bs-target="#shelfModal">
                        Novo livro
                    </button>
                </div>
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Edição</th>
                    <th scope="col">Editora</th>
                    <th scope="col" class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $l)
                <tr>
                <th scope="row">{{ $l->id }}</th>
                    <td>{{ $l->nome }}</td>
                    <td>{{ $l->genero->nome }}</td>
                    <td>{{ $l->autor }}</td>
                    <td>{{ $l->descricao }}</td>
                    <td>{{ $l->ano }}</td>
                    <td>{{ $l->edicao }}</td>
                    <td>{{ $l->editora->nome }}</td>
                    <td>
                        <form action="/livros/{{$l->id}}" method="post" class="text-end">
                        <a href="/livros/{{$l->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
                            @csrf
					        @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Excluir" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="shelfModal" tabindex="-1" aria-labelledby="shelfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/livros" method="post">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="shelfModalLabel">Cadastrar Livro</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{old('nome')}}">
                                @if($errors->has('nome'))
                                <p class="text-danger">{{$errors->first('nome')}}</p>
                                @endif
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="genero_id" value="{{old('genero_id')}}">
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
                                <select class="form-select" aria-label="Default select example" name="autor_id" value="{{old('autor_id')}}">
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
                                <textarea class="form-control" rows="3" name="descricao" placeholder="Descrição" value="{{old('descricao')}}"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="ano" placeholder="Ano" aria-label="Ano" value="{{old('ano')}}">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="edicao" placeholder="Edição" aria-label="Edição" value="{{old('edicao')}}">
                                @if($errors->has('edicao'))
                                <p class="text-danger">{{$errors->first('edicao')}}</p>
                                @endif
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example" name="editora_id" value="{{old('editora_id')}}">
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
        </div>
    </div>
    @if ($errors->any())
    <script src="{{ URL::asset('js/openModal.js') }}"></script>
    @endif
@endsection
