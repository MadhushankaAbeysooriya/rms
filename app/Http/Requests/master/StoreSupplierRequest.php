<?php

namespace App\Http\Requests\master;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            'name' => 'required',
            'primary_contact' => 'required|unique:suppliers,primary_contact|numeric',
            'secondary_contact' => 'required|unique:suppliers,secondary_contact|numeric',
            'address' => 'required',
            'reg_no' => 'required|unique:suppliers,reg_no',
            'vat_no' => 'required',
            'status' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The Name field is required.',
            'name.unique' => 'This Name is already exists',
        ];
    }

}
