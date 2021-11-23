<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneroRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nome' => 'required|max:50',
            'livro_id' => 'required',
            'data_retirada' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome máximo 50 caractéres',
            'data_retirada.required' => 'Data de retirada é obrigatório',
            'livro_id.required' => 'Livro é obrigatório',
        ];
    }
}
