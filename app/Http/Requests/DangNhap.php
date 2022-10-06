<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhap extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|unique:nguoidung',
            'password' => 'required|min:6|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn phải nhập email',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Bạn phải nhập mật khẩu',
            'password.min' => 'Password tối thiểu 6 kí tự',
            'password.same' => 'password và password nhập lại không khớp',
            'password_confirmation.min' => 'password nhập lại tối thiểu 6 kí tự',
         
        ];
    }
}
