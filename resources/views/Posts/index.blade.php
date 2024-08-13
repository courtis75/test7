@extends('layouts.app')

@section('content')
    {{--my content--}}

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog Posts</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <a href="{{route('posts.create')}}" class="btn btn-sm btn-outline-secondary">Create Post</a><br><br>
          
           
          </div>
        
        </div>
    </div>

  
    <form action="{{route('posts.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="query" class="form-control" placeholder="Search for posts">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
   

    
    <div>
 
      <ul>
        @foreach ($posts as $post)
          <li>
           <a href ="{{route('posts.show',$post->id)}}"->{{$post->title}}</a>
          </li>  
        @endforeach
      </ul>

    </div>

   
  
@endsection

