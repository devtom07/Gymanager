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
            'name'=>['required','min:4','max:50','unique:packages','not_regex:([!@#$%^&*])'],
            'start_date'=>'required|date|after:today',
            'price'=>'required',
            'end_date'=>'required|date|after:date_start',
            'desc'=>'required',
            'free_service'=>'required'
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute không được để trống',
            'name.min'=>'Tên không được nhỏ hơn 4 kí tự',
            'name.unique'=>'Tên không được nhỏ hơn 4 kí tự',
            'name.max'=>'Tên không được lớn hơn 50 kí tự',
            'name.not_regex'=>'Tên không được có kí tự',
            // 'price.integer'=> 'không đúng định dạng',
            'start_date.after'=>'Ngày bắt đầu phải sau ngày hôm nay',
            'end_date.after'=>'không được trước thời gian bắt đầu',
        ];
    }
    public function attributes(){
        return[
            'name'=>'Tên',
            'start_date'=>'ngày bắt đầu',
            'price'=>'Giá',
            'end_date'=>'ngày kết thúc',
            'desc'=>'mô tả',
            'id_catap'=>'ca tap',
            'free_service'=>'dịch vụ miễn phí'
        ];
    }
}
