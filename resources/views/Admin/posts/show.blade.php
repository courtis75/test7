@extends('layouts.app')

@section('content')
    {{-- My content --}}
    <h1>Blog Posts details</h1>

    <div style="margin-bottom: 20px;">
    
    </div>

    <div style="display: flex; gap: 20px;">
        <div>
            <h2>Posts</h2>
            <ul style="list-style-type: none;">
                @foreach ($posts as $post)
                    <li>
                    <a href="{{ route('admin/posts.showEach', ['id' => $post->_id]) }}">{{ $post->title }}</a>
                    </li>  
                @endforeach
            </ul>
        </div>

        <div>
            <h2>Users</h2>
            <ul style="list-style-type: none;">
                @foreach ($users as $user)
                    <li>
                        <a href="{{ route('admin/posts.show', $user->id) }}">{{ $user->email }}</a>
                    </li>  
                @endforeach
            </ul>
        </div>
    </div>
@endsection