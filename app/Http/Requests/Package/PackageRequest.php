<?php

namespace App\Http\Requests\Package;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
                'name'=>['required','min:4','max:50','not_regex:([!@#$%^&*])'],
                'date_start'=>'required|date|after:today',
                'price'=>'required',
                'date_end'=>'required|date|after:date_start',
                'desc'=>'required'
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute không được để trống',
            'name.min'=>'Tên không được nhỏ hơn 4 kí tự',
            'name.max'=>'Tên không được lớn hơn 50 kí tự',
            'name.not_regex'=>'Tên không được có kí tự',
            'date_start.after'=>'Ngày bắt đầu phải sau ngày hôm nay',
            'date_end.after'=>'không được trước thời gian bắt đầu',
        ];
    }
    public function attributes(){
        return[
            'name'=>'Tên',
            'date_start'=>'ngày bắt đầu',
            'price'=>'Giá',
            'date_end'=>'ngày kết thúc',
            'desc'=>'mô tả'
        ];
    }
}
