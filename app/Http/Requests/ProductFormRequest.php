<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name' => 'required|min:1',
            'image' => 'required|min:1',
            'description' => 'required|min:1',
            'unit_price' => 'required|min:1',
            'promotion_price' => 'required|min:1',
            'id_category' => 'required|min:1',
        ];
    }
}
