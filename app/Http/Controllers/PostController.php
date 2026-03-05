<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = request()->input('query');
        $posts = Post::withCount('comments')
            ->when($query, function ($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%')
                    ->orWhere('content', 'like', '%' . $query . '%');
            })
            ->latest()
            ->paginate(10);

        $popularPosts = Post::withCount('comments')
            ->latest()
            ->take(5)
            ->get();

        $categories = \App\Models\Category::withCount('posts')
            ->orderBy('posts_count', 'desc')
            ->take(5)
            ->get();

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
     * Display a listing of posts (admin).
     */
    public function indexForAdmin()
    {
        $posts = Post::with('user')->withCount('comments')->latest()->paginate(15);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post (admin).
     */
    public function createForAdmin()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $imagePath = null;
        if ($request->hasFile('image')) {
            try {
                $dir = public_path('blog_images');
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                }
                $file = $request->file('image');
                $name = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move($dir, $name);
                $imagePath = $name;
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed.']);
            }
        }

        $post = new Post([
            'image' => $imagePath,
            'user_id' => $request->user()->id,
        ]);

        foreach (['en', 'sw'] as $locale) {
            $post->setTranslation('title', $locale, $validated['title'][$locale]);
            $post->setTranslation('content', $locale, $validated['content'][$locale]);
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Blog post published! It is now visible on the blog page.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        // $post = Post::findOrFail($id);
        $post = Post::with(['comments'])->where('id', $id)->findOrFail($id);
        return view('blog.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource (admin).
     */
    public function edit(Request $request, Post $post)
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403);
        }
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage (admin).
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            try {
                $dir = public_path('blog_images');
                if (!is_dir($dir)) {
                    mkdir($dir, 0755, true);
                }
                $file = $request->file('image');
                $name = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move($dir, $name);
                $post->image = $name;
            } catch (\Exception $e) {
                return back()->withErrors(['image' => 'Image upload failed.']);
            }
        }

        foreach (['en', 'sw'] as $locale) {
            $post->setTranslation('title', $locale, $validated['title'][$locale]);
            $post->setTranslation('content', $locale, $validated['content'][$locale]);
        }

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage (admin).
     */
    public function destroy(Request $request, Post $post)
    {
        if (!$request->user()->hasRole('admin')) {
            abort(403);
        }
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
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
