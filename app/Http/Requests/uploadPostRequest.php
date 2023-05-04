<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uploadPostRequest extends FormRequest
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
           // 'title'=>'required|alpha|unique:posts,title',
           // 'image' => 'required|image|mimes:jpeg,png,jpg,webp', // only 2MB is allowed
           // 'author'=>'required|alpha',
           // 'content'=>'required|string|min:20|max:255',
        ];
    }
    public function message()
    {
        return [
           // 'title.required'=>'the title is required.',
           // 'title.unique'=>'The title is reserved.',
           // 'title.alpha'=>'the title may only contain letters.',
            //
            

        ];
    }
}
