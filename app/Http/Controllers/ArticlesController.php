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
        $files = \App\Image::all();
        // return $articles;
        return view('myArticles', compact('articles'), compact('files'));
    }

    public function create(){
        $categories = \App\CategoriesArticle::all();
        return view('myArticles.create-articles', compact('categories'));
    }
    public function store(Request $request){
        

        $article = new Article();

        $article->title = request('title');
        $article->content = request('content');
        $article->categories_id = request('categories_id');
        $article->user = request('user');

        $article->save();
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file = new \App\Image();
            $file->url = $path;
            $file->article = $article->id;
            $file-> save();
        }
        
        return redirect('/myArticles');
    }
    public function edit($articlesID){
        
        $article = Article::findOrFail($articlesID);

        $files = \App\Image::where('article', '=', $articlesID)->first();
        
        return view('myArticles.edit-articles', compact('article'), compact('files'));
        
    }

    public function update(Request $request, $id){
        
        $article = Article::find($id);

        $article->title             = request('title');
        $article->content           = request('content');
        $article->link              = request('link');
        $article->categories_id     = request('categories_id');
        // $article->updated_at        = timestamp();

        
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file = new \App\Image();
            if(\App\Image::where('article', '=', $id)){
                $oldImg = \App\Image::where('article', '=', $id)->delete();
            }
            $file->url = $path;
            $file->article = $article->id;
            $file-> save();
        }
        $article->save();
        return redirect('/myArticles');
        
    }

    public function delete($id){
        
        $article = Article::find($id)->delete();

        return redirect('/myArticles');
        
    }
    
}
