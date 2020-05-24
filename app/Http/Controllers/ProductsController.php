<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $products = \App\Product::all();
        $files = \App\Image::all();
        // return $articles;
        return view('products', compact('products'), compact('files'));
    }

    public function create(){
        return view('products.create-products');
    }
    public function store(Request $request){
        

        $product = new \App\Product();

        $product->name          = request('name');
        $product->description   = request('description');
        $product->categories    = request('categories');

        $product->save();
        if($request->hasFile('files')) {
            $i = 0;
            foreach($request->files as $file){
                $path = $request->file('files')[$i]->store('uploads', 'public');
                $file = new \App\Image();
                $file->url = $path;
                $file->product = $product->id;
                $file-> save();
                $i++;
            }
        }
        
        return redirect('/products');
    }
    public function edit($id){
        
        $product = \App\Product::findOrFail($id);

        $files = \App\Image::where('product', '=', $id)->first();
        
        return view('products.edit-products', compact('product'), compact('files'));
        
    }

    public function update(Request $request, $id){
        
        $product = \App\Product::find($id);

        $product->name             = request('name');
        $product->description           = request('description');
        // $article->updated_at        = timestamp();

        
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file = new \App\Image();
            if(\App\Image::where('product', '=', $id)){
                $oldImg = \App\Image::where('product', '=', $id)->delete();
            }
            $file->url = $path;
            $file->product = $product->id;
            $file-> save();
        }
        $product->save();
        return redirect('/myArticles');
        
    }

    public function delete($id){
        
        $product = \App\Product::find($id)->delete();

        return redirect('/myArticles');
        
    }
}
