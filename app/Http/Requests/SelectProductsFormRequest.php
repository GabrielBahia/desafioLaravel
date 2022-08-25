<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectProductsFormRequest extends FormRequest
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
            'produtoSelecionado' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'produtoSelecionado.required' => 'Selecione pelo menos um produto para criar o estoque',
        ];
    }

}
