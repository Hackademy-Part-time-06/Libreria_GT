<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        //mi valida i dati, se sono tutto ok continua
      return [
            "title" => "required|string",
            "pages" => "required|numeric",
            "author_id" => "required",
            "year" => "required",
            "image" => 'mimes:jpeg,jpg,png',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Deve essere obbligatorio',
            'name.string' => 'Deve essere di tipo stringa',
            'name.max' => 'Deve essere di almeno 255 caratteri',
            'author_id.required' => 'Autore deve essere obbligatorio',
            'image.mimes' => 'Inserisci immagine nei formati corretti'
        ];
    }
}
