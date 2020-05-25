<?php

namespace App\Http\Controllers;

use \App\Article;
use DB;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function main()
    {
        $news = DB::table('news')->orderBy('id', 'desc')->limit(3)->get();
        $products = DB::table('products')->orderBy('id', 'desc')->limit(3)->get();
        $files = \App\Image::all();
        $data = [
            'news'      => $news,
            'products'  => $products,
            'files'     => $files,
        ];
        return view('main', compact('data'));
    }
    public function oneNews($id){
        $news = \App\News::find($id);
        $files = \App\Image::where('news', '=', $id)->first();
        return view('news', compact('news'), compact('files'));

    }
    public function allArticles(){

        $articles = \App\Article::all();
        $files = \App\Image::all();
       
        return view('articles', compact('articles'), compact('files'));

    }
    public function oneArticles($id){
        $article = Article::find($id);
        $files = \App\Image::where('article', '=', $id)->first();
        return view('article', compact('article'), compact('files'));

    }
    public function allProduct(){

        $products = \App\Product::all();
        $files = \App\Image::all();
       
        $data = [
            'products' => $products,
            'files' => $files,
        ];

        return view('catalog', compact('data'));

    }
    public function oneProduct($id){
        $product = \App\Product::find($id);
        $files = \App\Image::all();
        $data = [
            'products' => $product,
            'files' => $files,
        ];

        return view('product', compact('data'));

    }
    
}
