<?php

namespace App\Http\Controllers\Nhanvien;

use App\Http\Controllers\Controller;
use App\Models\WorkSift;
use App\Http\Requests\ValidateFormAddStaff;
use App\Http\Requests\ValidateFormEditStaff;

class CalamviecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['listworkSift'] = WorkSift::all();
        return view('admin.nhanvien.calamviec.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        return view('admin.nhanvien.calamviec.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['work_sift'] = WorkSift::find($id);
        return view('admin.nhanvien.calamviec.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        WorkSift::destroy($id);
        return back();
    }
}
