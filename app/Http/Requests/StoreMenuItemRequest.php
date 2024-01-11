<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMenuItemRequest extends FormRequest
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
        //    'menu_id' => 'required',
            'item_id' => [
                'required',
                Rule::unique('menu_items')->where(function ($query) {
                    return $query->where('menu_id', request('menu_id'));
                }),
            ],
            'per_qty' => 'required|numeric',
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
