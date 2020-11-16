<?php

namespace App\Http\Controllers\Nhanvien;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkSiftStaff;
use App\Models\WorkSift;
use App\Http\Requests\WorkStaffRequest;

class WorkSiftStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_staff = WorkSiftStaff::with('workSift', 'Staff')->orderBy('id', 'DESC')->get(); 
        // DB::table('work_sift_staffs')
        // ->join('work_sifts','work_sift_staffs.work_sift_id', '=', 'work_sifts.id')
        // ->orderBy('work_sift_staffs.id','desc')
        // ->get();
        return view('admin.nhanvien.calamviec-nhanvien.index', ['work_staffs'=>$work_staff]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $work_sift['data'] = WorkSift::all();
        $staff['dataStaff'] = Staff::all();
        return view('admin.nhanvien.calamviec-nhanvien.add',$work_sift,$staff);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkStaffRequest $request)
    {
        //
        $work_staff = new WorkSiftStaff;
        $work_staff->work_sift_id = $request->work_sift_id;
        $work_staff->date_start = $request->date_start;
        $work_staff->date_end = $request->date_end;
        $work_staff->staff_id = $request->staff_id;
        $work_staff->cycle = $request->cycle;
        $work_staff->work_schedule_name = $request->work_schedule_name;
        $work_staff->save();
        // return back();
        return redirect()->route('calamviecnhanvien')->with('thongbao', 'thanh cong');

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
        $work_staff=WorkSiftStaff::find($id);
        $work_sift['data']=WorkSift::all();
        return  view('admin.nhanvien.calamviec-nhanvien.edit',['work_staff'=>$work_staff],$work_sift);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WorkStaffRequest $request, $id)
    {
        //
        $work_staff=WorkSiftStaff::find($id);
        $work_staff->work_sift_id = $request->work_sift_id;
        $work_staff->date_start = $request->date_start;
        $work_staff->date_end = $request->date_end;
        $work_staff->staff_id = $request->staff_id;
        $work_staff->cycle = $request->cycle;
        $work_staff->work_schedule_name = $request->work_schedule_name;
        $work_staff->update();
        // dd($work_staff);
        return redirect()->route('calamviecnhanvien')->with('thongbao', 'thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $work_staff=WorkSiftStaff::find($id);
        $work_staff->delete();
        return redirect()->route('calamviecnhanvien')->with('thongbao', 'xoa thanh cong');


    }
}
