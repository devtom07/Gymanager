<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateEditPosts extends FormRequest
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
            'start_posts'=>'required',
            'avatar' => 'required|image|mimes:jpeg,png,jpg',
            'title'=>'required',
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
            'start_posts'=>'Ngày viết bài',
            'avatar' => 'Ảnh bài viết',
            'title' => 'Tiêu đề bài viết',
            'detail' => 'Chi tiết',
        ];
    }
}