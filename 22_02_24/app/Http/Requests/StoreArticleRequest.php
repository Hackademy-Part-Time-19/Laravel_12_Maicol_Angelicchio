<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|max:10',
            'category_id'=>'required',
            'description'=>'required|max:255'
        ];
    }

    public function messages(){
        return[
            'title.required'=>'Inserire nome articolo',
            'title.max'=>'Articolo può essere di massimo 10 caratteri',
            'category_id.required'=>'Inserire categoria',
            'title.max'=>'Categoria può essere di massimo 10 caratteri',
            'description.required'=>'Inserire descrizione',
            'description.max'=>'Descrizione può essere massimo di 255 caratteri'
        ];
    }
}
