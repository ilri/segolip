<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'date' => 'required',
            'researcher' => 'required',
            'investigator' => 'required',
            'department' => 'required',
            'institution' => 'required',
            'billing' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'zipcode' => 'required',
            'phone' => 'required',
            'fax_number' => 'required',
            'email' => 'required|string|email|max:255',
            'alter_email' => 'required|string|email|max:255',
            'form' => 'required|mimes:xlsx,xls',
            'image'=>'mimes:png,jpg,jpeg,zip',
        ];
    }
}
