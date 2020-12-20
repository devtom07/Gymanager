<?php

namespace App\Http\Controllers\Sanpham;
use App\Http\Requests\ValidateAddPosition;
use App\Http\Requests\ValidateEditPosition;
use App\Http\Controllers\Controller;
use App\Models\Cate_posts;

class CategoryController extends Controller
{
 
    public function index()
    {
        $listCategory = Cate_posts::all();
        return view('admin.san-pham.the-loai.index',['listCategory'=>$listCategory]);

    }

    public function create()
    {
        $listCategory = Cate_posts::all();
        return view('admin.san-pham.the-loai.add',['listCategory'=>$listCategory]);
    }

    public function store(ValidateAddPosition $request)
    {
        $category = new Cate_posts;
        $category->name = $request->name;
        $category->save();
        Alert()->success('thành công','bạn đã thêm chức vụ thành công');
        return redirect()->route('listcategory');
    }

    public function show($id)
    {
      
    }

    public function edit($id)
    {
        $listCategory = Cate_posts::find($id);
        return view('admin.san-pham.the-loai.edit',['listCategory'=>$listCategory]);
    }

    public function update(ValidateEditPosition $request, $id)
    {
        $category = new Cate_posts;
        $arr['name'] = $request->name;
        $category->where('id', $id)->update($arr);
        Alert()->success('Thành công','bạn đã sửa chức vụ thành công');
        return redirect()->route('listcategory');
    }

    public function destroy($id)
    {
        Cate_posts::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa chức vụ thành công');
        return back();
    }
}
