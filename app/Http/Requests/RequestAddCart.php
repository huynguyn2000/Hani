<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestAddCart extends FormRequest
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
            'type' => 'required',
            'size' => 'required',
            'sugar' => 'required',
            'ice' => 'required',
            'topping' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'type' => 'Trường này không được để trống',
            'size' => 'Trường này không được để trống',
            'sugar' => 'Trường này không được để trống',
            'ice' => 'Trường này không được để trống',
            'topping' => 'Trường này không được để trống',
        ];
    }
}
