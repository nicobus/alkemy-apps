<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public $table = "purchases";
    public $primaryKey = "id";
    public $timestamps = "true";
    public $guarded = [];

    
    public function app()
    {
        return $this->hasOne('App\AppClass');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
