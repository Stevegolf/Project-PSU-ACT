<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = ['act_name','act_dep','act_locat','date_begin','time_begin','date_end','time_end','act_sem','act_year','types','act_req','act_hour','act_note','user_id'];

     public function user(){
     	return $this->beLongsTo(User::class);
     }
      public function types() {
     	return $this->belongsToMany(Type::class);
     }
}
