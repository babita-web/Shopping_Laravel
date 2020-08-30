<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{
    public function index()
    {
        if(!Session::has('cart')){
        return view('cart.index',['products'=>null]);
    }
        $oldCart =Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.index', ['products'=> $cart->items, 'totalPrice'=> $cart->totalPrice]);
    }

    public function addtocart(Request $request, $id)
    {
        $product = Product:: find($id);
        $oldCart = Session::has('cart')? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
        return redirect()->route('frontend.products');
    }
    public function checkout()
    {
        if(!Session::has('cart')){
            return view('cart.index');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;

        return view('cart.checkout',['products'=> $cart->items, 'totalPrice'=> $cart->totalPrice]);
    }

}
