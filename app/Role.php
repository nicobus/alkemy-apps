<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = "roles";
    public $primaryKey = "id";
    public $timestamps = "true";
    public $guarded = [];

}
