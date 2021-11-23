@extends('layouts/app')
@section('title','Empréstimos')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Editar</h1>
            </div>
            <form action="/emprestimos/{{$emprestimo->id}}" method="post">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Editar empréstimo</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="usuario_id" value="{{empty(old('usuario_id')) ? $emprestimo->usuario_id : old('usuario_id')}}">
                                <option selected>Cliente</option>
                                @foreach($clientes as $c)
                                <option value={{$c->id}}>{{$c->nome}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('nome'))
                            <p class="text-danger">{{$errors->first('nome')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="livro_id" value="{{empty(old('livro_id')) ? $emprestimo->livro_id : old('livro_id')}}">
                                <option selected>Livro</option>
                                @foreach($livros as $l)
                                <option value={{$l->id}}>{{$l->nome}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('livro_id'))
                            <p class="text-danger">{{$errors->first('livro_id')}}</p>
                            @endif
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Data Retirada" name="data_retirada" aria-label="Data Retirada" value="{{empty(old('data_retirada')) ? $emprestimo->data_retirada : old('data_retirada')}}">
                            @if($errors->has('data_retirada'))
                            <p class="text-danger">{{$errors->first('data_retirada')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-dark">Editar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
