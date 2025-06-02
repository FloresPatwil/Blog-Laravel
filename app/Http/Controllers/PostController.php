<?php

namespace App\Http\Controllers;
use App\Models\Post; // Assuming you have a Post model
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')
            ->paginate(11); // Assuming you have a Post model
        return view('posts.index', compact('posts')); // Assuming you have a view for posts
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:5', 'max:255'],
            'slug' => ['required', 'unique:posts,slug', 'regex:/^[a-z0-9-]+$/'], // slug válido
            'categoria' => ['required'],
            'content' => ['required'],
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post')); // Return the edit view with the post data
    }
    public function show(Post $post) //Antes parametro era $post
    {
        return view('posts.show', compact('post')); //['post' => 'Hola mundo']
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'min:5', 'max:255'], // Validate the title field
            'slug' => "required|unique:posts,slug,$post->id", // Validate the slug field, ensuring it's unique except for the current post
            'categoria' => 'required',
            'content' => 'required',
        ]); // Validate the request data using the 'posts.create' validation rules
        $post->update($request->all());
        return redirect()->route('posts.show', $post); // Redirect to the updated post
    }
    public function destroy(Post $post)
    {
        $post->delete(); // Delete the post
        return redirect()->route('posts.index'); // Redirect to the posts index after deleting
    }
}
