<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index',[
            'posts' =>  Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create',[
            'post' =>  new Post
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;

        $data = $request->all();

        $post->fill($data);

        $post->user_id = auth()->user()->id;

        if ($request->hasFile('imagem')) {
            $extension = $request->file('imagem')->getClientOriginalExtension();

            $post->image_extension = $extension;
        }


        $post->save();

        if ($request->hasFile('imagem')) {
            $request->file('imagem')->move(base_path('/public_html/files/posts'), sprintf('%s.%s', $post->id, $extension));
        }


        return redirect()->route('admin.posts.index')->with('flash.success','Publicação cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',[
            'post' =>  $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();

        $post->fill($data);

        $post->user_id = auth()->user()->id;


        if ($request->hasFile('imagem')) {
            $extension = $request->file('imagem')->getClientOriginalExtension();

            $post->image_extension = $extension;
        }


        $post->save();

        if ($request->hasFile('imagem')) {
            $request->file('imagem')->move(base_path('/public_html/files/posts'), sprintf('%s.%s', $post->id, $extension));
        }


        return redirect()->route('admin.posts.index')->with('flash.success','Publicação editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('flash.success','Publicação deletada com sucesso!');
    }

    public function block()
    {

    }

    public function unblock()
    {

    }
}
