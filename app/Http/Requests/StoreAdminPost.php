<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:3|max:12',
            'password'=>'required|min:6|max:16',
//            以后添加
//            'captcha'=>'required|captcha'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'用户名不能为空',
            'name.min'=>'用户名不能少于3位',
            'name.max'=>'用户名不能多于12位',
            'password.required'=>'密码不能为空',
            'password.min'=>'密码不能少于六位',
            'password.max'=>'密码不能多于16位',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '验证码不正确'
        ];
    }
}
