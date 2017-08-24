<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['act_name','act_locat','dateTime_begin','dateTime_end','act_sem','dateTime_close','act_year','type_id','act_req','act_hour','act_note','act_img','user_id','department_id'];
}
