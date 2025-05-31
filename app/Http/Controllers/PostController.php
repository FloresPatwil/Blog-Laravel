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
        //return $posts; // Return all posts as JSON
        return view('posts.index', compact('posts')); // Assuming you have a view for posts
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        //return $request->all(); // Return all request data as JSON
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->categoria = $request->category;
        $post->save();
        return redirect('/posts'); // Redirect to the posts index after storing
    }
    public function edit($post)
    {
        $post = Post::find($post); // Find the post by ID
        return view('posts.edit', compact('post')); // Return the edit view with the post data
    }
    public function show($post)
    {
        $post = Post::find($post); // Find the post by ID
        return view('posts.show', compact('post')); //['post' => 'Hola mundo']
    }
    public function update(Request $request, $post)
    {
        $post = Post::find($post); // Find the post by ID
        $post->title = $request->title;
        $post->content = $request->content;
        $post->categoria = $request->category;
        $post->save();
        return redirect('/posts/'.$post->id); // Redirect to the posts index after updating
    }
    public function destroy($post)
    {
        return "Eliminando el post {$post}";
    }
}
