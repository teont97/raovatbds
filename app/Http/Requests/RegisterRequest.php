<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
					'fullname' => 'required',
					'content' => 'unique:users|required',
					'file-upload' => 'required',
					'confirm_Password'=>'required',
			];
		}
		public function messages () {
			return [
				'fullname.required'     => 'Xin Vui Lòng Nhập Tên Tài Khoản  ',
				'email.unique'       => 'Email Này Đã Đăng Ký Hệ Thống',
				'email.required'     => 'Xin Vui Lòng Nhập Email',
				'password.required'       => 'Xin Vui Lòng Nhập Mật Khẩu  ',
				'confirm_Password.required'     => 'Xin Vui Lòng Nhập Xác Nhận Mật Khẩu',
			];
		}
}
