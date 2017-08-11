<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RendezVousRequest extends FormRequest
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
            //
            'nombre_passger'=>'required|numeric|min:1|max:6',
            'address_depart'=>'required|min:4|max:20',
            'address_arrive'=>'required|min:4|max:20',

        ];
    }
}
