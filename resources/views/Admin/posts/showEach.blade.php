@extends('layouts.app')

@section('content')
    {{--my content--}}
    <a href="{{ url('admin/posts') }}">Back</a>
   
    <a href="{{ route('admin/posts.edit', ['id' => $post->_id]) }}">Edit</a>

    <!-- Delete Button -->
    <form action="{{ route('admin/posts.destroy', ['id' => $post->_id]) }}" method="POST">
        @csrf
        @method('DELETE')
    
        <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
        
    </form>
    <ul>
       <li>
           ID:{{$post->id}}
       </li>
       <li>
           title:{{$post->title}}
       </li>
       <li>
           Content:{{$post->content}}
       </li>
    </ul>
  
@endsection