<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
           'nome'=>'required|min:2'
        ];
    }

    public function messages(){
      'nome.required'=>'O campo nome eh obrigatorio',
      'required|min:2'=>'O campo deve ter no  minimo dois caracteres'
    }
}
