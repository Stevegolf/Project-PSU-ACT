<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	protected $fillable = ['id','dep_name'];

    public function department()
    {
		return $this->hasMany(Event::class)->withTimeStamps();
    }

    public function event() {
        return $this->hasMany(Event::class);
    }
}
