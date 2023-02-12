<?php

namespace App\Http\Requests;

use App\Rules\UpperCaseName;
use App\Rules\VadidatePhone;
use Illuminate\Foundation\Http\FormRequest;

class inserRequest extends FormRequest
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
            'email' => 'required|email',
           'password' => 'required',
           'name' => ['required',new UpperCaseName()],
           'address' => 'required',
           'phone' => ['required',new VadidatePhone()],
           'state' => 'required|in:Dhaka,Rajshahi,Ragpur',
           'zip' => 'required',
           'condition' => 'accepted',
        ];
    }
    public function messages()
    {
        [
            'email.required' => 'Email Have Been Required',
            'password.required' => 'Password Have Been Required',
            'name.required' => 'Name Have Been Required',
            'address.required' => 'Address Have Been Required',
            'phone.required' => 'Phone Have Been Required',
            'state.required' => 'State Have Been Required',
            'zip.required' => 'Zip Have Been Required',
            'condition.accepted' => 'Condition Have Been Accepted',
        ];
    }
}
