@extends('layouts.app')

@section('content')
    {{--my content--}}
    <h1>Admin Panel</h1>

        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title">Content</label>
            <textarea name = "content" class="form-control" required></textarea>
           
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

  
@endsection