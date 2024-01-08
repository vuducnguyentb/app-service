<?php

namespace App\Http\Requests\ProductCategory;

use Illuminate\Foundation\Http\FormRequest;

class ProductCategoryUpdateRequest extends FormRequest
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
            'name'=>[
                'required',
                'max:255'
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans("Danh mục buộc phải nhập."),
            'name.max' => trans("Danh mục tối đã 255 ký tự."),
        ];
    }
}
