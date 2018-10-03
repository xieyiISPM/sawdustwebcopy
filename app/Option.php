<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    public function features()
    {
        return $this->belongsToMany('App\Feature')
            ->withTimestamps();
    }
}
