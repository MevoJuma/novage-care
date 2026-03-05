@extends('layouts.landing')

@php
    $postTitle = $post->getTranslatedAttribute('title') ?: __('Untitled');
    $postContent = $post->getTranslatedAttribute('content');
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
                    @if (app()->getLocale() === 'sw')
                        <p class="text-white-50 mb-0 small mt-2"><a href="{{ url('locale/en') }}" class="text-white text-underline">English</a></p>
                    @else
                        <p class="text-white-50 mb-0 small mt-2"></p>
                    @endif
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

                                <div class="lead blog-content" style="line-height: 1.8;">
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
@endsection
