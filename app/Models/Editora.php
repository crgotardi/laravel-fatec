<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;

    protected $fillable = ['nome','local'];

    public function livros() {
    	return $this->HasMany('App\Models\Livro', 'editora_id');
    }
}
