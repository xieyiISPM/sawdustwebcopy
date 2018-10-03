<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function features()
    {
        return $this->belongsToMany('App\Feature')
            ->withTimestamps();
    }
}
