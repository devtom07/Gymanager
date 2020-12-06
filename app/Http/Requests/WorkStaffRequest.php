<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkStaffRequest extends FormRequest
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
            //
            'date_start'=>'required|date|after:today',
            'date_end'=>'required|date|after:date_start',
            'cycle'=>'required',
            'work_schedule_name'=>['required','max:50','min:4', 'not_regex:([!@#$%^&*])']
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute không được để trống',
            'date_start.after'=>'Ngày bắt đầu phải sau ngày hôm nay',
            'date_end.after'=>'không được trước thời gian bắt đầu',
            // 'cycle.min'=>'chu kì không dưới 4 kí tự',
            // 'cycle.max'=>' chu kì không quá 10 kí tự',
            'work_schedule_name.min'=>'tên lịch làm việc không dưới 4 kí tự',
            'work_schedule_name.max'=>'tên lịch làm việc không quá 50 kí tự',
            'work_schedule_name.not_regex'=>'tên lịch làm việc không được để kí tự đặc biệt',
        ];
    }
    public function attributes(){
        return[
            'date_start'=>'ngày bắt đầu',
            'date_end'=>'ngày kết thúc',
            'cycle'=>'chu kì',
            'work_schedule_name'=>'tên lịch làm việc'
        ];
    }
}
