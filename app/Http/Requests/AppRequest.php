<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
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
        return ['category_id' => 'required|integer',
        'name' => "required|string|min:1|max:100",
        'price' => "required|integer|min:1",
        "image" => "image"
        ];
    }
    public function messages()
    {
        return [
            'required' => 'El campo es obligatorio',
            'category_id.required' => 'Debe seleccionar una marca',
            'integer' => 'El campo :attribute debe ser numerico',
            'min' => 'El campo :attribute debe tener al menos :min caracteres',
            'max' => 'El campo :attribute no bebe superar :max caracteres',
            'min' => 'El campo :attribute debe ser mayor a :min',
            'max' => 'El campo :attribute debe ser menor a :max',
            'image' => 'La imagen debe ser de formato .jpg, .png, etc'
        ];
    }
}
