<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    $table = 'posts';

    public function comments()
    {
    	return $this->hasMany('App\Models\Comment');
    }

    public function us
}