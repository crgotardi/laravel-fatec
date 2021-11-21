@extends('layouts/app')
@section('title','Empréstimos')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Empréstimos</h1>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#shelfModal">
                    Novo empréstimo
                </button>
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Livro</th>
                    <th scope="col">Retirada</th>
                    <th scope="col">Previsão de entrega</th>
                    <th scope="col">Entrega</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emprestimos as $e)
                <tr>
                    <th scope="row">{{$e->id}}</th>
                    <td>{{$e->usuario_id}}</td>
                    <td>{{$e->livro->nome}}</td>
                    <td>{{$e->data_retirada}}</td>
                    <td>{{$e->data_devolucao_prevista}}</td>
                    <td>{{$e->data_devolucao}}</td>
                    <td>{{$e->status}}</td>
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
                    <h5 class="modal-title" id="shelfModalLabel">Cadastrar empréstimo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Cliente</option>
                                    @foreach($clientes as $c)
                                    <option value={{$c->id}}>{{$c->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Livro</option>
                                    @foreach($livros as $l)
                                    <option value={{$l->id}}>{{$l->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Data Retirada" aria-label="Data Retirada">
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
