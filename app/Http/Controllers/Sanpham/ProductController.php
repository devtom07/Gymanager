<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddProduct;
use App\Http\Requests\ValidateEditProduct;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $listProducts = Product::all();
        return view('admin.product.index',['listProducts'=>$listProducts]);

    }
    public function create()
    {
        return view('admin.product.add');
    }
    public function store(ValidateAddProduct $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('product',$new_image);
        $staffs = new Product;
        $staffs->name = $request->name;
        $staffs->price = $request->price;
        $staffs->sale_price = $request->sale_price;
        $staffs->short_title = $request->short_title;
        $staffs->detail = $request->detail;
        $staffs->wage = $request->wage;
        $staffs['avatar'] = $new_image;
        $staffs->save();
        Alert()->success('thành công','bạn đã thêm nhân viên thành công');
        return redirect()->route('listproduct');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $listProducts = Product::find($id);
        return view('admin.product.edit',['listProducts'=>$listProducts]);
    }
    public function update(ValidateEditProduct $request, $id)
    {
         $get_image = $request->file('avatar');
         if($get_image){
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
             $get_image->move('product',$new_image);
             $staffs = new Product;
             $arr['name'] = $request->name;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['short_title'] = $request->short_title;
             $arr['detail'] = $request->detail;
             $staffs['avatar'] = $new_image;
             $staffs->where('id', $id)->update($arr);
         }else{
             $staffs = new Product;
             $arr['name'] = $request->name;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['short_title'] = $request->short_title;
             $arr['detail'] = $request->detail;
             $staffs->where('id', $id)->update($arr);
         }
        Alert()->success('Thành công','bạn đã sửa nhân viên thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        Alert()->success('thành công','bạn đã xóa nhân viên thành công');
        return back();
    }
}
