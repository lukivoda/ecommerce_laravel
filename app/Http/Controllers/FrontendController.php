<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){

        $products  = Product::orderBy('created_at','desc')->paginate(3);
        
        return view('index')->with('products',$products);

    }

    public function show($id){
        
        $product = Product::find($id);

        return view('single')->with('product',$product);
    }
}
