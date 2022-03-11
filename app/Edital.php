<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edital extends Model
{
    protected $table = 'editais';

    protected $fillable = ['title', 'date'];
}
