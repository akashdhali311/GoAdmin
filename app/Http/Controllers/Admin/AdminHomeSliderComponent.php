<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeSliderComponent extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Backend.Container.products.index',['products' => $products]);
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Container.forms.general');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'title' => 'required|unique:Category,column,max:200',
        //     'subtitle' => 'required|unique:Category,column,max:200',
        //     'link' => 'required|unique:Category,column,max:200',
        //     'description' => 'required|unique:Category,column,max:200',
        //     'image' => 'required|unique:Category,column,max:200',
        // ]);
        
        $product = new Product;
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->link = $request->link;
        $product->description = $request->description;
        $product->image = $request->image;

        $product->save();

        return redirect('settings/homeSettings');

        // return redirect()->route('settings/homeSettings')->with('succes', 'Product Added Successfully');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->first();

        return view('Backend.Container.products.edit',['product' => $product]);
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::where('id',$id)->first();

        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->link = $request->link;
        $product->description = $request->description;
        $product->image = $request->image;

        $product->save();

        return redirect('settings/homeSettings');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::where('id',$id)->first();

        $product->delete();

        return redirect('settings/homeSettings');
    }
}
