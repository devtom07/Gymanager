<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Controllers\Controller;
use Gloudemans\Tests\Shoppingcart\Fixtures\ProductModel;
use Illuminate\Http\Request;
use App\Models\Revenue;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;


class CartController extends Controller
{
    public function index()
    {
        $listRevenue = Revenue::all();

        return view('admin.san-pham.doanh-thu.index', ['listRevenue' => $listRevenue]);
    }

    public function create()
    {
        return view('admin.san-pham.doanh-thu.add');
    }

    public function store(Request $request)
    {
        $cart = Cart::content();
        $cartCount = Cart::count();
        foreach ($cart as $carts) {
            $cart_id = $carts->id;

            $cartPrice = $carts->qty * $carts->price;
            $revenues = new Revenue;
            $revenues->id_product = $carts->id;
            $revenues->name = $carts->name;
            $revenues->price = $carts->price;
            $revenues->quantity = $carts->qty;
            $revenues->total = $cartPrice;
            $revenues->save();
        }
        $product = Product::where('id', $carts->id)->first();
        $Cart =  Cart::content($cart_id);
        foreach ($Cart as $Carts){
          $qtyCarts = $Carts->qty;
        }

        $product_qty = $product->quantity - $qtyCarts;
        Product::where('id', $carts->id)->update([
            'quantity' => $product_qty
        ]);
        Cart::destroy();

        Alert()->success('Thành công', 'Bạn đã bán phẩm thành công');
        return redirect()->action('Sanpham\CartController@index');
    }
}