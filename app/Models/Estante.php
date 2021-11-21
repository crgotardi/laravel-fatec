<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    use HasFactory;

    protected $fillable = ['usuario_id','livro_id','data_retirada','data_devolucao_prevista', 'data_devolucao', 'status'];

    public function usuario() {
    	return $this->belongsTo('App\Models\Usuario', 'usuario_id');
    }

    public function livro() {
    	return $this->belongsTo('App\Models\Livro', 'livro_id');
    }
}
