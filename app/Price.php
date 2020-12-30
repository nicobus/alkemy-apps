<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public $table = "prices";
    public $primaryKey = "id";
    public $timestamps = "true";
    public $guarded = [];

    
    public function app()
    {   
        return $this->hasOne('App\AppClass');
    }
    
    public function scopeLastPriceForApp($query, $appId){
        return $query->where('app_id', '=', $appId)->latest();
    }

}
