@extends('layouts.app')

@section('content')
    {{--my content--}}
    <h1>Blog Posts details</h1>
    <a href = "{{url()->previous()}}">Back</a>
    <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    

    <!-- Delete Button -->
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
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