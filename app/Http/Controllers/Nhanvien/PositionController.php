<?php

namespace App\Http\Controllers\Nhanvien;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddPosition;
use App\Http\Requests\ValidateEditPosition;
use App\Http\Controllers\Controller;
use App\Models\Position;
use RealRashid\SweetAlert\Facades\Alert;

class PositionController extends Controller
{
 
    public function index()
    {
        $listPosition = Position::all();
        return view('admin.nhanvien.chucvu.index',['listPosition'=>$listPosition]);

    }
    public function create()
    {
        $listPosition = Position::all();
        return view('admin.nhanvien.chucvu.add',['listPosition'=>$listPosition]);
    }
    public function store(ValidateAddPosition $request)
    {
        $position = new Position;
        $position->name = $request->name;
        $position->save();
        Alert()->success('thành công','bạn đã thêm chức vụ thành công');
        return redirect()->route('listposition');
    }

    public function show($id)
    {
      
    }

    public function edit($id)
    {
        $listPosition = Position::find($id);
        return view('admin.nhanvien.chucvu.edit',['listPosition'=>$listPosition]);
    }
    public function update(ValidateEditPosition $request, $id)
    {
             $position = new Position;
             $arr['name'] = $request->name;
             $position->where('id', $id)->update($arr);
        Alert()->success('Thành công','bạn đã sửa chức vụ thành công');
        return redirect()->action('Nhanvien\PositionController@index');
    }
    public function destroy($id)
    {
        Position::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa chức vụ thành công');
        return back();
    }
}
