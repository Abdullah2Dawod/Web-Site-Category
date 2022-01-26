<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\categorg;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = product::all();
        return view('product/allprodect' , compact('product'));
    }


    public function create()
    {
        $categorgs = categorg::all();
        return view('product/careateprodect' , compact('categorgs'));
    }



    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->qountte = $request->product_qty;
        $product->id_categorg = $request->product_Category;
        $product->save();
        return redirect()->back();
    }


    public function edit(product $product , $id )
    {
        $product = product::find($id);
        $categorgs = categorg::all();
        return view('product/editprodect' , compact('product' , 'categorgs'));
    }


    public function update(Request $request, product $categorg ,$id)
    {
        $product = product::find($id);

        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->qountte = $request->product_qty;
        $product->id_categorg = $request->product_Category;

        $product->save();

        return redirect()->Route('index');



    }

    public function destroy(product $categorg ,$id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->Route('index');
    }
}
