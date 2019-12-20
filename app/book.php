<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = "bookdetails";
    
    protected $primaryKey = "id";
    public $timestamps = false;

}
