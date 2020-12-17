<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePtProgram extends FormRequest
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
            'customer' => 'required',
            'day_contract' => 'required',
            'number_sessions' => 'required|numeric|min:0',
            'total' => 'required',
            'money_paid' => 'required|numeric|min:0',
            'start_date' => 'required',
            'status' => 'required',
            'pt' => 'required',
            'contract_code' => 'required|numeric|min:0',
            'time' => 'required|numeric|min:0',
            'customRadio' => 'required',
            'still_owe' => 'required',
            'end_date' => 'required|after:start_date',
            'package' => 'required',
            'schedule' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'customer.required' => 'Không được phép để trống !',
            'day_contract.required' => 'Không được phép để trống !',
            'number_sessions.required' => 'Không được phép để trống !',
            'number_sessions.numeric' => 'Chỉ được phép nhập số',
            'number_sessions.min' => 'Số nhỏ nhất là 0',
            'total.required' => 'Không được phép để trống !',
            'money_paid.required' => 'Không được phép để trống',
            'money_paid.numeric' => 'Chỉ được phép nhập số',
            'money_paid.min' => 'Số nhỏ nhất là 0',
            'start_date.required' => 'Không được phép để trống !',
            'status.required' => 'Không được phép để trống !',
            'pt.required' => 'Không được phép để trống !',
            'contract_code.required' => 'Không được phép để trống !',
            'contract_code.numeric' => 'Phải là số !',
            'contract_code.min' => 'Chỉ được phép nhỏ hơn 0 ',
            'time.required' => 'Không được phép để trống !',
            'customRadio.required' => 'Không được phép để trống !',
            'still_owe.required' => 'Không được phép để trống !',
            'end_date.required' => 'Không được phép để trống !',
            'end_date.after' => 'Ngày kết thúc phải sau ngày bắt đầu',
            'package' => 'Không được phép để trống !',
            'schedule.required' => 'Không được phép để trống !',
            'time.min' => 'Chỉ được phép nhỏ hơn 0'
        ];
    }
}
