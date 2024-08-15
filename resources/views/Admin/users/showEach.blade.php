@extends('layouts.app')

@section('content')
    {{--my content--}}
    <a href="{{ url('admin/posts') }}">Back</a>
   
    <a href="{{ route('admin/users.edit', ['id' => $user->_id]) }}">Edit</a>

    <!-- Delete Button -->
    <form action="{{ route('admin/users.destroy', ['id' => $user->_id]) }}" method="POST">
        @csrf
        @method('DELETE')
    
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
