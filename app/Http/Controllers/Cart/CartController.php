<?php

namespace App\Http\Controllers\Cart;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{


    protected $redirectTo = '/';


    public function addToCart(Product $product) {
        Cart::add(['id' => $product->id, 'name' => $product->name, 'price' => $product->price, 'qty' => 1, 'options' => ['image' => $product->image]]);
        return redirect()->back();
    }

    public function showCart() {
        $products = Cart::content();
        return view('shopping.shopping-cart', compact('products', $products));
    }

    public function removeCartItem($rowId) {
        Cart::remove($rowId);
        return redirect('cart');
    }
    public function updateCart($rowId, $qty) {
        Cart::update($rowId,$qty);
        return redirect('cart');
    }
}
