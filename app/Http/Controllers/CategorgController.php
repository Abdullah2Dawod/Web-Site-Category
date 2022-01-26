<?php

namespace App\Http\Controllers;

use App\Models\categorg;
use Illuminate\Http\Request;

class CategorgController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categorgs = categorg::all();
        return view('categrog/allcatgorae' , compact('categorgs'));
    }


    public function create()
    {
        return view('categrog/catogorae');
    }



    public function store(Request $request)
    {
        $categorgs = new categorg();
        $categorgs->name = $request->product_name;
        $categorgs->save();
        return redirect()->back();
    }


    public function edit(categorg $categorg , $id )
    {
        $categorgs = categorg::find($id);
        return view('categrog/editcatgorae' , compact('categorgs'));
    }

    public function update(Request $request, categorg $categorg ,$id)
    {
        $categorgs = categorg::find($id);

        $categorgs->name = $request->product_name;

        $categorgs->save();

        return redirect()->Route('index');

    }

    public function destroy(categorg $categorg ,$id)
    {
        $categorgs = categorg::find($id);
        $categorgs->delete();
        return redirect()->Route('index');

    }
}
