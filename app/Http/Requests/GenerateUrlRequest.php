<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenerateUrlRequest extends FormRequest
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
            'full_url' => 'required|string|url',
        ];
    }

    public function messages()
    {
        return [
            'full_url.required' => '網址欄不能為空！',
            'full_url.string' => '網址格式錯誤！',
            'full_url.url' => '網址格式錯誤！',
        ];
    }
}
