<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditoraRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
            'local' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50 caractéres',
            'local.required' => 'Local é obrigatório',
        ];
    }
}
