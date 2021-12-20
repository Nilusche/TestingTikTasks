<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaseRequest extends FormRequest
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
            'title' =>'required',
            'author' =>'required',
            'description' =>'required|max:500',
            'steps' =>'required',
            'expected' =>'required',
            'actual' =>'required',
            'data' =>'required',
            'reference'=>'required'
        ];
    }
}
