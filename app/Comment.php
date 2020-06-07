<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Comment extends Model
{
    public static function getCommentsList($id)
    {
        
        $comments = DB::select('select * from comments where product_id = :id', ['id' => $id]);
       
        return $comments;
    }
}
