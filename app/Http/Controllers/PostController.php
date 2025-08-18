<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // 1. Формоос ирсэн мэдээллийг шалгах
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // 2. Шинэ Post үүсгээд, мэдээллийн санд хадгалах
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // 3. Хэрэглэгчийг бүх постын жагсаалт руу буцаах
        return redirect('/posts');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        // 1. Формоос ирсэн шинэ мэдээллийг шалгах
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // 2. Route-оос олдсон постын мэдээллийг шинэчлэх
        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // 3. Хэрэглэгчийг бүх постын жагсаалт руу буцаах
        return redirect('/posts');
    }
    public function destroy(Post $post)
    {
        // 1. Route-оос олсон постыг устгах
        $post->delete();

        // 2. Хэрэглэгчийг бүх постын жагсаалт руу буцаах
        return redirect('/posts');
    }
}
