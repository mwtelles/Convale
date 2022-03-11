<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','image_extension','user_id'];

    protected $with 	= ['user'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
