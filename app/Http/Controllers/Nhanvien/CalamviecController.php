<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateFormAddStaff;
use App\Http\Requests\ValidateFormEditStaff;
use App\Models\WorkSift;
use Illuminate\Http\Request;

class CalamviecController extends Controller
{
    public function index()
    {
        $listWorkSift = WorkSift::all();
        return view('admin.nhanvien.Calamviec.index', compact('listWorkSift'));
    }
    public function create()
    {

        return view('admin.nhanvien.Calamviec.add');
    }

    public function store(ValidateFormAddStaff $request)
    {
        $work_sifts = new WorkSift;
        $work_sifts->name = $request->name;
        $work_sifts->hour_start = $request->hour_start;
        $work_sifts->hour_start_center = $request->hour_start_center;
        $work_sifts->hour_end_center = $request->hour_end_center;
        $work_sifts->hour_end = $request->hour_end;
        $work_sifts->status = $request->status;
        $work_sifts->save();
        return redirect('calamviec');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data['work_sift'] = WorkSift::find($id);
        return view('admin.nhanvien.Calamviec.edit', $data);
    }

    public function update(ValidateFormEditStaff $request, $id)

    {
        $work_sifts = new WorkSift;
        $arr['name'] = $request->name;
        $arr['hour_start'] = $request->hour_start;
        $arr['hour_start_center'] = $request->hour_start_center;
        $arr['hour_end_center'] = $request->hour_end_center;
        $arr['hour_end'] = $request->hour_end;
        $arr['status'] = $request->status;
        $work_sifts::where('id', $id)->update($arr);
        return redirect('calamviec');
    }

    public function destroy($id)
    {
        WorkSift::destroy($id);
        return back();
    }
}
