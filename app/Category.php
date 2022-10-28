<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Post');
        // select * from `posts` where posts.category_id === ?
        // return $this->hasMany('App\Post','category_id','id');
    }
}
