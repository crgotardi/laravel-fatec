<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
            'sobrenome' => 'required|max:50',
            'rg' => 'required|max:9',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50 caractéres',
            'sobrenome.required' => 'Sobrenome é obrigatório',
            'sobrenome.max' => 'Sobrenome máximo 50 caractéres',
            'rg.required' => 'RG é obrigatório',
            'rg.max' => 'RG máximo 9 caractéres',
        ];
    }
}
