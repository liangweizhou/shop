<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
        $rules=[
            'name'=>'required|min:2|max:15',
            'age'=>'required|integer',
            'sex'=>'required|integer',
            ];
        return $rules;
    }
    protected function formatErrors(Validator $validator){
        return $validator->errors()->all();
    }
    public function messages()
    {
        return ['name.required'=>'不能为空',
                 'name.min'=>'字数不能少于2',
                 'name.max'=>'字数不能大于15',
                 'age.required'=>'年龄不能为空',
                 'age.integer'=>'数字',
                 'sex.required'=>'年龄不能为空'
            ];
    }
}
