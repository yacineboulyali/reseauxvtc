<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rendez_vou extends Model
{
    //

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
