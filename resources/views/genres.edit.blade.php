@extends('layouts/app')
@section('title','Clientes')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Gêneros</h1>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#shelfModal">
                    Novo gênero
                </button>
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <form action="/generos" method="post">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar gênero</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{empty(old('nome')) ? $genero->nome : old('nome')}}">
                            @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
            </form>
            </table>
        </div>
    </main>
@endsection
