<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = array('title','description','image','category_id');

    public function category(){
    	return $this->belongsTo(Category::class);
    }
    public function comments(){
    	return $this->hasMany(Comment::class);
    }
}
