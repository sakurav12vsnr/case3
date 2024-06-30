<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemsRequest extends FormRequest
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
            'price' => ['required', 'integer'],
            'description' => ['required', 'min:20'],
            'img_url' => ['required'],
            'category' => ['required'],
            'condition' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '商品名は必須です',
            'price.required' => '金額の入力は必須です',
            'description.required' => '商品説明は必須です',
            'description.min' => '商品説明は最低20文字です',
            'img_url.required' => 'パスワードは必須です',
            'password.min' => 'パスワードは最低8文字です',
            'password.max' => 'パスワードは最大191文字です',
        ];
    }
}
