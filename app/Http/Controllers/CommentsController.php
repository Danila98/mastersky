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
        $comment->article_id         = request('articleID');

        $comment->save();
        if($comment->save()){
            $good = 'Комментарий добавлен';
            $message = [
                'good' => $good,
            ];
        }else{
            $error = 'Комментарий не добавлен';
            $message = [
                'good' => $good,
            ];
        }
        
        if(request('articleID')){
            $res = GuestController::oneArticles(request('articleID'), $message);
            
        }
        if(request('productID')){
            $res = GuestController::oneProduct(request('productID'), $message);
        }
        return $res;
    }

    public function getCommentsByProduct($id){
        $comments = new \App\Comment();
        $comments->getCommentsList($id);
        return $comments;

    }
}
