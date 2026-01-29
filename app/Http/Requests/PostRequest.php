<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titulo' => 'required|min:5',
            'contenido'=>'required|min:50',
        ];
    }
    public function messages(){
        return[
            'titulo.required' => 'Ponle titulo anda...',
            'titulo.min' => 'Debe tener mas de 5 caracteres',
            'contenido.required' => 'Escribe algo va...',
            'contenido.min' => 'Tiene que tener mas de 50 caracteres',
        ];
    }
}
