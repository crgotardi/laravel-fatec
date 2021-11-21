<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\EstanteController;
use \App\Http\Controllers\LivroController;
use \App\Http\Controllers\UsuarioController;

Route::resource('', HomeController::class);

Route::resource('/emprestimos', EstanteController::class);

Route::resource('/livros', LivroController::class);

Route::resource('/clientes', UsuarioController::class);
