<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of Posts.
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::take(10)->get()
        ]);
    }

    /**
     * Show the form for creating a new Post.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created Post in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|min:10',
            'slug' => 'required|min:10|unique:posts,slug',
            'body' => 'required|min:10',
        ])->validate();

        // Generate the slug if not provided by the user
        $validatedData['slug'] = $request->input('slug', Str::slug($validatedData['title']));

        // Create a new Post model object
        $post = Post::create($validatedData);

        // Redirect to the blog index page
        return Redirect::route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified Post.
     */
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified Post.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified Post in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Validate the request
        $validatedData = Validator::make($request->all(), [
            'title' => 'required|min:10',
            'slug' => 'required|min:10',
            'body' => 'required|min:10',
        ])->validate();

        // Generate the slug if not provided by the user
        $validatedData['slug'] = $validatedData['slug'] ?? Str::slug($validatedData['title']);

        // Update the post attributes with the validated data
        $post->fill($validatedData)->save();

        // Redirect to the blog show page
        return Redirect::route('posts.show', $post)->with('success', 'Post successfully updated');
    }

    /**
     * Show the form for deleting the specified Post.
     */
    public function delete(Post $post)
    {
        return view('posts.delete', [
            'post' => $post
        ]);
    }

    /**
     * Remove the specified Post from storage.
     */
    public function destroy(Post $post)
    {
        // Delete the post from the database
        $post->delete();

        // Redirect to the blog show page
        return Redirect::route('posts.index')
            ->with('success', 'Post successfully deleted');
    }
}
