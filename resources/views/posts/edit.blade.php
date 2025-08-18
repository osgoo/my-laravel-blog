<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ $post->title }}">
        </div>
        <br>
        <div>
            <label for="body">Content:</label><br>
            <textarea id="body" name="body">{{ $post->body }}</textarea>
        </div>
        <br>
        <div>
            <button type="submit">Update Post</button>
        </div>
    </form>
</body>
</html>