<!DOCTYPE html>
<html>
<head>
    <title>Create New Post</title>
</head>
<body>
    <h1>Create a New Post</h1>

    <form method="POST" action="/posts">
        @csrf
        <div>
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title">
        </div>
        <br>
        <div>
            <label for="body">Content:</label><br>
            <textarea id="body" name="body"></textarea>
        </div>
        <br>
        <div>
            <button type="submit">Save Post</button>
        </div>
    </form>
</body>
</html>