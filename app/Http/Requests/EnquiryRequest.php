<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
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
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'subject' => 'required',
            'district' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Student Name is required',
            'mobile.required'  => 'Student Mobile number is required',
            'address.required'  => 'Student address is required',
            'gender.required'  => 'Student gender is required',
            'subject.required'  => 'Student interested Subject is required',
            'district.required'  => 'Student District is required',
        ];
    }
}
