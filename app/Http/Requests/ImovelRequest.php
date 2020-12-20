<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
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
    public function messages()
    {
        return [

            'descricao.required' => 'Preencha este campo',
            'descricao.max' => 'Preencha este campo com até 150 caracteres',
            'logradouroEndereco.required' => 'Preencha este campo',
            'bairroEndereco.required'=> 'Preencha este campo',
            'numeroEndereco.required' => 'Preencha este campo',
            'numeroEndereco.numeric' => 'Preencha este campo com um número',
            'cepEndereco.required' => 'Preencha este campo',
            'cidadeEndereco.required' => 'Preencha este campo',
            'bairroEndereco.required' => 'Preencha este campo',
            'preco.required' => 'Preencha este campo',
            'preco.numeric' => 'Preencha este campo com um número',
            'qtdQuartos.required' => 'Preencha este campo',
            'qtdQuartos.numeric' => 'Preencha este campo com um número',
            'tipo.required' => 'Preencha este campo',
            'finalidade.required' => 'Preencha este campo',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'descricao' => 'required|max:150',
            'logradouroEndereco' => 'required',
            'bairroEndereco' =>'required',
            'numeroEndereco' =>'required | numeric',
            'cepEndereco' =>'required',
            'cidadeEndereco' =>'required',
            'bairroEndereco' =>'required',
            'preco' =>'required | numeric',
            'qtdQuartos' =>'required | numeric',
            'tipo' =>'required',
            'finalidade' =>'required',
        ];
    }
}
