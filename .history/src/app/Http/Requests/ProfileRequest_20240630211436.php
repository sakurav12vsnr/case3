<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required'],
            'postcode' => ['required', 'integer'],
            'address' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ユーザー名は必須です',
            'postcode.required' => '郵便番号の入力は必須です',
            'address.required' => '商品説明は必須です',
            'description.min' => '商品説明は最低20文字です',
            'img_url.required' => '商品画像は必須です',
            'category.required' => 'カテゴリーの選択は必須です',
            'condition.required' => '商品の状態の選択は必須です',
        ];
    }
}
