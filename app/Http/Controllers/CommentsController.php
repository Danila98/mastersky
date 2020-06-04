<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(){
        $comment = new \App\Comment();

        $comment->comment   = request('comment');
        $comment->user      = auth()->user()->id;
        $comment->product   = request('product');
        $comment->article   = request('article');

        $comment->save();

        return redirect('products');
    }
}
