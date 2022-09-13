<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'full_name' => 'required',
            'mobile' => 'required|digits_between:11,12|numeric',
            'nationality_code' => 'required|min:10|numeric',
            'address' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'height.required' => 'وارد کردن طول الزامی است',
            'weight.required'  => 'وارد کردن عرض الزامی است',
            'full_name.required'  => 'وارد کردن نام و نام خانوادگی الزامی است',
            'mobile.required'  => 'وارد کردن موبایل الزامی است',
            'nationality_code.required'  => 'وارد کردن کد ملی الزامی است',
            'address.required'  => 'وارد کردن آدرس الزامی است',
            'height.numeric' => 'طول باید عدد باشد',
            'weight.numeric' => 'عرض باید عدد باشد',
            'mobile.digits_between:1,10' => 'موبایل باید حداقل 11 رقم باشد',
            'nationality_code.numeric' => 'کد ملی باید عدد باشد',
            'nationality_code.max' => 'موبایل باید حداقل 10 رقم باشد',
        ];
    }
}
