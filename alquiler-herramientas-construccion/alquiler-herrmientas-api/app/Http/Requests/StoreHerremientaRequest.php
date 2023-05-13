<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHerremientaRequest extends FormRequest
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
        return [
            'marca' => ['required'],
            'nombre' => ['required'],
            'modelo' => ['required','nullable'],
            'precio' => ['required', 'numeric'],
            'descripcion' => ['required']
        ];
    }
}
