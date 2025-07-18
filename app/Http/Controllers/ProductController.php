<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {  
        $products = Product::all();  
        return view('index', compact('products'));  
    }    

    public function create() {  
        return view('create');  
    }    

    public function store(Request $request) {  
        Product::create($request->only(['name', 'code']));  
        return redirect()->route('products.index')->with('success', 'Product added successfully');  
    }    

  
   public function edit($id) {
    $product = Product::find($id);
    return view('edit', compact('product', 'id'));
}

    public function update(Request $request, $id) {  
        $product = Product::findOrFail($id);  
        $product->update($request->only(['name', 'code']));  
        return redirect()->route('products.index');  
    }    

    public function destroy($id) {  
        Product::findOrFail($id)->delete();  
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');  
    }  
}