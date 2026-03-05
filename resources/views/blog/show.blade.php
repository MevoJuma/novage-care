@extends('layouts.landing')

@php
    $postTitle = $post->getTranslatedAttribute('title') ?: __('Untitled');
    $rawContent = $post->getTranslatedAttribute('content');
    // Display exactly as in the admin edit textarea: preserve newlines, escape HTML
    $postContent = nl2br(e($rawContent));
    $commentsCount = $post->comments->count();
@endphp

@section('title', $postTitle . ' - Novage Care')

@section('content')

<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block">
                    <h1 class="text-capitalize mb-5 text-lg text-white">{{ $postTitle }}</h1>
                    <span class="text-white">Blog Details</span>
                
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog-wrap">
    <div class="container" style="max-width: 1000px">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 mb-5">
                        <div class="single-blog-item">
                            @if ($post->image)
                                <img src="{{ asset('blog_images/' . basename($post->image)) }}" alt="{{ $postTitle }}" class="img-fluid rounded shadow mb-4" style="width: 100%; object-fit: cover;">
                            @else
                                <div class="bg-light rounded shadow-sm mb-4 d-flex align-items-center justify-content-center" style="height: 280px;">
                                    <i class="icofont-newspaper text-muted" style="font-size: 3rem;"></i>
                                </div>
                            @endif
                            <div class="blog-item-content mt-4">
                                <div class="blog-item-meta mb-3">
                                    <span class="text-muted mr-3">
                                        <i class="icofont-calendar mr-1"></i>{{ $post->created_at->format('M d, Y') }}
                                    </span>
                                    <span class="text-muted">
                                        <i class="icofont-comment mr-1"></i>{{ $commentsCount }} {{ $commentsCount === 1 ? 'Comment' : 'Comments' }}
                                    </span>
                                </div>

                                <h2 class="mb-4">{{ $postTitle }}</h2>

                                <div class="lead blog-content blog-content-formatted" style="line-height: 1.8;">
                                    {!! $postContent !!}
                                </div>

                                <div class="social-share mt-5 clearfix">
                                    <ul class="list-inline float-left">
                                        <li class="list-inline-item">Share:</li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="col-lg-12">
                    <div class="comment-area mt-4 mb-5">
                        <h4 class="mb-4">{{ $commentsCount }} {{ $commentsCount === 1 ? 'Comment' : 'Comments' }}</h4>

                        @foreach ($post->comments as $comment)
                            <div class="media mb-4">
                                <img src="{{ asset('images/blog/user.jpg') }}" class="mr-3 rounded-circle border" alt="User" width="50" height="50" onerror="this.style.display='none'">
                                <div class="media-body">
                                    <h6 class="mt-0 mb-1 font-weight-bold">{{ $comment->name }}</h6>
                                    <small class="text-muted d-block mb-1">{{ $comment->created_at->format('M d, Y') }}</small>
                                    <p class="mb-0">{{ $comment->comment }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="comment-form bg-light p-4 rounded shadow-sm">
                        <h4 class="mb-3">Leave a Comment</h4>
                        <form action="{{ route('comments.store', $post->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_id" value="{{ $post->id }}">

                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email Address" required>
                            </div>

                            <div class="form-group">
                                <textarea name="comment" rows="5" class="form-control" placeholder="Your Comment" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-main btn-round-full">Post Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
/* Preserve pasted structure: lists, headings, paragraphs */
.blog-content-formatted {
    white-space: normal;
}
.blog-content-formatted p {
    margin-bottom: 1rem;
}
.blog-content-formatted p:last-child {
    margin-bottom: 0;
}
.blog-content-formatted ul,
.blog-content-formatted ol {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
}
.blog-content-formatted ul {
    list-style-type: disc;
}
.blog-content-formatted ol {
    list-style-type: decimal;
}
.blog-content-formatted li {
    margin-bottom: 0.35rem;
}
.blog-content-formatted li::marker {
    color: inherit;
}
.blog-content-formatted h1,
.blog-content-formatted h2,
.blog-content-formatted h3,
.blog-content-formatted h4 {
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
    font-weight: 600;
    line-height: 1.3;
}
.blog-content-formatted h1 { font-size: 1.75rem; }
.blog-content-formatted h2 { font-size: 1.5rem; }
.blog-content-formatted h3 { font-size: 1.25rem; }
.blog-content-formatted h4 { font-size: 1.1rem; }
.blog-content-formatted h1:first-child,
.blog-content-formatted h2:first-child,
.blog-content-formatted h3:first-child,
.blog-content-formatted h4:first-child {
    margin-top: 0;
}
.blog-content-formatted strong { font-weight: 600; }
.blog-content-formatted em { font-style: italic; }
.blog-content-formatted blockquote {
    margin: 1rem 0;
    padding: 0.5rem 0 0.5rem 1rem;
    border-left: 4px solid #066d44;
    color: #555;
}
</style>
@endpush
@endsection
