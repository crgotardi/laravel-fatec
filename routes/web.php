<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EstanteController;
use \App\Http\Controllers\LivroController;
use \App\Http\Controllers\UsuarioController;
use \App\Http\Controllers\AutorController;
use \App\Http\Controllers\GeneroController;
use \App\Http\Controllers\EditoraController;

Route::resource('', HomeController::class);

Route::resource('/emprestimos', EstanteController::class);

Route::resource('/livros', LivroController::class);

Route::resource('/clientes', UsuarioController::class);

Route::resource('/autores', AutorController::class);

Route::resource('/generos', GeneroController::class);

Route::resource('/editoras', EditoraController::class);
