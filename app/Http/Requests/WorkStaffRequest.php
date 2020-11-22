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
            'date_start'=>'required|date',
            'date_end'=>'required|date|after:date_start',
            'cycle'=>'required|min:4|max:10',
            'work_schedule_name'=>'required|min:10|max:30'
        ];
    }
    public function messages(){
        return[
            'required'=>':attribute không được để trống',
            'date_end.after'=>'không được trước thời gian bắt đầu',
            'cycle.min'=>'chu kì không dưới 4 kí tự',
            'cycle.max'=>' chu kì không quá 10 kí tự',
            'work_schedule_name.min'=>'tên lịch làm việc không dưới 10 kí tự',
            'work_schedule_name.min'=>'tên lịch làm việc không quá 30 kí tự',
        ];
    }
    public function attribute(){
        return[
            'date_start'=>'ngày bắt đầu',
            'date_end'=>'ngày kết thúc',
            'cycle'=>'chu kì',
            'work_schedule_name'=>'tên lịch làm việc'
        ];
    }
}
