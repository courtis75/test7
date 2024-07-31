<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
  
    public function showEach($id)
     {
         $user = User::find($id);
         if (!$user) {
             return redirect()->route('admin/posts.show')->with('error', 'Post not found');
         }
         return view('admin.users.showEach', compact('user'));
     }  

     public function edit($id)
     {
         $user = User::find($id);
         if (!$user) {
             return redirect()->route('admin/posts.show')->with('error', 'Post not found');
         }
         return view('admin.users.edit', compact('user'));
     }

     public function update(Request $request, $id)
     {
         $user = User::find($id);
         if (!$user) {
             return redirect()->route('admin/posts.show')->with('error', 'Post not found');
         }
 
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = $request->input('password');
         $user->save();
 
         return redirect()->route('admin/users.showEach', $id)->with('success', 'Post updated successfully');
     }

     public function destroy($id)
     {
         $user = User::find($id);
         if (!$user) {
             return redirect()->route('admin/users.show')->with('error', 'User not found');
         }
 
         $user->delete();
         return redirect()->route('admin/posts.show')->with('success', 'Post deleted successfully');
     }
  

    
}
