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
        $products = new Product;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->short_title = $request->short_title;
        $products->detail = $request->detail;
        $products['avatar'] = $new_image;
        $products->save();
        var_dump($products);

        Alert()->success('thành công','bạn đã thêm sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
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
             $products = new Product;
             $arr['name'] = $request->name;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['short_title'] = $request->short_title;
             $arr['detail'] = $request->detail;
             $products['avatar'] = $new_image;
             $products->where('id', $id)->update($arr);
         }else{
             $products = new Product;
             $arr['name'] = $request->name;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['short_title'] = $request->short_title;
             $arr['detail'] = $request->detail;
             $products->where('id', $id)->update($arr);
         }
        Alert()->success('Thành công','bạn đã sửa sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        Alert()->success('thành công','bạn đã xóa sản phẩm thành công');
        return back();
    }
}
