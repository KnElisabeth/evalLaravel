<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name','sexe','age','weight','height','race_id'];

    public function race()
    {
        return $this->belongsTo('App\Race');
    }
}
