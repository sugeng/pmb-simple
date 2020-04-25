<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registration extends FormRequest
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
            'nama'         => 'required',
            'email'        => 'required|unique:msmhb',
            'mobile_phone' => 'required',
            'departement'  => 'required',
            'nisn'         => 'required',
            'school_name'  => 'required',
        ];
    }
}
