<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\User;
use App\Post;


class Comment extends Model
{
    

    public $table="comments";
   
    public function posts(){
        return $this->belongsTo('App\Post','post_id','id');

    }
    function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    protected $fillable=['id','user_id','post_id','comment'];

}
