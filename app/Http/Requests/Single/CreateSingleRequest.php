<?php

namespace App\Http\Requests\Single;

use Illuminate\Foundation\Http\FormRequest;

class CreateSingleRequest extends FormRequest
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
            'title' => 'required|unique:sub_posts',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:3048',
        ];
    }
}
