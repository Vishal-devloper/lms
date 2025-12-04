<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryRequest extends FormRequest
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
         $subCategoryId=$this->route('subCategory');
        return [
            'category_id'=>'required|exists:categories,id',
            'name'=>"required|string|max:255|unique:sub_categories,name,{$subCategoryId}",
            'slug'=>"nullable|string|max:255|unique:categories,slug,{$subCategoryId}",
            
        ];
    }
}
