@extends('layouts.app')

@section('content')
    <h1>Create a New Post</h1>

    <form method="POST" action="/posts">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content:</label>
            <textarea id="body" name="body" class="form-control" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Save Post</button>
        </div>
    </form>
@endsection