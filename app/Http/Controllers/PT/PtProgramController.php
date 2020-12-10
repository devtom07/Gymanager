<?php

namespace App\Http\Controllers\PT;

use App\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePtProgram;
use App\Models\Package;
use App\Models\PtProgram;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PtProgramController extends Controller
{
    public function index(){

         return view('admin.pt_program.index');
    }

    public function add(){

     $customer = Customer::all();
     $pt = Staff::where('position','2')->get();
     $package = Package::all();
        return view('admin.pt_program.add',compact('customer','pt','package'));

    }
    public function getPackage($id){
        $Get_package = Package::where('id',$id)->get();
        return response()->json($Get_package);
    }
    public function edit(){
        return view('admin.pt_program.edit');

    }
    public function store(ValidatePtProgram $request){

        for ($i=1; $i<count($request->schedule);$i++){
            $schedule[] = [
                $request->schedule[$i],
            ];
        }
    DB::beginTransaction();
        PtProgram::create([
            'customer_id' => $request->customer,
            'day_contract' => $request->day_contract,
            'number_sessions' => $request->number_sessions,
            'total ' => $request->total,
            'money_paid' => $request->money_paid,
            'start_date' => $request->start_date,
            'status' => $request->status,
            'pt_id' => $request->pt,
            'contract_code' => $request->contract_code,
            'time' => $request->time,
            'pay' => $request->pay,
            'bank_account' => $request->bank_account,
            'still_owe' => $request->still_owe,
            'end_date' => $request->end_date,
            'package_id' => $request->package,
            'schedule' =>$schedule
        ]);
        DB::commit();
    }
    public function update(){

    }
    public function delete(){

    }

}
