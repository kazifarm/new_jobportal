<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function Job(){
        return $this->hasMany('App\Job'); // One To Many
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
