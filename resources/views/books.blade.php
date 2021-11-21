@extends('layouts/app')
@section('title','Livros')
@section('content')
    <main>
        <div class="container my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Livros</h1>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#shelfModal">
                    Novo livro
                </button>
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
                    <th scope="col">Ações</th>
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
                        <button type="button" class="btn btn-secondary btn-sm">Editar</button>
                        <button type="button" class="btn btn-danger btn-sm">Excluir</button>
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
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar Livro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nome" aria-label="Nome">
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Gênero</option>
                                    @foreach($generos as $g)
                                    <option value={{$g->id}}>{{$g->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Autor</option>
                                    @foreach($autores as $a)
                                    <option value={{$a->id}}>{{$a->nome}} {{$a->sobrenome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <textarea class="form-control" rows="3" placeholder="Descrição"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Ano" aria-label="Ano">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Edição" aria-label="Edição">
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Editora</option>
                                    @foreach($editoras as $e)
                                    <option value={{$e->id}}>{{$e->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
