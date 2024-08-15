@extends('layouts.admin_layout')

@section('content')
    {{-- My content --}}
    <h1 style="margin-left: 35px;">Admin Panel: Post + User details</h1>

    <div style="margin-bottom: 20px;">

        <div style="display: flex; gap: 20px; flex-direction: column;">

            <div>
                <h2 style="margin-left: 40px;">Posts</h2>

                <form action="{{ route('posts.create') }}" method="GET" style="display: inline;">
                    <button type="submit" class="btn btn-primary" style="margin-left: 40px;">Create New Post</button>
                </form>

                <ul style="list-style-type: none;">
                    @foreach ($posts as $post)
                        <li>
                            <a href="{{ route('admin/posts.showEach', ['id' => $post->_id]) }}">
                                {{ $post->title }} 
                                
                                @if ($post->user)
                                    <span style="margin-left: 100px;color: red"><strong>by {{ $post->user->email }}</strong></span>
                                @else
                                    <span style="margin-left: 100px;color: red"><strong>by Unknown</strong></span>
                                @endif
                            </a>
                        </li>  
                    @endforeach
                </ul>
            </div>

            {{-- Add similar structure for the Users section if needed --}}
            <div>
                <h2 style="margin-left: 40px;">Users</h2>

                <form action="{{ route('register') }}" method="GET" style="display: inline;">
                    <button type="submit" class="btn btn-secondary" style="margin-left: 40px;">Register New User</button>
                </form>

                <ul style="list-style-type: none;">
                    @foreach ($users as $user)
                        <li>
                            <a href="{{ route('admin/users.showEach', $user->id) }}">{{ $user->email }}</a>
                            <span style="margin-left: 20px;"> {{ $user->role }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
@endsection