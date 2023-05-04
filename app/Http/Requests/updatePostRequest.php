<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePostRequest extends FormRequest
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
            'title'=>'required|alpha',
            'image' => 'required|image|max:2048|mimes:jpeg,png,jpg,webp', // only 2MB is max-size allowed
            'author'=>'required|alpha',
            'content'=>'required|string|min:20|max:255',

        ];
    }
    public function message()
    {
        return [
            'title.required'=>'the title is required.',
            'title.alpha'=>'the title may only contain letters.',
        ];
    }
}
