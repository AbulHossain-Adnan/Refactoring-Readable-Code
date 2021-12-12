<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentpostRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name'=>'required',
            'age' =>'required',
            'roll'=>'required',
            'phone'=>'required',
        ];
    }
}
