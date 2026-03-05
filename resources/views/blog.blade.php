@extends('layouts.landing')

@section('content')
    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Our blog</span>
                        <h1 class="text-capitalize mb-5 text-lg text-white">Blog articles</h1>
                        @if (app()->getLocale() === 'sw')
                            <p class="text-white-50 mb-0 small">Inaonyesha kwa Kiswahili. <a href="{{ url('locale/en') }}" class="text-white text-underline">English</a></p>
                        @else
                            <p class="text-white-50 mb-0 small">Viewing in English. </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (request('query'))
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <h4 class="text-muted">Search results for "{{ request('query') }}"</h4>
                    </div>
                </div>
            @endif

            <div class="row">
                <div class="col-lg-8">
                    @if ($posts->count())
                        @foreach ($posts as $post)
                            @php
                                $postTitle = $post->getTranslatedAttribute('title') ?: 'Untitled';
                                $postContent = $post->getTranslatedAttribute('content');
                            @endphp
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="blog-item card border-0 shadow-sm">
                                    @if ($post->image)
                                        <div class="blog-thumb">
                                            <img src="{{ asset('blog_images/' . basename($post->image)) }}" alt="{{ $postTitle }}" class="blog-post-image card-img-top" style="object-fit: cover; height: 280px;">
                                        </div>
                                    @else
                                        <div class="blog-thumb bg-light d-flex align-items-center justify-content-center" style="height: 200px;">
                                            <i class="icofont-newspaper text-muted" style="font-size: 3rem;"></i>
                                        </div>
                                    @endif
                                    <div class="blog-item-content card-body">
                                        <div class="blog-item-meta mb-3 mt-2">
                                            <span class="text-muted text-capitalize mr-3">
                                                <i class="icofont-comment mr-2"></i>{{ $post->comments_count ?? $post->comments->count() ?? 0 }} Comments
                                            </span>
                                            <span class="text-black text-capitalize mr-3">
                                                <i class="icofont-calendar mr-1"></i>{{ $post->created_at->format('jS M Y') }}
                                            </span>
                                            @if ($post->category)
                                                <span class="text-muted"><i class="icofont-folder mr-1"></i>{{ $post->category->name }}</span>
                                            @endif
                                        </div>

                                        <h2 class="mt-3 mb-3 h5">
                                            <a href="{{ route('blog.show', $post->id) }}" class="text-dark">{{ $postTitle }}</a>
                                        </h2>

                                        <p class="mb-4 text-muted">{{ Str::limit(strip_tags($postContent), 150, '...') }}</p>

                                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                {{ $posts->links() }}
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12 py-5 text-center">
                            <i class="icofont-search-folder text-muted" style="font-size: 4rem;"></i>
                            <p class="mt-3 text-muted">No blog posts found{{ request('query') ? ' for "' . request('query') . '"' : '' }}.</p>
                            @if (request('query'))
                                <a href="{{ route('blog') }}" class="btn btn-main btn-round-full">View all posts</a>
                            @endif
                        </div>
                    @endif
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
                        <div class="sidebar-widget search mb-4">
                            <h5>Search Here</h5>
                            <form action="{{ route('blog') }}" method="GET" class="mb-0">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control" placeholder="Search for posts..." value="{{ request('query') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-main btn-round-full" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="sidebar-widget latest-post mb-4">
                            <h5>Popular Posts</h5>
                            @foreach ($popularPosts as $popular)
                                @php
                                    $popTitle = $popular->getTranslatedAttribute('title') ?: 'Untitled';
                                @endphp
                                <div class="py-2 border-bottom border-light">
                                    <span class="text-sm text-muted">{{ $popular->created_at->format('d M Y') }}</span>
                                    <h6 class="my-2"><a href="{{ route('blog.show', $popular->id) }}">{{ $popTitle }}</a></h6>
                                </div>
                            @endforeach
                        </div>

                        <div class="sidebar-widget schedule-widget mb-4">
                            <h5 class="mb-4">Time Schedule</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center py-2">
                                    <a href="#">Monday - Friday</a>
                                    <span>8:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-2">
                                    <a href="#">Saturday</a>
                                    <span>9:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center py-2">
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
