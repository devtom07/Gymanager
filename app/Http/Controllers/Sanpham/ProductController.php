<?php

namespace App\Http\Controllers\Sanpham;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateAddProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests\ValidateEditProduct;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $listProducts = Product::paginate(5);
        $listCategory = Category::all();
        if ($request->ajax()) {
            return view('admin.san-pham.list-san-pham.index', ['listProducts' => $listProducts, 'listCategory' => $listCategory]);
        }
        return view('admin.san-pham.list-san-pham.pagination', compact('listProducts'));
    }
    public function create()
    {
        $listCategory = Category::all();
        return view('admin.san-pham.list-san-pham.add', ['listCategory' => $listCategory]);
    }
    public function store(ValidateAddProduct $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('product', $new_image);
        $products = new Product;
        $products->name = $request->name;
        $products->cate_id = $request->cate_id;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->detail = $request->detail;
        $products['avatar'] = $new_image;
        $products->save();
        Alert()->success('Thành công', 'Bạn đã thêm sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }

    public function show()
    {

        $totalPrice = Cart::priceTotal();
        $cartContent = Cart::content();
        return view('admin.san-pham.list-san-pham.sanpham_ban', compact('cartContent', 'totalPrice'));
    }
    public function edit($id)
    {
        $listProducts = Product::find($id);
        $listCategory = Category::all();
        return view('admin.san-pham.list-san-pham.edit', ['listProducts' => $listProducts, 'listCategory' => $listCategory]);
    }
    public function update(ValidateEditProduct $request, $id)
    {
        $get_image = $request->file('avatar');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image =  $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('product', $new_image);
            $products = new Product;
            $arr['name'] = $request->name;
            $arr['cate_id'] = $request->cate_id;
            $arr['price'] = $request->price;
            $arr['quantity'] = $request->quantity;
            $arr['detail'] = $request->detail;
            $arr['avatar'] = $new_image;
            $products->where('id', $id)->update($arr);
        } else {
            $products = new Product;
            $arr['name'] = $request->name;
            $arr['cate_id'] = $request->cate_id;
            $arr['price'] = $request->price;
            $arr['quantity'] = $request->quantity;
            $arr['detail'] = $request->detail;
            $products->where('id', $id)->update($arr);
        }
        Alert()->success('Thành công', 'Bạn đã sửa sản phẩm thành công');
        return redirect()->action('Sanpham\ProductController@index');
    }
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        Alert()->success('Thành công', 'Bạn đã xóa sản phẩm thành công');
        return back();
    }

    public function addCart($id)
    {
        $product = Product::find($id);
        if ($product->sale_price == 0) {
            Cart::add([
                'id' => $id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->price,
                'weight' => 10,
                'options' => ['image' => $product->avatar]
            ]);
        } else {
            Cart::add([
                'id' => $id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->price - $product->sale_price,
                'weight' => 10,
                'options' => ['image' => $product->avatar]
            ]);
        }
        $count = [
            'countCart' => Cart::count(),
            'contentCart' => Cart::content(),
            'total' => Cart::priceTotal(),
        ];
        Alert()->success('Thành công', 'Bạn đã thêm vào giỏ hàng thành công');
        return redirect()->route('listproduct');
        // return view('admin.san-pham.list-san-pham.sanpham_ban', ['count' => $count]);
    }
    // public function deleteCart($id)
    // {
    //     Cart::destroy($id);
    //     $count = [
    //         'countCart' => Cart::count(),
    //         'contentCart' => Cart::content(),
    //         'total' => Cart::priceTotal()
    //     ];
    //     Alert()->success('Thành công', 'Bạn đã xóa sản phẩm thành công');
    //     return back();
    //     // return response()->json($count);
    // }
    public function UpdateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
        // return back();
    }
    // public function update_sp($id, $qty)
    // {
    //     Cart::update_sp($id, $qty);
    //     $data = [
    //         'totalPriceCart' => Cart::get($id),
    //         'total' => Cart::priceTotal()
    //     ];
    //     return response()->json($data);
    // }
    public function DeleteCart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        Alert()->success('Thành công', 'Bạn đã xóa sản phẩm khỏi giỏ hàng thành công');

        return back();
    }
}