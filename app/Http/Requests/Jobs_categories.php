<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Requests;

class Jobs_categories extends FormRequest
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
      'name'=> 'required|string |unique : jobs_categories',
      'active'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'اسم الوظيفة مطلوب',
            'active.required'=>'حالة تفعيل الوظيفه مطلوب'
             ];   
}
}
