<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        // foreach($posts as $post){
            // echo($post);
        // }
         return view('post.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //   dd('i');
          return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $post=new Post;
         $post->titulo = $request->titulo;
         $post->img = $request->imagen;
         $post->descripcion = $request->descripcion;
         $post->save(); 
        //  dd($post);
         return redirect()->route('post.index');
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        // dd('ya jalo');
        return view('post.edit  ', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post=Post::find($request->id);
         $post->titulo = $request->titulo;
         $post->img = $request->imagen;
         $post->descripcion = $request->descripcion;
         $post->save(); 
         return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($post)
    {
        Post::destroy($post);
        return redirect()->route('post.index');
    }
}
