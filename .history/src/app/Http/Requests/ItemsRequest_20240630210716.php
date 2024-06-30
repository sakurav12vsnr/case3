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
            'img_url' => ['required']
        ];
    }
}



return [
            'email' => ['required', 'email', 'string', 'max:191'],
            'password' => ['required', 'min:8', 'max:191'],
        ];