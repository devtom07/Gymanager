<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Revenue;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        }
        for ($i = 1; $i < $cart_id; $i++) {
            $cartPrice = $carts->qty * $carts->price;
            $revenues = new Revenue;
            $revenues->id_product = $carts->id;
            $revenues->name = $carts->name;
            $revenues->price = $carts->price;
            $revenues->quantity = $carts->qty;
            $revenues->total = $cartPrice;
            $revenues->save();
        }
        Alert()->success('Thành công', 'Bạn đã thêm sản phẩm thành công');
        return redirect()->action('Sanpham\CartController@index');
    }
}