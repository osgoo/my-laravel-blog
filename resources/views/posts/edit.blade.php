@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content:</label>
            <textarea id="body" name="body" class="form-control" rows="5">{{ $post->body }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </div>
    </form>
@endsection