<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
</head>
<body>
    <h1>All Posts</h1>

    @foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <a href="/posts/{{ $post->id }}/edit">Edit</a>

        <form method="POST" action="/posts/{{ $post->id }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
    <hr>
    @endforeach
</body>
</html>