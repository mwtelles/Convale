<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lei extends Model
{
    protected $table 	= 'leis';
    protected $fillable = ['title', 'date'];
}
