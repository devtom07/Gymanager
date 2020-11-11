<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormEditStaff extends FormRequest
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
            'name' => 'required|unique:work_sifts,name',
            'hour_start' => 'required:work_sifts,hour_start ',
            'hour_start_center' => 'required:work_sifts,hour_start_center',
            'hour_end_center' => 'required:work_sifts,hour_end_center',
            'hour_end' => 'required:work_sifts,hour_end',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'name.unique' => 'Ca này đã có !'

        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ca',
            'hour_start' => 'Giờ bắt đầu',
            'hour_start_center' => 'Giờ nghỉ trưa',
            'hour_end_center' => 'Kết thúc giờ nghỉ trưa',
            'hour_end' => 'Giờ kết thúc',

        ];
    }
}
