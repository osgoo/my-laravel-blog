<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->with('user')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $validated['user_id'] = auth()->id();

        Post::create($validated);

        return redirect('/posts');
    }
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        $validated = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->update($validated);

        return redirect('/posts');
    }
    public function destroy(Post $post)
    {
        if ($post->user_id !== auth()->id()) {
            abort(403);
        }

        // 1. Route-оос олсон постыг устгах
        $post->delete();

        // 2. Хэрэглэгчийг бүх постын жагсаалт руу буцаах
        return redirect('/posts');
    }
}
