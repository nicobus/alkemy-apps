<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppClass extends Model
{
public $table = "apps";
public $primaryKey = "id";
public $timestamps = "true";
public $guarded = [];


public function category()
{
   return $this->belongsTo('App\Category');
}


public function developer()
{
   return $this->belongsTo('App\developer');
}

public function purchases()
{
   return $this->belongsTo('App\Purchase');
}

public function prices()
{
   return $this->belongsTo('App\Price');
}


public function scopebyCreationDateDesc($query){
return $query->orderBy('created_at', 'desc');
}

public function scopebyCategory($query, $category){
return $query->select('apps.*')->join('categories', 'category_id', '=', 'categories.id')
->where('categories.name', '=', "$category");
}
}

