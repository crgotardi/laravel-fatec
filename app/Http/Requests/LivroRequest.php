<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
            'edicao' => 'required',
            'editora_id' => 'required',
            'genero_id' => 'required',
            'autor_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50 caractéres',
            'edicao.required' => 'Edição é obrigatório',
            'editora_id.required' => 'Editora é obrigatório',
            'genero_id.required' => 'Gênero é obrigatório',
            'autor_id.required' => 'Autor é obrigatório',
        ];
    }
}
