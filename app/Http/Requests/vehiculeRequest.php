<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vehiculeRequest extends FormRequest
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
            'modele' =>'required|min:2|max:20',
            'anne' =>'required|numeric',
            'matriculation' =>'required|max:20|min:3',
        ];
    }
}
