<?php

namespace App\Http\Controllers\Dichvu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Packages;
use App\Customer;
use App\Http\Requests\ValidateFormAddService;
use App\Http\Requests\ValidateFormEditService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $listService = Service::all();
        return view('admin.service.index',compact('listService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages ['data_packages'] = Packages::all();
        $customers ['data'] = Customer::all();
        return view('admin.service.add',$customers,$packages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $customers ['data'] = Customer::all();
        $data['service'] = Service::find($id);
        return view('admin.service.edit', $data,$customers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
  {
    Service::destroy($id);
    Alert()->success('Thành công','Xóa ca làm việc thành công');
    return redirect()->route('service'); 
  }
}