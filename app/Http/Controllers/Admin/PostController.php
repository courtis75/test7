<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Middleware\AdminMiddleware;


class PostController extends Controller
{
    
    public function index() {
      
        //dd(Post::factory()-> create());
        $posts = Post::all( );

        $posts = Auth::user()->posts;
    
        return view('Admin.index',compact('posts'));

    }

    public function create() {
      
        return view('Admin.create');

    }

    public function show() {
      

        $posts = Post::all();
        $users = User::all();

        //$posts = Auth::user()->posts;
        return view('Admin.posts.show',compact('posts'),compact('users'));
 
     }

     public function manage() {

     }

     public function showEach($id)
     {
         $post = Post::find($id);
         if (!$post) {
             return redirect()->route('admin/posts.show')->with('error', 'Post not found');
         }
         return view('admin.posts.showEach', compact('post'));
     }

     public function edit($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('admin/posts.show')->with('error', 'Post not found');
        }
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('admin/posts.show')->with('error', 'Post not found');
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('admin/posts.showEach', $id)->with('success', 'Post updated successfully');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect()->route('admin/posts.show')->with('error', 'Post not found');
        }

        $post->delete();
        return redirect()->route('admin/posts.show')->with('success', 'Post deleted successfully');
    }
 
}
