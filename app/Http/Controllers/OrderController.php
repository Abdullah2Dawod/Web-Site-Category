<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\categorg;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $orders = order::all();
        return view('order/allorder' , compact('orders'));
    }


    public function create()
    {
        $products = product::all();
        $categorgs = categorg::all();
        return view('order/createorder' , compact('categorgs' , 'products'));
    }


    public function store(Request $request)
    {
        $product = new order();
        $product->id_product = $request->product_Category;
        $product->id_categorg = $request->product_name;
        $product->id_product = $request->product_Qountte;
        $product->save();
        return redirect()->back();
    }


    public function destroy(order $order ,$id)
    {
        $product = order::find($id);
        $product->delete();
        return redirect()->Route('index');
    }
}
