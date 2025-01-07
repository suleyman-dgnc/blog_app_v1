<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }


    public function create()
{
    return view('posts.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    Post::create([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()->route('posts.index')->with('success', 'Yazı başarıyla eklendi!');
}


public function edit($id)
{
    $post = Post::find($id);

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'Yazı bulunamadı!');
    }

    return view('posts.edit', compact('post'));
}

public function update(Request $request, $id)
{
    $post = Post::find($id);

    if (!$post) {
        return redirect()->route('posts.index')->with('error', 'Yazı bulunamadı!');
    }

    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
    ]);

    $post->update([
        'title' => $request->title,
        'content' => $request->content,
    ]);

    return redirect()->route('posts.index')->with('success', 'Yazı başarıyla güncellendi!');
}
    public function destroy($id)
{
    $post = Post::findOrFail($id);
    $post->delete();

    return redirect()->route('posts.index');
}

}
