@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Post Results</h1>
   

    @if(isset($posts))
     
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
    <a href = "{{url()->previous()}}">Back</a>
</div>
@endsection