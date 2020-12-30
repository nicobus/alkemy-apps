<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = "customers";
    public $primaryKey = "id";
    public $timestamps = "true";
    public $guarded = [];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
}
