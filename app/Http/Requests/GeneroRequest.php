<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50 caractéres',
        ];
    }
}
