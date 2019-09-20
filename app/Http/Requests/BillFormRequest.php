<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillFormRequest extends FormRequest
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
            'email'=> 'required|email',
            'phone' => 'required|min:1',
            'address' => 'required|min:1',
            'payment' => 'required|min:1',
        ];
    }
}
