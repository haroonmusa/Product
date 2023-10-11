<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));

    }
    public function create(Product $product)
    {
        return view('product');
    }
    public function store(Request $request)
    {

        $product = new Product();
        $product-> name = $request -> name;
        $product-> quality = $request -> quality;
        $product-> price = $request -> price;
        $product-> save();
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        return view('edit', compact('product'));

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product-> name = $request -> name;
        $product-> quality = $request -> quality;
        $product-> price = $request -> price;

        $product-> update();
        return redirect('/');
    }

    public function delete(Product $product, $id)
    {
        $product->find($id)->delete();
        return  redirect()->back();
    }
}
