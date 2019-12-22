<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = "history";
    
    protected $primaryKey = "id";
    public $timestamps = false;
}
