<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Product;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::with('product')->get();
        return view('photos.index',[
            'photos' => $photos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $photos = Photo::all();
        $products = Product::all();
        
        return view('photos.create',[
            'photos' => $photos,
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
        if ($request->hasFile('photo_name')) {
            $imageName = $request->file('photo_name');

            $file_original_name = $imageName->getClientOriginalName();

            $filename = pathinfo($file_original_name, PATHINFO_FILENAME) . "." . pathinfo($file_original_name, PATHINFO_EXTENSION);

            $request->photo_name->move(public_path('images'), $file_original_name);
        }
        Photo::create([
            'photo_name' => $filename,
            'logo' => $request->logo,
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::find($id);
        $product = Product::find($photo->product_id);

        return view('photos.show',[
            'photo' => $photo,
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
        $photo = Photo::where('id',$id)->first();
        $products = Product::all(); 

        return view('photos.edit',[
            'photo' => $photo,
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
        if ($request->hasFile('photo_name')) {
            $imageName = $request->file('photo_name');

            $file_original_name = $imageName->getClientOriginalName();

            $filename = pathinfo($file_original_name, PATHINFO_FILENAME) . "." . pathinfo($file_original_name, PATHINFO_EXTENSION);
            $request->photo_name->move(public_path('images'), $file_original_name);
        }
        $photo = Photo::find($id);
        $photo->update([
            'photo_name' => $filename,
            'logo' => $request->logo,
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('photos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);

        $photo->delete();

        return redirect()->route('photos.index');
    
    }
}
