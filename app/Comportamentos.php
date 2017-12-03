<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comportamentos extends Model
{
    protected $fillable = ['nome', 'emoji'];

    public function diarios(){
        return $this->hasMany('App\Diarios');
    }

    public function emojis(){
      return $this->belongsTo('App\Emojis', 'emoji');
    }
}
