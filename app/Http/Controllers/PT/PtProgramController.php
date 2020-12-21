<?php

namespace App\Http\Controllers\PT;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePtProgram;

use App\Models\Hymnal;
use App\Models\Package;
use App\Models\Position;
use App\Models\PtProgram;
use App\Models\Services;
use App\Models\Staff;
use App\Models\TeachingSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PtProgramController extends Controller
{

    public function index()
    {
        $ptProgram = PtProgram::all();
        return view('admin.pt_program.index', compact('ptProgram'));
    }

    public function training()
    {
        $monday = Carbon::now()->startOfWeek();
        $tuesday = $monday->copy()->addDay();
        $wednesday = $tuesday->copy()->addDay();
        $Thursday = $wednesday->copy()->addDay();
        $Friday = $Thursday->copy()->addDay();
        $Saturday = $Friday->copy()->addDay();
        $Sunday = $Saturday->copy()->endOfWeek();
        $hymnal = Hymnal::all();
        $ptProgram = PtProgram::where('start_date', '<', $monday)->orWhere('end_date', '<', $Sunday)->get();
        $teachingSchedule1 = TeachingSchedule::get();
        $teachingSchedule = collect($teachingSchedule1)->sortBy('date')->values();
        return view('admin.pt_program.training',
            compact('ptProgram', 'wednesday', 'monday', 'tuesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'hymnal', 'ptProgram','teachingSchedule'));
    }

    public function add()
    {
        $customer = Services::where('status', 'Kèm PT')->get();
        $pt = Position::where('name', 'Huấn luyện viên')->get();
        $package = Package::all();
        return view('admin.pt_program.add', compact('customer', 'pt', 'package'));

    }

    public function getPackage($id)
    {
        $Get_package = Package::where('id', $id)->get();
        return response()->json($Get_package);
    }

    public function edit($id)
    {
        $customer = Services::where('status', 'Kèm PT')->get();
        $pt = Position::where('name', 'Huấn luyện viên')->get();
        $package = Package::all();
        $ptProgram = PtProgram::where('id', $id)->get();
        return view('admin.pt_program.edit', compact( 'customer', 'pt', 'package', 'ptProgram'));
    }

    public function store(ValidatePtProgram $request)
    {
        DB::beginTransaction();
        $ptProgram = PtProgram::create([
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
        DB::commit();
        Alert()->success('Thành công', 'Bạn đã đăng ký PT thành công');
        return redirect()->route('ptProgram.index');
    }

    public function update(ValidatePtProgram $request, $id)
    {
        DB::beginTransaction();
        PtProgram::where('id', $id)->update([
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

        DB::commit();
        Alert()->success('Thành công', 'Bạn đã cập nhật thành công');
        return redirect()->route('ptProgram.index');
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        DB::table('ptprogram_trainings')->where('id_ptprogram', $id)->delete();
        PtProgram::find($id)->delete();
        DB::commit();
        Alert()->success('Thành công', 'Bạn đã cập nhật thành công');
        return redirect()->route('ptProgram.index');
    }

    public function profilePt()
    {
        $pt = Position::where('name', 'Huấn luyện viên')->get();
//        foreach ($pt as $pts) {
//            foreach ($pts->staff as $staffs) {
//                $id_pt = $staffs->id;
//            }
//        }
//        $customer_pt = PtProgram::has('customer')->where('pt_id', $id_pt)->count();
        return view('admin.pt_program.pt', compact('pt', 'customer_pt'));
    }

}
