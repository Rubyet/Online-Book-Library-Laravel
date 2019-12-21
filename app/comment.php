<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    
    protected $primaryKey = "id";
    public $timestamps = false;
}
