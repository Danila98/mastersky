<?php

namespace App\Http\Controllers;

use \App\Article;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function main()
    {
        $news = \App\News::all();
        $files = \App\Image::all();

        return view('main', compact('news'), compact('files'));
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
    public function oneNews($id){
        $news = \App\News::find($id);
        $files = \App\Image::where('news', '=', $id)->first();
        return view('news', compact('news'), compact('files'));

    }
}
