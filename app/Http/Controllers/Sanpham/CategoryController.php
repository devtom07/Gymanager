<?php

namespace App\Http\Controllers\Sanpham;
use App\Http\Requests\ValidateAddPosition;
use App\Http\Requests\ValidateEditPosition;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
 
    public function index()
    {
        $listCategory = Category::all();
        return view('admin.san-pham.the-loai.index',['listCategory'=>$listCategory]);

    }

    public function create()
    {
        $listCategory = Category::all();
        return view('admin.san-pham.the-loai.add',['listCategory'=>$listCategory]);
    }

    public function store(ValidateAddPosition $request)
    {
        $category = new Category;
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
        $listCategory = Category::find($id);
        return view('admin.san-pham.the-loai.edit',['listCategory'=>$listCategory]);
    }

    public function update(ValidateEditPosition $request, $id)
    {
        $category = new Category;
        $arr['name'] = $request->name;
        $category->where('id', $id)->update($arr);
        Alert()->success('Thành công','bạn đã sửa chức vụ thành công');
        return redirect()->route('listcategory');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        Alert()->success('thành công','bạn đã xóa chức vụ thành công');
        return back();
    }
}