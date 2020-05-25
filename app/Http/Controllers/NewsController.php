<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

        $news = \App\News::all();
        $files = \App\Image::all();
        // return $articles;
        return view('news.news-list', compact('news'), compact('files'));
    }

    public function create(){
        return view('news.create-news');
    }
    public function store(Request $request){
        

        $news = new \App\News();

        $news->name = request('name');
        $news->text = request('text');
        $news->created_at = request('created_at');

        $news->save();
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file = new \App\Image();
            $file->url = $path;
            $file->news = $news->id;
            $file-> save();
        }
        
        return redirect('/news');
    }
    public function edit($id){
        
        $news = \App\News::findOrFail($id);

        $files = \App\Image::where('news', '=', $id)->first();
        
        return view('news.edit-news', compact('news'), compact('files'));
        
    }

    public function update(Request $request, $id){
        
        $news = \App\News::find($id);

        $news->name = request('name');
        $news->text = request('text');
        $news->created_at = request('created_at');
        // $article->updated_at        = timestamp();

        
        if($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $file = new \App\Image();
            if(\App\Image::where('news', '=', $id)){
                $oldImg = \App\Image::where('news', '=', $id)->delete();
            }
            $file->url = $path;
            $file->news = $article->id;
            $file-> save();
        }
        $news->save();
        return redirect('/news');
        
    }

    public function delete($id){
        
        $news = \App\News::find($id)->delete();

        return redirect('/news');
        
    }
}
