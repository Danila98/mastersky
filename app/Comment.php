<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Comment extends Model
{
    public static function getCommentsList($id, $essence)
    {
        
        $comments = DB::select('select * from comments where '.$essence.' = :id', ['id' => $id]);
       
        return $comments;
    }
}
