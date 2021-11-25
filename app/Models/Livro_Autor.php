<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro_Autor extends Model
{
    use HasFactory;

    protected $table = 'autor_livro';
    protected $fillable = ['livro_id', 'autor_id'];
}
