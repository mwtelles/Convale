<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class IndexController extends Admin\Controller
{
    public function index()
    {
  		$posts = Post::orderBy('created_at','desc')->limit(6)->get();

    	return view('index',[
    		'posts'	=>	$posts
    	]);//retornando os posts para a view index
    }
}
