<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormAddCustomer extends FormRequest
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
            'name_customer' => 'required',
            'phone' => 'required|min:10|max:11|regex:[^[0-9\-\+]{9,15}$]',
            'email' => 'required|unique:users,email,' . $this->id,
            'customRadio' => 'required',
            'note' => 'required|min:5',
            'address' => 'required|min:5',
            'contract_code' => 'required|min:5',
            'identity_card' => 'required|min:9',
            'level' => 'required',
            'name' => 'required:name',
            'id_package' => 'required:id_package',
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
            'name_customer.required' => 'Không được phép để trống !',
            'phone.required' => 'Số điện thoại không được để trống !',
            'phone.min' => 'Số điện thoại không được ít hơn 10 số',
            'phone.max' => 'Số điện thoại không được nhiều hơn 11 số',
            'phone.regex' => 'Số điện thoại không đúng định dạng',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email sai định dạng! Ví dụ: abc@gmail.com',
            'email.unique' => 'Email da duoc su dung',
            'customRadio.required' => 'Không được phép để trống !',
            'note.required' => 'Không được phép để trống !',
            'note.min' => 'Tối thiểu là 5 kí tự',
            'contract_code.required' => 'Không được phép để trống !',
            'contract_code.min' => 'Tối thiểu là 5 kí tự',
            'identity_card.required' => 'Không được phép để trống',
            'identity_card.min' => 'Chứng minh thư nhập không đúng định dạng !',
            'level.required' => 'Không được phép để trống',
            'address.required' => 'Không được phép để trống !',
            'address.min' => 'Tối thiểu là 5 kí tự!',
            'required' => ':attribute không được để trống',
            'end_date.after' => ' Ngày kết thúc không được trước ngày bắt đầu',
            'start_date.after' => ' Ngày bắt đầu không được trước ngày hôm nay',
            'active_date.after' => ' Ngày kích hoạt không để trước ngày bắt đầu',
            'active_date.before' => ' Ngày kích hoạt không được để sau ngày kết thúc',
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
