<?php

namespace App\Http\Controllers\Dichvu;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Packages;
use App\Customer;
use App\Http\Requests\ValidateFormAddService;
use App\Http\Requests\ValidateFormEditService;

class ServiceController extends Controller
{

    public function index()
    {
        
        $listService = Service::all();
        return view('admin.service.index',compact('listService'));
    }


    public function create()
    {
        $staff = Staff::where('title','PT')->get();
        $data_packages = Packages::all();
         $data = Customer::all();
        return view('admin.service.add',compact('data','data_packages','staff'));
    }


    public function store(ValidateFormAddService $request)
    {
        $service = new Service;
        $service->id_package = $request->id_package;
        $service->id_customer = $request->id_customer;
        $service->id_coach = $request->id_coach;
        $service->start_date = $request->start_date;
        $service->end_date = $request->end_date;
        $service->active_date = $request->active_date;
        $service->total_package = $request->total_package;
        $service->customers_pay = $request->customers_pay;
        $service->pay_method = $request->pay_method;
        $service->save();
        Alert()->success('Thành công','Thêm ca làm việc thành công');
        return redirect()->route('service');
    
     

    }


    public function show($id)
    {
        //
        
    }


    public function edit($id)
    {
       
        $customers ['data'] = Customer::all();
        $data['service'] = Service::find($id);
        return view('admin.service.edit', $data,$customers);
    }


    public function update(ValidateFormEditService $request, $id)
    {
        $service = new Service;
        $arr['id_package'] = $request->id_package;
        $arr['id_customer'] = $request->id_customer;
        $arr['id_coach'] = $request->id_coach;
        $arr['start_date'] = $request->start_date;
        $arr['end_date'] = $request->end_date;
        $arr['active_date'] = $request->active_date;
        $arr['total_package'] = $request->total_package;
        $arr['customers_pay'] = $request->customers_pay;
        $arr['pay_method'] = $request->pay_method;
        $service::where('id', $id)->update($arr);
        Alert()->success('Thành công','Cập nhật ca làm việc thành công');
        return redirect()->route('service');
    }

    public function destroy($id)
  {
    Service::destroy($id);
    Alert()->success('Thành công','Xóa ca làm việc thành công');
    return redirect()->route('service'); 
  }
}