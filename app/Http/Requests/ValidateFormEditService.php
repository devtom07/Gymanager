<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormEditService extends FormRequest
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
            'id_package' => 'required:id_package',
            'id_customer' => 'required:id_customer ',
            'id_coach' => 'required:id_coach',
            'start_date' => 'required:start_date',
            'end_date' => 'required:end_date',
            'active_date' => 'required:active_date',
            'total_package' => 'required:total_package',
            'customers_pay' => 'required:customers_pay',
            'pay_method' => 'required:pay_method',

        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            // 'end_date.after'=>' Ngày kết thúc không được trước ngày bắt đầu',

        ];
    }
    public function attributes()
    {
        return [
            'id_package' => 'Gói cước',
            'id_customer' => 'Tên khách hàng',
            'id_coach' => 'Tên huấn luyện viên',
            'start_date' => 'Ngày bắt đầu',
            'end_date' => 'Ngày kết thúc',
            'active_date' => 'Ngày kích hoạt',
            'total_package' => 'Tổng tiền',
            'customers_pay' => 'Số tiền khách trả',
            'pay_method' => 'Phương thức thanh toán',

        ];
    }
}