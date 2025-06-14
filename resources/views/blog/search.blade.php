@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Search Blog Posts</h1>
    <form action="{{ route('blog.search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Search for posts..." value="{{ request('query') }}">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    @if(isset($posts) && $posts->count())
        <h2>Search Results</h2>
        <ul class="list-group">
            @foreach($posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
                    <span class="text-muted float-end">{{ $post->created_at->format('M d, Y') }}</span>
                </li>
            @endforeach
        </ul>
        <div class="mt-3">
            {{ $posts->links() }}
        </div>
    @elseif(request('query'))
        <p>No results found for "{{ request('query') }}".</p>
    @endif
</div>
@endsection
