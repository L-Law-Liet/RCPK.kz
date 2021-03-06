<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'company_name' => 'required|max:191',
            'fullname' => 'required|max:191',
            'position' => 'required|max:191',
            'phone' => 'required|max:191',
            'email' => 'required|email|max:191|unique:users,email',
            'password' => 'required|max:191|min:6|confirmed',
        ];
    }
}
