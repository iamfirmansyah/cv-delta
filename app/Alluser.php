<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alluser extends Model
{
    protected $table = 'users';
    protected $fillable = ['foto','name','email','role','password'];
}
