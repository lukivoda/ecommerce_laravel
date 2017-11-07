<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;


use Illuminate\Http\Request;

class ShoppingController extends Controller
{


    public function add_to_cart(){

        $product  = Product::find(request()->pdct_id);

        $cartItem =Cart::add([

            'id' => $product->id,

            'name' => $product->name,

            'qty' => request()->qty,

            'price' =>  $product->price,

      

        ]);

        Cart::associate($cartItem->rowId,'App\Product');

      return   redirect()->route('cart');
    }


    public function cart() {

       // Cart::destroy();

        return view('cart');
    }



}
