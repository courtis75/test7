@extends('layouts.app')

@section('content')
    {{--my content--}}
    <h1>Blog Posts details</h1>
    <a href = "{{url()->previous()}}">Back</a>
   
    

  
   
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