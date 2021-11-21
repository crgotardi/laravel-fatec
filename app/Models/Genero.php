<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function livros() {
    	return $this->HasMany('App\Models\Livro', 'genero_id');
    }
}
