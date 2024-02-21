<?php

namespace App\Http\Requests\Admin\User;

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
            'name'=>'required|string',
            'email' => 'required|string|email|unique:users',
            'role'=>'required|integer',

         //   'password'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field need to be filled',
            'name.string' => 'name must be a string ',
            'email.required' => 'This field need to be filled',
            'email.string' => 'e-mail must be a string',
            'email.email' => 'your email must match the format: "mail@some.domain" ',
            'email.unique' => 'user with this e-mail already exists',

          /*  'password.required' => 'This field need to be filled',
            'password.string' => 'password must be a string',*/
        ];
    }
}
