@extends('layouts.landing')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our blog</span>
                        <h1 class="text-capitalize mb-5 text-lg">Blog articles</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        @if (session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @auth
            @if (auth()->user()->hasRole('admin'))
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mb-5">
                    @csrf

                    <div class="form-group">
                        <label for="image">Blog Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    @foreach (['en' => 'English', 'sw' => 'Swahili'] as $locale => $language)
                        <hr>
                        <h4>{{ $language }} Content</h4>

                        <div class="form-group">
                            <label for="title_{{ $locale }}">Title ({{ $language }})</label>
                            <input type="text" name="title[{{ $locale }}]" id="title_{{ $locale }}"
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="content_{{ $locale }}">Content ({{ $language }})</label>
                            <textarea name="content[{{ $locale }}]" id="content_{{ $locale }}" rows="5" class="form-control"
                                required></textarea>
                        </div>
                    @endforeach

                    <button type="submit" class="btn btn-main btn-round-full mt-3">Publish</button>
                </form>
            @endif
        @endauth

        @if (request('query'))
            <div class="col-lg-12 mb-3">
                <h4>Search results for "{{ request('query') }}":</h4>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="col-lg-12 col-md-12 mb-5">
                        @if ($posts->count())
                            @foreach ($posts as $post)
                                <div class="col-lg-12 col-md-12 mb-5">
                                    <div class="blog-item">
                                        <div class="blog-thumb">
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->title }}" class="blog-post-image">
                                        </div>
                                        <div class="blog-item-content">
                                            <div class="blog-item-meta mb-3 mt-4">
                                                <span class="text-muted text-capitalize mr-3"><i
                                                        class="icofont-comment mr-2"></i>{{ $post->comments->count() ?? 0 }}
                                                    Comments</span>
                                                <span class="text-black text-capitalize mr-3"><i
                                                        class="icofont-calendar mr-1"></i>
                                                    {{ $post->created_at->format('jS M Y') }}</span>
                                                <span class="text-muted"><i class="icofont-folder mr-1"></i>
                                                    {{ $post->category->name ?? 'Uncategorized' }}</span>
                                            </div>

                                            <h2 class="mt-3 mb-3">
                                                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                                            </h2>

                                            <p class="mb-4">{{ Str::limit(strip_tags($post->content), 150, '...') }}
                                            </p>

                                            <a href="{{ route('blog.show', $post->id) }}"
                                                class="btn btn-main btn-icon btn-round-full">Read More <i
                                                    class="icofont-simple-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        @else
                            <div class="col-lg-12">
                                <p>No blog posts found{{ request('query') ? ' for "' . request('query') . '"' : '' }}.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                        <div class="sidebar-widget search  mb-3 ">
                            <h5>Search Here</h5>
                            <form action="{{ route('blog') }}" method="GET" class="mb-4">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control"
                                        placeholder="Search for posts..." value="{{ request('query') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-main btn-round-full" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-widget latest-post mb-3">
                            <h5>Popular Posts</h5>
                            @foreach ($popularPosts as $popular)
                                <div class="py-2">
                                    <span
                                        class="text-sm text-muted">{{ $popular->created_at->format('d M Y') }}</span>
                                    <h6 class="my-2"><a
                                            href="{{ route('blog.show', $popular->id) }}">{{ $popular->title }}</a>
                                    </h6>
                                </div>
                            @endforeach
                        </div>

                        <div class="sidebar-widget schedule-widget mb-3">
                            <h5 class="mb-4">Time Schedule</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="#">Monday - Friday</a>
                                    <span>8:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="#">Saturday</a>
                                    <span>9:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <a href="#">Sunday</a>
                                    <span>10:00 - 17:00</span>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <h3>+255-7153-03510</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
