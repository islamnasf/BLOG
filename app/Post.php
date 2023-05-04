<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Comment;
use App\User;

class Post extends Model
{
    public $table="posts";
    public function comments(){
        return $this->hasMany('App\Comment','post_id','id');

    }
    public function users(){
        return $this->belongsTo('App\User','user_id','id');

    }
    protected $fillable=['id','user_id','title','author','contant'];

}
