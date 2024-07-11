<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
      
        //dd(Post::factory()-> create());
        $posts = Post::all( );
       
        return view('Posts.index',compact('posts'));

    }

    public function create() {
      
        return view('Posts.create');

    }

    public function show(Post $post) {
      
         
     
       return view('Posts.show',compact('post'));

    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required',
        
        'content'=>'required']);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
       $post->title = $request->input('title');
       $post->content = $request->input('content');
       $post->save();

       return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
       $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
   }
    }


