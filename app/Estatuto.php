<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatuto extends Model
{
    protected $table 	= 'estatutos';
    protected $fillable = ['title','date'];
}
