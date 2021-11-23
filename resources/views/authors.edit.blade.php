@extends('layouts/app')
@section('title','Clientes')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Editar</h1>
            </div>
            <form action="/autores" method="post">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar autor(a)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{empty(old('nome')) ? $cliente->nome : old('nome')}}">
                            @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" aria-label="Sobrenome" value="{{empty(old('sobrenome')) ? $cliente->sobrenome : old('sobrenome')}}">
                            @if($errors->has('sobrenome'))
                            <p class="text-danger">{{$errors->first('sobrenome')}}</p>
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
