<?php

namespace App\Http\Controllers;

use \App\Article;

use Illuminate\Http\Request;



class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $articles = \App\Article::all();
        // return $articles;
        return view('myArticles', compact('articles'));
    }

    public function create(){
        return view('myArticles.create-articles');
    }
    public function store(){

        $article = new Article();

        $article->title = request('title');
        $article->content = request('content');
        $article->user = request('user');

        $article->save();
        
        return redirect('/myArticles');
    }
    public function edit($articlesID){
        
        $article = Article::findOrFail($articlesID);
    
        return view('myArticles.edit-articles', compact('article'));
        
    }

    public function update($id){
        
        $article = Article::find($id);

        $article->title             = request('title');
        $article->content           = request('content');
        $article->link              = request('link');
        // $article->updated_at        = timestamp();

        $article->save();

        return redirect('/myArticles');
        
    }

    public function delete($id){
        
        $article = Article::find($id)->delete();

        return redirect('/myArticles');
        
    }
    
}
