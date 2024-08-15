@extends('layouts.app')

@section('content')
    {{--my content--}}
    <a href="{{ url('admin/posts') }}">Back</a>
   
    <a href="{{ route('admin/users.edit', ['id' => $user->_id]) }}">Edit</a>

    <!-- Delete Button -->
    <form action="{{ route('admin/users.destroy', ['id' => $user->_id]) }}" method="POST">
        @csrf
        @method('DELETE')

         <!-- Checkbox to delete all associated posts -->
         <div>
            <input type="checkbox" name="delete_posts" id="deletePostsCheckbox" value="yes">
            <label for="deletePostsCheckbox">Delete all posts associated with this User</label>
        </div>
    
        <button type="submit" onclick="return confirm('Are you sure you want to delete this User?')">Delete</button>
        
    </form>
    <ul>
       <li>
           ID:{{$user->id}}
       </li>
       <li>
           name:{{$user->name}}
       </li>
       <li>
           email:{{$user->email}}
       </li>
       <li>
           password:{{$user->password}}
       </li>
    </ul>
  
@endsection
