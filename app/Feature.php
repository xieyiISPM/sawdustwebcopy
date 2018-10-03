<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    public function options()
    {
        return $this->belongsToMany('App\Option')
            ->withTimestamps();
    }
}
