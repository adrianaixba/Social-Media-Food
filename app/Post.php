<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // depict relationship btwn tables to database
    // user, because each post has 1 user
    public function user(){
        //the relation is that this post belongs to one user
        return $this->belongsTo('App\User');
    }

    //post can have multiple likes
    public function likes(){
        return $this->hasMany('App\Like');
    }
}
