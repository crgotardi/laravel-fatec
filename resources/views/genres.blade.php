@extends('layouts/app')
@section('title','Clientes')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Gêneros</h1>
                <button class="btn btn-dark" id="btnModal" data-bs-toggle="modal" data-bs-target="#shelfModal">
                    Novo gênero
                </button>
            </div>
            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col" class="text-end">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($generos as $g)
                <tr>
                    <th scope="row">{{ $g->id }}</th>
                    <td>{{ $g->nome }}<x/td>
                    <td>
                        <form action="/generos/{{$g->id}}" method="post" class="text-end">
                        <a href="/generos/{{$g->id}}/edit" type="button" class="btn btn-secondary btn-sm">Editar</a>
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
                <form action="/generos" method="post">
                @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="shelfModalLabel">Cadastrar gênero</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{old('nome')}}">
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
            </div>
        </div>
    </div>
    @if ($errors->any())
    <script src="{{ URL::asset('js/openModal.js') }}"></script>
    @endif
@endsection
