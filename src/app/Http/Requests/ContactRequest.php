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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tell' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            ];
    }
    public function messages()
    {
        return [
        'first_name'=> '姓を入力してください',
        'last_name'=> '名を入力してください',
        'gender'=> '性別を選択してください',
        'email'=> 'メールアドレスを入力してください',
        'tell'=> '電話番号を入力してください',
        'address'=> '住所を入力してください',
        'building'=> '住所を入力してください',
        'detail'=> 'お問い合わせの種類を選択してください',
        ];
    }
}
