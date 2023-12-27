<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>[
                'required',
                'max:255'
            ],
            'slug'=>[
                'required',
                'max:255'
            ]
        ];
    }

    public function messages()
    {
        return [
            'title.required' => trans("Tiêu đề buộc phải nhập."),
            'title.max' => trans("Tiêu đề tối đã 255 ký tự."),
            'slug.required' => trans("Slug buộc phải nhập."),
            'slug.max' => trans("Slug tối đã 255 ký tự."),
        ];
    }
}
