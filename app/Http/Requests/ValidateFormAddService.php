<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormAddService extends FormRequest
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
            'name' => 'required:name',
            'id_package' => 'required:id_package',
            'id_customer' => 'required:id_customer ',
            'start_date' => 'required:start_date|after:yesterday',
            'end_date' => 'required:end_date|after:start_date',
            'active_date' => 'required:active_date|after:start_date|before:end_date',
            'total_package' => 'required:total_package',
            'customers_pay' => 'required:customers_pay',
            'pay_method' => 'required:pay_method',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'end_date.after'=>' Ngày kết thúc không được trước ngày bắt đầu',
            'start_date.after'=>' Ngày bắt đầu không được trước ngày hôm nay',
            'active_date.after'=>' Ngày kích hoạt không để trước ngày bắt đầu',
            'active_date.before'=>' Ngày kích hoạt không được để sau ngày kết thúc',
            'name.unique' => 'Tên này đã tồn tại'
 
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Tên',
            'id_package' => 'Gói cước',
            'id_customer' => 'Tên khách hàng',
            'start_date' => 'Ngày bắt đầu',
            'end_date' => 'Ngày kết thúc',
            'active_date' => 'Ngày kích hoạt',
            'total_package' => 'Tổng tiền',
            'customers_pay' => 'Số tiền khách trả',
            'pay_method' => 'Phương thức thanh toán',

        ];
    }
}