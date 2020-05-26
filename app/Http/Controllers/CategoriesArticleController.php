<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesArticleController extends Controller
{
    public function index(){

        $categoriesArticle = \App\CategoriesArticle::all();
        // return $articles;
        return view('categories.categoriesArticleList', compact('categoriesArticle'));
    }

    public function create(){


        return view('categories.create-category');
    }
    public function store(Request $request){
        

        $category = new \App\CategoriesArticle();

        $category->name          = request('name');

        $category->save();
        
        return redirect('/categoriesArticle');
    }
    public function edit($id){
        
        $category = \App\CategoriesArticle::findOrFail($id);
        
        return view('categories.edit-category', compact('category'));
        
    }

    public function update(Request $request, $id){
        
        $category = \App\CategoriesArticle::find($id);

        $category->name             = request('name');
        // $article->updated_at        = timestamp();

        $category->save();
        return redirect('/categories.CategoriesArticle');
        
    }

    public function delete($id){
        
        $category = \App\CategoriesArticle::find($id)->delete();

        return redirect('/categories.CategoriesArticle');
        
    }
}
