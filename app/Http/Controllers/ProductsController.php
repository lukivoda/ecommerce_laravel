<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('products.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
          'name' => 'required',
           'description' => 'required',

           'price' => 'required',

           'image' => 'required|image'

       ]);


        $image = $request->file('image');

       $image_new_name =  time().$image->getClientOriginalName();

        $image->move('uploads/images/',$image_new_name);

        $book = Product::create([

           'name' => $request->name,

            'description' => $request->description,

            'price'  => $request->price,

            'image'  => 'uploads/images/' .$image_new_name

        ]);

        Session::flash('success',"Book successfully added");

        return redirect()->route('products.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
          'name' => 'required',

           'price'  => 'required',

           'description' =>'required'

       ]);

        $product =  Product::find($id);

        if($request->hasFile('image')){

            $image = $request->file('image');

            $image_new_name =  time().$image->getClientOriginalName();

            $image->move('uploads/images/',$image_new_name);

            $product->image = 'uploads/images/'.$image_new_name;

        }


        $product->name = $request->name;

        $product->price = $request->price;

        $product->description = $request->description;


        $product->save();

        Session::flash('success',"Book successfully updated");

        return redirect()->route('products.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);

        //ako fajlot postoi vo folderot
      if(file_exists($product->image)){
         //togas go briseme
          unlink($product->image);
      }

        $product->delete();


        Session::flash('success',"Book successfully deleted");

        return redirect()->route('products.index');

    }
}
