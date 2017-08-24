<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_title','news_detail','news_img'];




     public function user(){
     	return $this->beLongsTo(User::class);
     }
}
