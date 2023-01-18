<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Franchises extends Model
{
    public $table = "users";
    protected $fillable = ['name'];
    public $timestamps = false;
}
