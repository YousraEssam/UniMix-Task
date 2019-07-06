<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Information;
use App\Photo;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('photos')->get();
        
        // dd(count($products[9]->photos));
        
        return view('products.index',[
            'products' => $products,
        ]);
    }

    public function show_all_products()
    {
        $products = Product::with('photos')->get();

        $specials = Product::get_special_products();
        
        $profile_arr = Information::get_profiles();
        $benefits_arr = Information::get_benefits();
        $app_arr = Information::get_applications();

        return view('products.allproducts',[
            'products' => $products,
            'specials' => $specials,
            'profile_arr' => $profile_arr,
            'benefits_arr' => $benefits_arr,
            'app_arr' => $app_arr,
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('products.create',[
            'products' => $products,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'special' => 'required'
        ]);
        Product::create($request->all());
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
        $product = Product::with('photos')->find($id);
        
        return view('products.show',[
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('id',$id)->first();

        return view('products.edit',[
            'product' => $product,
        ]);
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
        $this->validate($request, [
            'product_name' => 'required',
            'special' => 'required'
        ]);

        $product = Product::find($id);

        $product->update([
            'product_name' => $request->product_name,
            'special' => $request->special,
        ]);

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

        $product->delete();

        return redirect()->route('products.index');
    
    }

}
