<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'name' => 'required|unique:items',
            'measurement_id' => 'required:items',
            //'ration_category_id' => 'required:items',
            'ration_sub_category_id' => 'required:items',
            'item_category_id' => 'required:items',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name field is required.',
            'measurement_id.required' => 'The measurement field is required.',
            'ration_sub_category_id.unique' => 'This ration category field is required.',
            'item_category_id.unique' => 'This item category field is required.',
        ];
    }
}
