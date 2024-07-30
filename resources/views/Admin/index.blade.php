@extends('layouts.app')

@section('content')
    {{--my content--}}
    <h1>Blog Posts admin</h1>

   
   

    <ul>
        @foreach ($posts as $post)
          <li>
           <a href ="{{route('Admin/posts.show',$post->id)}}"->{{$post->title}}</a>
          </li>  
        @endforeach
    </ul>
    
    
 
  

   
  
@endsection