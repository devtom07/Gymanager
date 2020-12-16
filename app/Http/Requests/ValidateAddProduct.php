<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateAddProduct extends FormRequest
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
            'name' => 'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'price' => 'required',
            'sale-price' => 'required',
            'short_title' => 'required',
            'detail' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'avatar.image' => 'Phải nhập đúng định dạng file ảnh',
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'avatar' => 'Ảnh đại diện',
            'price' => 'giá',
            'sale_price' => 'Giá khuyễn mãi',
            'short_title' => 'Tiêu đề',
            'detail' => 'Chi tiết',
        ];
    }
}