<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class editUserRequest extends FormRequest
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
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {

        $rules = [
            'name' => 'required',
            'email' => ['required', Rule::unique('users')->ignore($this->user->id)],
        ];
        if (!is_null($request->password)) {
            $rules['password'] = [
                'required',
                'string',
                'min:8',
            ];
        }
        return $rules;
    }
}
