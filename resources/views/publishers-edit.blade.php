@extends('layouts/app')
@section('title','Clientes')
@section('content')
    <main>
        <div class="container text-center my-3 mx-auto">
            <div class="header my-5 d-flex justify-content-between align-items-center">
                <h1>Editoras</h1>
            </div>
            <form action="/editoras/{{$editora->id}}" method="post">
            @csrf
            @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="shelfModalLabel">Editar editora</h5>
                </div>
                <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" name="nome" placeholder="Nome" aria-label="Nome" value="{{empty(old('nome')) ? $editora->nome : old('nome')}}">
                                @if($errors->has('nome'))
                                <p class="text-danger">{{$errors->first('nome')}}</p>
                                @endif
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="local" placeholder="Local" aria-label="Local" value="{{empty(old('local')) ? $editora->local : old('local')}}">
                                @if($errors->has('local'))
                                <p class="text-danger">{{$errors->first('local')}}</p>
                                @endif
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark">Editar</button>
                </div>
            </form>
            </table>
        </div>
    </main>
@endsection
