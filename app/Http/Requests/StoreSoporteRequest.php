<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSoporteRequest extends FormRequest
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
        //     public $fillable=['solicitante','descripcion','costo','cantidad'];

        return [
            'solicitante' => 'required',
            'descripcion' => 'required',
            'costo' => 'gt:0|required|numeric|min:0|not_in:0',
            'cantidad' => 'gt:0|required|numeric|min:0|not_in:0',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => 'Este campo :attribute es requerido',
            'gt' => 'Este campo :attribute debe ser mayor a :value'
        ];
    }
}
