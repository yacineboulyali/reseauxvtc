<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'username'=>'alpha|max:20|min:3|required',
            'email'=>'email|max:60|min:8|required',
            'nom'=>'alpha|max:12|min:3|required',
            'prenom'=>'alpha|max:12|min:3|required',
            'langue'=>'alpha|max:12|min:3|required',
            'address'=>'max:30|min:6|required',
            'code_postal'=>'min:3|required',
            'photo'=>'required',
        ];
    }
}
