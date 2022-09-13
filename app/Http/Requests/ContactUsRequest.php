<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'full_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits_between:11,12|numeric',
            'message' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'full_name.required'  => 'وارد کردن نام و نام خانوادگی الزامی است',
            'mobile.required'  => 'وارد کردن موبایل الزامی است',
            'message.required'  => 'وارد کردن پیام الزامی است',
            'email.email'  => 'ساختار ایمیل و تعداد کارکتر های آن رعایت شود',
            'mobile.digits_between:11,12' => 'موبایل باید حداقل 11 رقم باشد',
        ];
    }
}
