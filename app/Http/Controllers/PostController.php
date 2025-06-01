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
        /* PRIMERO
        //return $request->all(); // Return all request data as JSON
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug; // Generate a slug from the title
        $post->content = $request->content;
        $post->categoria = $request->category;
        $post->save();
        //return redirect('/posts'); // Redirect to the posts index after storing
        return redirect()->route('posts.index'); // Redirect to the newly created post
        */
        Post::create([
            'title' => $request->title,
            'slug' => $request->slug, // Generate a slug from the title
            'content' => $request->content,
            'categoria' => $request->category,
        ]);
        return redirect()->route('posts.index'); // Redirect to the posts index after storing
    }
    public function edit(Post $post)
    {
        // $post = Post::find($post); // Find the post by ID // No longer needed since we are using route model binding
        return view('posts.edit', compact('post')); // Return the edit view with the post data
    }
    public function show(Post $post) //Antes parametro era $post
    {
        //$post = Post::find($post); // Find the post by ID // No longer needed since we are using route model binding
        return view('posts.show', compact('post')); //['post' => 'Hola mundo']
    }
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.show', $post); // Redirect to the updated post
        /* OPCION UNO NO TAN SEGURA
        //$post = Post::find($post); // Find the post by ID // No longer needed since we are using route model binding
        $post->title = $request->title;
        $post->slug = $request->slug; // Generate a slug from the title
        $post->content = $request->content;
        $post->categoria = $request->category;
        $post->save();
        //return redirect('/posts/'.$post); // Redirect to the posts index after updating
        return redirect()->route('posts.show', $post); // Redirect to the updated post'); // Redirect to the updated post
        */
    }
    public function destroy(Post $post)
    {
        //$post = Post::find($post); // Find the post by ID // No longer needed since we are using route model binding
        $post->delete(); // Delete the post
        //return redirect('/posts'); // Redirect to the posts index after deleting
        return redirect()->route('posts.index'); // Redirect to the posts index after deleting
    }
}
