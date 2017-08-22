<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $fillable = ['act_name','act_locat','dateTime_begin','dateTime_end','act_sem','dateTime_close','act_year','type_id','act_req','act_hour','act_note','act_img','user_id','department_id'];

     public function user(){
     	return $this->beLongsTo(User::class);
     }
      public function types() {
     	return $this->belongsToMany(Type::class);
     }
      public function department() {
     	return $this->belongsTo(Department::class);
     }
}
