<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public function sections()
    {
    	return $this->hasMany('App\Section');
    }
}
