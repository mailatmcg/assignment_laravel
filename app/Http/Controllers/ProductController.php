<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.list-product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add-product');
    }

    /**
     * Store a newly created product in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = Product::create([
            'name'    => $request->name,
            'slug'	  => str_slug($request->name),
            'summary' => $request->summary,
            'price'   => $request->price
        ]);
        
        return redirect('products/'.$newPost->id);
    }

    /**
     * Display the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        Session::flash('success', 'Product created');
        Session::flash('alert-class', 'alert-primary');
        return view('product.display-product', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit-product', ['product' => $product]);
    }

    /**
     * Update the specified product in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'name'    => $request->name,
            'slug'    => str_slug($request->name),
            'summary' => $request->summary,
            'price'   => $request->price
        ]);
        Session::flash('success', 'Product updated');
        Session::flash('alert-class', 'alert-info');
        return redirect('products/'.$product->id.'/edit');
    }

    /**
     * Remove the specified product from database.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('success', 'Product deleted');
        Session::flash('alert-class', 'alert-danger'); 
        return redirect('/products');
    }
}
