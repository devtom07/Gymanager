<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEditProduct extends FormRequest
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
            'cate_id' => 'required',
            'price' => 'required',
            'quantity' => 'required|numeric|min:0',
            'detail' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'avatar.image' => 'Phải nhập đúng định dạng file ảnh',
            'quantity.numeric' => 'chỉ được phép nhập số',
            'quantity.min' => 'số nhỏ nhất là 0',

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên nhân viên',
            'cate_id' => 'Loại sản phẩm',
            'avatar' => 'Ảnh sản phẩm',
            'price' => 'Giá sản phẩm',
            'quantity' => 'Số lượng sản phẩm',
            'detail' => 'Chi tiết',
        ];
    }
}