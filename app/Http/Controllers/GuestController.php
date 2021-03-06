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
        
        $categories = \App\CategoriesArticle::all();
        $articles = \App\Article::all();
        $files = \App\Image::all();
       
        $data =[
            'categories' => $categories,
            'articles' => $articles,
            'files' => $files,
        ];
        return view('articles', compact('data'));

    }
    public static function oneArticles($id, $message = []){    


        $users = DB::table('users')->get();

        $categories = DB::table('categories_articles')->get();

        $article = Article::find($id);

        $files = \App\Image::where('article', '=', $id)->first();
      
        $comments = \App\Comment::getCommentsList($id, 'article_id');
        $data = [
            'users' => $users,
            'categories' => $categories,
            'article' => $article,
            'files' => $files,
            'comments' => $comments,
            'message' => $message,
        ];
        return view('article', compact('data'));

    }
    public function allProduct(){

        $products = \App\Product::all();
        $files = \App\Image::all();
        $categories = \App\CategoriesArticle::all();
        $data = [
            'products' => $products,
            'files' => $files,
            'categories' => $categories,
        ];

        return view('catalog', compact('data'));

    }
    public static function oneProduct($id, $message = []){
        $product = \App\Product::find($id);
        $files = \App\Image::all();
        $users = DB::table('users')->get();
        $comments = \App\Comment::getCommentsList($id, 'product_id');

        $data = [
            'products' => $product,
            'files' => $files,
            'comments' =>$comments,
            'users' =>$users,
            'message' =>$message,
        ];

        return view('product', compact('data'));

    }
    
}
