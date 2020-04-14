<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membermodel extends Model
{
    protected $table = "member";
    protected $fillable = ['image','name','card','level','position'];
    public $timestamps = false;
}
