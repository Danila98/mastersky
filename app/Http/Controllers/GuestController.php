<?php

namespace App\Http\Controllers;

use \App\Article;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function allArticles(){

        $articles = \App\Article::all();
        
        return view('articles', compact('articles'));

    }
    public function oneArticles($id){
        $article = Article::find($id);
        
        return view('article', compact('article'));

    }
}
