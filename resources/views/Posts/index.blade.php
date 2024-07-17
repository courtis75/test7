@extends('layouts.app')

@section('content')
    {{--my content--}}
    <h1>Blog Posts</h1>

    <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a><br><br>
    <form action="{{route('posts.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Search for posts">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>


    
    
 
    <ul>
        @foreach ($posts as $post)
          <li>
           <a href ="{{route('posts.show',$post->id)}}"->{{$post->title}}</a>
          </li>  
        @endforeach
    </ul>

   
  
@endsection