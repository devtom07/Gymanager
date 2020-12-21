<?php

namespace App\Http\Controllers\Nhanvien;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkSiftStaff;
use App\Models\WorkSift;
use App\Models\Staff;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\WorkStaffRequest;

class WorkSiftStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $work_staff = WorkSiftStaff::with('workSift', 'Staff')->orderBy('id', 'DESC')->get();


        $work_sift = WorkSift::paginate(5);
        if ($request->ajax()) {
            return view('admin.nhanvien.calamviec-nhanvien.index', compact('work_sift', 'work_staff'));
        }
        return view('admin.nhanvien.calamviec-nhanvien.pagination', ['work_staffs' => $work_staff, 'work_sift' => $work_sift]);
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
        return view('admin.nhanvien.calamviec-nhanvien.add', $work_sift, $staff);
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
        Alert()->success('Thông báo!', 'Bạn thêm thành công!');
        return redirect()->route('calamviecnhanvien');
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
        $work_staff = WorkSiftStaff::find($id);
        $dataStaff = Staff::all();
        $work_sift['data'] = WorkSift::all();
        return  view('admin.nhanvien.calamviec-nhanvien.edit', ['work_staff' => $work_staff, 'dataStaff' => $dataStaff], $work_sift);
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
        $work_staff = WorkSiftStaff::find($id);
        $work_staff->work_sift_id = $request->work_sift_id;
        $work_staff->date_start = $request->date_start;
        $work_staff->date_end = $request->date_end;
        $work_staff->staff_id = $request->staff_id;
        $work_staff->cycle = $request->cycle;
        $work_staff->work_schedule_name = $request->work_schedule_name;
        $work_staff->update();
        Alert()->success('Thông báo!', 'Bạn sửa thành công!');
        return redirect()->route('calamviecnhanvien');
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
        $work_staff = WorkSiftStaff::where('id',$id)->first();
        $work_staff->delete();
        Alert()->success('Thông báo!', 'Xóa thêm thành công!');
        return redirect()->route('calamviecnhanvien');
    }
}