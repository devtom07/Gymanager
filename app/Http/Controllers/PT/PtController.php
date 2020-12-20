<?php

namespace App\Http\Controllers\PT;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateFormStudentSchedule;
use App\Models\Customer;
use App\Models\Hymnal;
use App\Models\PtProgram;
use App\Models\Services;
use App\Models\TeachingSchedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PtController extends Controller
{
    public function index(){
       $user_id = Auth::user()->id;
       $pt = User::where('id',$user_id)->get();
       foreach ($pt as $pts){
          $pt_id = $pts->staff->id;
       }
       $customer_pt = PtProgram::where('pt_id',$pt_id)->get();
       foreach ($customer_pt as $customers){
           $customer_id = $customers->id;
       }
       $count_customer = PtProgram::has('customer')->where('pt_id',$pt_id)->count();
        return view('admin.pt.index',compact('pt','customer_pt','count_customer'));
    }
    public function addPt(){

        return view('admin.pt.add');

    }
    public function teaching(){

        return view('admin.pt.training');
    }
    public function addTrainingPt($id){
        $hymnal = Hymnal::all();
         return view('admin.pt.addTraining',compact('id','hymnal'));
    }

    public function ptStudent($id){
       $teachingSchedule = TeachingSchedule::where('id_customer',$id)->get();
        return view('admin.pt.student',compact('teachingSchedule','id'));

    }
    public function storeTrainingPt(ValidateFormStudentSchedule $request,$id){
        $user_id = Auth::user()->id;
        $pt = User::where('id',$user_id)->get();
        foreach ($pt as $pts){
            $pt_id = $pts->staff->id;
        }
        DB::beginTransaction();
        TeachingSchedule::create([
             'id_hymnal' => $request->hymnal,
            'date' => $request->date,
            'id_customer' => $id,
            'id_pt' => $pt_id
        ]);
        DB::commit();
        Alert()->success('Thành công', 'Thêm lịch học thành công');
        return redirect()->route('pt.ptStudent');
    }
    public function edit(){

    }
}
