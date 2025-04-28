<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            "name_first" => "required|string|max:225",
            "name_last" => "required|string|max:225",
            "gender" => "required",
            "email" => "required|email|max:255",
            "tel" => "required|digits_between:10,11",
            "address" => "required|string|max:255",
            "building" => "string|max:255|nullable",
            "detail" => "required|string|max:120",
        ];
    }

    public function messages()
    {
        return [
            "name_first.required" => "姓を入力してください",
            "name_last.required" => "名を入力してください",
            "gender.required" => "性別を選択してください",
            "email.required" => "メールアドレスを入力してください",
            "email.email" => "メールアドレスの形式が正しくありません",
            "tel.required" => "電話番号を入力してください",
            "address.required" => "住所を入力してください",
            "detail.required" => "お問い合わせ内容を入力してください",
        ];
        
    }
}
