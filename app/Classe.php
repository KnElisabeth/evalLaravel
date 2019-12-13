<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = ['name'];

    public function class()
    {
        return $this->hasMany('App\Race');
    }
}
