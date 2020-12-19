<?php

namespace App\Http\Controllers\KhachHang;

use App\Models\Customer;
use App\Http\Requests\ValidateFormAddCustomer;
use App\Models\Package;
use App\Models\Service;
use App\Models\Staff;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index()
    {
        $date = new \DateTime();
        $customers = Service::all();
        return view('admin.customer.index', compact('customers', 'date'));
    }

    public function add()
    {
        $data_packages = Package::all();
        $data = Customer::all();
        return view('admin.customer.add', compact( 'data_packages', 'data'));
    }

    public function edit($id)
    {
        $data_packages = Package::all();
        $customer = Service::where('id_customer', $id)->get();
        $customer_1 =Customer::all();
        return view('admin.customer.edit', compact('customer','data_packages','customer_1'));
    }

    public function store(ValidateFormAddCustomer $request)
    {
        $code = substr(md5(microtime()), rand(0, 26), 5);
        $customer = new Customer();
        DB::beginTransaction();
        $customer ->fill([
            'code' => $code,
            'name' => $request->name_customer,
            'phone' => $request->phone,
            'level' => $request->level,
            'address' => $request->address,
            'contract_code' => $request->contract_code,
            'email' => $request->email,
            'sex' => $request->customRadio,
            'note' => $request->note,
            'identity_card' => $request->identity_card,
        ]);
        $customer->save();
        $service = new Service();
        $service->name = $request->name;
        $service->id_package = $request->id_package;
        $service->id_customer = $customer->id;
        $service->status = $request->status;
        $service->start_date = $request->start_date;
        $service->end_date = $request->end_date;
        $service->active_date = $request->active_date;
        $service->total_package = $request->total_package;
        $service->customers_pay = $request->customers_pay;
        $service->pay_method = $request->pay_method;
        $service->save();
        DB::commit();
        Alert()->success('Thành công', 'thêm khách hàng thành công');
        return redirect()->route('customer.index');
    }

    public function update(ValidateFormAddCustomer $request, $id)
    {
        $code = substr(md5(microtime()), rand(0, 26), 5);
        $customer = new Customer();
        DB::beginTransaction();
        $customer::where('id',$id)->update([
            'code' => $code,
            'name' => $request->name_customer,
            'phone' => $request->phone,
            'level' => $request->level,
            'address' => $request->address,
            'contract_code' => $request->contract_code,
            'email' => $request->email,
            'sex' => $request->customRadio,
            'note' => $request->note,
            'identity_card' => $request->identity_card,
        ]);
        $service = new Service();
        $arr['name'] = $request->name;
        $arr['id_package'] = $request->id_package;
        $arr['id_customer'] = $id;
        $arr['status'] = $request->status;
        $arr['start_date'] = $request->start_date;
        $arr['end_date'] = $request->end_date;
        $arr['active_date'] = $request->active_date;
        $arr['total_package'] = $request->total_package;
        $arr['customers_pay'] = $request->customers_pay;
        $arr['pay_method'] = $request->pay_method;
        $service::where('id_customer',$id)->update($arr);
        DB::commit();
        Alert()->success('Thành công', 'Cập nhật khách hàng thành công');
        return redirect()->route('customer.index');
    }

    public function destroy($id)
    {
        Service::where('id_customer',$id)->delete();
        Customer::where('id',$id)->delete();
        Alert()->success('Thành công', 'thêm khách hàng thành công');
        return redirect()->route('customer.index');
    }

    public function show($id)
    {
        $customer = Customer::where('id', $id)->get();
        return json_encode(array('data' => $customer));

    }
}
