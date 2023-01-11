<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolutionFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'description' => [
                'nullable',
                'string'
            ],
            'image' => [
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'b1' => [
                'nullable',
                'string'
            ],
            'b2' => [
                'nullable',
                'string'
            ],
            'b3' => [
                'nullable',
                'string'
            ],
            'b4' => [
                'nullable',
                'string'
            ],
            'b5' => [
                'nullable',
                'string'
            ],
            'b6' => [
                'nullable',
                'string'
            ],
            'b7' => [
                'nullable',
                'string'
            ],
            'b8' => [
                'nullable',
                'string'
            ],
            'b9' => [
                'nullable',
                'string'
            ],
            'b10' => [
                'nullable',
                'string'
            ],
            'b11' => [
                'nullable',
                'string'
            ],
            'b12' => [
                'nullable',
                'string'
            ],
            'b13' => [
                'nullable',
                'string'
            ],
        ];
    }
}
