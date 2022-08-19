<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3'],
            'sabor' => ['required', 'min:3'],
            'preco' => ['required', 'min:1'],
            'descricao' => ['required', 'min:3'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório',
            'nome.min' => 'O campo nome precisa de pelo menos :min caracteres',
            'sabor.required' => 'O campo sabor é obrigatório',
            'sabor.min' => 'O campo sabor precisa de pelo menos :min caracteres',
            'preco.required' => 'O campo preço é obrigatório',
            'preco.min' => 'O campo preço precisa de pelo menos :min caracteres',
            'descricao.required' => 'O campo descrição é obrigatório',
            'descricao.min' => 'O campo descrição precisa de pelo menos :min caracteres',
        ];
    }
}
