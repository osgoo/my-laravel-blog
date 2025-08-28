@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>All Posts</h1>
        <a href="/posts/create" class="btn btn-primary">Create New Post</a>
    </div>

    @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">{{ $post->body }}</p>
                <p class="text-muted"><small>Posted by: {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</small></p>
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary">Edit</a>
                <form method="POST" action="/posts/{{ $post->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <p>No posts found.</p>
    @endforelse
@endsection