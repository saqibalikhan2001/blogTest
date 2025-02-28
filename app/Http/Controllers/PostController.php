<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    // Show form to create a post
    public function create() {
        return view('posts.create');
    }

    // Store a new post
    public function store(Request $request) {
        // Validate the input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf,doc,docx|max:2048',
        ]);

        $user = auth('sanctum')->user();

        // Handle image upload
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/posts'), $file_name);

        // Create and save the new post
        $post = new Post;
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->added_by = isset($user->id) ? $user->id : 1 ;
        $post->content = $request->description;
        $post->image = $file_name;
        $post->save();

        // Redirect to the posts index page with a success message
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
