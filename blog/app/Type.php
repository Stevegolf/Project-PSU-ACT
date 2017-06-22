<?php

namespace App;
use App\Event;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
     public function events() {
    	return $this->belongsToMany(Event::class)->withTimeStamps();
    }
}
