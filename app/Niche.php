<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Niche extends Model
{
    public function user(){
        return $this->belongsToMany('App\Post');
    }
}
