<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veneu extends Model
{
    protected $table = 'veneu';
    protected $fillable = ['title','text1','text2','location','cover','pict1','pict2','pict3','pict4','status'];
}
