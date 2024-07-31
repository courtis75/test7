@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>

    <form action="{{ route('admin/users.update', $user->_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $user->name }}">
        </div>

        <div>
            <label for="email">Email</label>
            <textarea id="email" name="email">{{ $user->email}}</textarea>
        </div>

        <div>
            <label for="password">Password</label>
            <textarea id="password" name="password">{{ $user->password}}</textarea>
        </div>

        <button type="submit">Update User</button>
    </form>
@endsection