<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * @property \Carbon\Carbon $deleted_at
 */
class Vehicule extends Model
{
    //

    use SoftDeletes;

    public function Conducteur()
    {
        return $this->belongsTo('App\Conducteur');
    }
}
