@extends('layouts/app')
@section('title','Clientes')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Clientes</h1>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#shelfModal">
                    Novo cliente
                </button>
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">RG</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $c)
                <tr>
                    <th scope="row">{{ $c->id }}</th>
                    <td>{{ $c->nome }}<x/td>
                    <td>{{ $c->sobrenome }}</td>
                    <td>{{ $c->rg }}</td>
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
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/clientes" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Nome" aria-label="Nome">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Sobenome" aria-label="Sobenome">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="RG" aria-label="RG">
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
