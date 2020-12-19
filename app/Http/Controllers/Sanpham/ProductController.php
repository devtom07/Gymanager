<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateAddProduct;
use App\Http\Requests\ValidateEditProduct;
use App\Models\Product;
use App\Models\Category;
use Cart;

class ProductController extends Controller
{
    public function index()
    {
        $listProducts = Product::with('category')->get();
        $listCategory = Category::all();
        return view('admin.san-pham.list-san-pham.index',['listProducts'=>$listProducts, 'listCategory'=>$listCategory]);

    }
    public function create()
    {
        $listCategory = Category::all();
        return view('admin.san-pham.list-san-pham.add',['listCategory'=>$listCategory]);
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
        $products->cate_id = $request->cate_id;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->quantity = $request->quantity;
        $products->detail = $request->detail;
        $products['avatar'] = $new_image;
        $products->save();
        Alert()->success('Thành công','Bạn đã thêm sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }

    public function show($id)
    {
        $data_total = Cart::total();
        $listProduct = Product::find($id);
        return view('admin.san-pham.list-san-pham.sanpham_ban',['listProduct'=>$listProduct,'data_total'=>$data_total]);
    }

    public function edit($id)
    {
        $listProducts = Product::find($id);
        $listCategory = Category::all();
        return view('admin.san-pham.list-san-pham.edit',['listProducts'=>$listProducts, 'listCategory'=>$listCategory]);
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
             $arr['cate_id'] = $request->cate_id;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['quantity'] = $request->quantity;
             $arr['detail'] = $request->detail;
             $products['avatar'] = $new_image;
             $products->where('id', $id)->update($arr);
         }else{
             $products = new Product;
             $arr['name'] = $request->name;
             $arr['cate_id'] = $request->cate_id;
             $arr['price'] = $request->price;
             $arr['sale_price'] = $request->sale_price;
             $arr['quantity'] = $request->quantity;
             $arr['detail'] = $request->detail;
             $products->where('id', $id)->update($arr);
         }
        Alert()->success('Thành công','Bạn đã sửa sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }
    public function destroy($id)
    {
        Product::where('id',$id)->delete();
        Alert()->success('Thành công','Bạn đã xóa sản phẩm thành công');
        return back();
    }

public function getUpdateCart(Request $request)
{
    Cart::update($request->rowId, $request->quantity);

}
public function delete($id)
{
    Product::where('id',$id)->delete();
    Alert()->success('Thành công','Bạn đã xóa sản phẩm thành công');
    return back();
}
}