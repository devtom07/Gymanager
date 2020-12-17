<?php

namespace App\Http\Controllers\PT;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePtProgram;
use App\Models\Package;
use App\Models\PtProgram;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class PtProgramController extends Controller
{
    public function index()
    {
        $weekMap = [
            0 => 'Thứ 2',
            1 => 'Thứ 3',
            2 => 'Thứ 4',
            3 => 'Thứ 5',
            4 => 'Thứ 6',
            5 => 'Thứ 7',
            6 => 'Chủ nhật',
        ];
        $dayOfTheWeek = Carbon::now()->dayOfWeek;
        $weekday = $weekMap[$dayOfTheWeek];
        $day = Carbon::now();
        $ptProgram = PtProgram::all();
        return view('admin.pt_program.index',compact('ptProgram','weekday','dayOfTheWeek','day'));
    }

    public function add()
    {
        $schedule = DB::table('trainings')->get();
        $customer = Customer::all();
        $pt = Staff::where('position', '2')->get();
        $package = Package::all();
        return view('admin.pt_program.add', compact('customer', 'pt', 'package', 'schedule'));

    }

    public function getPackage($id)
    {
        $Get_package = Package::where('id', $id)->get();
        return response()->json($Get_package);
    }

    public function edit()
    {
        return view('admin.pt_program.edit');

    }

    public function store(ValidatePtProgram $request)
    {

        $schedule = $request->schedule;
        DB::beginTransaction();
        $ptProgram =  PtProgram::create([
            'customer_id' => $request->customer,
            'day_contract' => $request->day_contract,
            'number_sessions' => $request->number_sessions,
            'total' => $request->total,
            'money_paid' => $request->money_paid,
            'start_date' => $request->start_date,
            'status' => $request->status,
            'pt_id' => $request->pt,
            'contract_code' => $request->contract_code,
            'time' => $request->time,
            'pay' => $request->customRadio,
            'bank_account' => $request->bank_account,
            'still_owe' => $request->still_owe,
            'end_date' => $request->end_date,
            'package_id' => $request->package,
        ]);
        $ptProgram->training()->attach($schedule);

        DB::commit();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
