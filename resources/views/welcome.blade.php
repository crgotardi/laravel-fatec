@extends('layouts/app')
@section('title','Biblioteca')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto p-5 rounded-2 bg-dark bg-gradient">
            <h1 class="text-white">Bem vindo(a) à biblioteca</h1>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/emprestimos" class="btn btn-secondary mt-3">Gerenciar empréstimos</a>
                </div>
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/clientes" type="button" class="btn btn-secondary mt-3">Gerenciar clientes</a>
                </div>
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/livros" type="button" class="btn btn-secondary mt-3">Gerenciar livros</a>
                </div>
            </div>
            <div class="row">
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/autores" class="btn btn-secondary mt-3">Gerenciar autores</a>
                </div>
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/generos" type="button" class="btn btn-secondary mt-3">Gerenciar gêneros</a>
                </div>
                <div class="col text-center border border-dark m-3 p-5">
                    <a href="/editoras" type="button" class="btn btn-secondary mt-3">Gerenciar editoras</a>
                </div>
            </div>
        </div>
    </main>
@endsection
