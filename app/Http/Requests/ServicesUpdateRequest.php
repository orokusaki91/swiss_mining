<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesUpdateRequest extends FormRequest
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
            'body_en'   => 'required|min:3',
            'body_de'   => 'required|min:3',
            'body_fr'   => 'required|min:3',
            'body_it'   => 'required|min:3',
            'body_es'   => 'required|min:3'
        ];
    }
}
