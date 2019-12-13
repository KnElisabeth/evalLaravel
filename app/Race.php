<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name','life','class_id'];

    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
    public function class()
    {
        return $this->belongsTo('App\Classe');
    }
}
