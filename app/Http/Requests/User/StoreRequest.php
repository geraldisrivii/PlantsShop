<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'login'=>'min:6|max:20|unique:users',
            'password'=>["min:8", "regex:/[A-Za-z]/", "regex:/[0-9]/"],
            'confirm_password'=>'same:password',
        ];
    }
}
