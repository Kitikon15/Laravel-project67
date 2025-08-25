<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function home()
    {
        return redirect('/message');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'posted_by' => 'required'
        ]);

        Post::create($request->all());

        return redirect()->route('message')->with('success', 'Post created successfully.');
    }

    public function message()
    {
        $posts = Post::paginate(2);
        return view('message', compact('posts'));
    }
}
