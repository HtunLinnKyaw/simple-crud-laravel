<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_data()
    {
        $products = Product::all();
        return view('index', ['products' => $products]);
    }

    public function delete_data($id)
    {
        $delete_data = Product::find($id);
        $delete_data->delete();
        return redirect('/home')->with('success', 'Product has been deleted');
    }

    public function create_data()
    {
        return view('create');
    }

    public function store_data(Request $request){
        $validator = validator($request->all(),[
                'name'=>'required',
                'color'=>'required',
                'category'=>'required',
                'price'=>'required',
            ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $product = new Product();
        $product->product_name = $request->input('name');
        $product->product_color = $request->input('color');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->back()->with('success', 'Product has been created');


    }

    public function edit_data($id)
    {
        $edit_products = Product::find($id);
        return view('edit', compact('edit_products'));
    }

    public function update_data(Request $request, $id){
        $update_data = Product::find($id);
        $update_data->product_name = $request->input('name');
        $update_data->product_color = $request->input('color');
        $update_data->category = $request->input('category');
        $update_data->price = $request->input('price');
        $update_data->save();

        return redirect()->back()->with('success', 'Product has been updated');
    }

}
