<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingValidation extends FormRequest
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
            'NameOnCard' => 'string|required',
            'CreditCardNumber' => 'numeric|required',
            'ExpiryDate' => 'required|max:5',
            'SecurityCode' => 'required|max:3',

        ];
    }
}
