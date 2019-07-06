<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Product;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::with('product')->get();
        $products = Product::all();

        return view('information.index',[
            'information' => $information,
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $information = Information::all();
        $products = Product::all();

        // foreach($products as $product){
        // dd($product->product_name);
        // }

        return view('information.create',[
            'information' => $information,
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
            'prod_profile' => 'required',
            'prod_benefits' => 'required',
            'prod_applications' => 'required',
            'product_id' => 'required',
        ]);

        Information::create($request->all());

        return redirect()->route('information.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $information = Information::find($id);
        $prod_profiles = Information::get_profiles();
        // dd($prod_profiles);
        $prod_benefits = Information::get_benefits();
        $prod_applications = Information::get_applications();

        $product = Product::find($information->product_id);
        return view('information.show',[
            'information' => $information,
            'product' => $product,  
            'prod_profiles' => $prod_profiles[$id-1],
            'prod_benefits' => $prod_benefits[$id-1],
            'prod_applications' => $prod_applications[$id-1],  
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
        $information = Information::where('id',$id)->first();
        $products = Product::all(); 

        return view('information.edit',[
            'information' => $information,
            'products' => $products,
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
            'prod_profile' => 'required',
            'prod_benefits' => 'required',
            'prod_applications' => 'required',
            'product_id' => 'required',
        ]);
        // dd($request->all());
        $information = Information::find($id);

        $information->update([
            'prod_profile' => $request->prod_profile,
            'prod_benefits' => $request->prod_benefits,
            'prod_applications' => $request->prod_applications,
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('information.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Information::find($id);

        $info->delete();

        return redirect()->route('information.index');
    
    }
}
