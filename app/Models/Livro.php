<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome','ano','edicao','editora_id', 'descricao', 'genero_id', 'autor_id', 'quantidade'];

    public function editora() {
    	return $this->BelongsTo('App\Models\Editora', 'editora_id', 'id');
    }

    public function genero() {
    	return $this->BelongsTo('App\Models\Genero', 'genero_id', 'id');
    }

    public function estante() {
    	return $this->hasOne('App\Models\Estante', 'estante_id');
    }

    public function autores() {
    	return $this->belongsToMany('App\Models\Autor');
    }
}
