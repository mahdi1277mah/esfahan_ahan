<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        if ($this->method()=='POST'){
            return [

                'title'=>'required',
                'type'=>'required',
                'body'=>'required',
                'slug'=>'required',
                'images'=>'required|mimes:jpeg,png,bmp',
                'price'=>'required',
                'tags'=>'required',
            ];
        }
        return [
            'title'=>'required',
            'type'=>'required',
            'body'=>'required',
            'slug'=>'required',
            'price'=>'required',
            'tags'=>'required',
        ];
    }
}
