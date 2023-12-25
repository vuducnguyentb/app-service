<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Redirector;

class StoreCategoryRequest extends FormRequest
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
                'required'
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans("Danh mục cha buộc phải nhập."),
        ];
    }

    public function setRedirector(Redirector $redirector)
    {
        if(!empty($this->messages())){
            foreach ($this->messages() as $message){
                notify()->error($message);
            }
            $this->redirector = $redirector;

            return $this;
        }
//        $this->redirector = $redirector;
//
//        return $this;
    }
}
