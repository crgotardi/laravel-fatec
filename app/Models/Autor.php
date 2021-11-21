<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $fillable = ['nome','sobrenome'];

    public function livros() {
    	return $this->belongsToMany('App\Models\Livro');
    }
}
