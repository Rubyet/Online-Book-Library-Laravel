<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = "userdetails";
    
    protected $primaryKey = "id";
    public $timestamps = false;

}
