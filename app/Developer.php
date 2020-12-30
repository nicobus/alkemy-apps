<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public $table = "developers";
    public $primaryKey = "id";
    public $timestamps = "true";
    public $guarded = [];

    
    public function apps()
    {
        return $this->hasMany('App\AppClass');
    }

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
