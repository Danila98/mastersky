<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(){
        $comment = new \App\Comment();

        $comment->comment           = request('comment');
        $comment->user              = auth()->user()->id;
        $comment->product           = request('product');
        $comment->product_id         = request('productID');
        $comment->article           = request('article');
        $comment->article_id         = request('articleId');

        $comment->save();

        return redirect('products');
    }

    public function getCommentsByProduct($id){
        $comments = new \App\Comment();
        $comments->getCommentsList($id);
        return $comments;

    }
}
