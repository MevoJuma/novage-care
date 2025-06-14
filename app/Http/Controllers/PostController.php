<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        $popularPosts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $categories = \App\Models\Category::withCount('posts')
                        ->orderBy('posts_count', 'desc')
                        ->take(5)
                        ->get();

        $query = request()->input('query');
        $posts = Post::where('title', 'like', '%' . $query . '%')
                        ->orWhere('content', 'like', '%' . $query . '%')
                        ->latest()
                        ->paginate(10);

        return view('blog', compact('posts', 'popularPosts', 'query', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('blog_images', 'public');
            }

            Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        // $post = Post::findOrFail($id);
        $post = Post::with(['comments'])->where('id',$id)->findOrFail($id);
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
    /**
     * Search for posts by title.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'like', '%' . $query . '%')
                        ->orWhere('content', 'like', '%' . $query . '%')
                        ->latest()
                        ->paginate(10);

        return view('blog.search', compact('posts', 'query'));
    }

    /**
     * Filter posts by category.
     */
    public function filterByCategory($id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $posts = $category->posts()->latest()->paginate(10);
        $popularPosts = Post::withCount('comments')->orderBy('comments_count', 'desc')->take(3)->get();
        $categories = \App\Models\Category::withCount('posts')
                        ->orderBy('posts_count', 'desc')
                        ->take(5)
                        ->get();

        return view('blog', compact('posts', 'popularPosts', 'category', 'categories'));
    }
}
