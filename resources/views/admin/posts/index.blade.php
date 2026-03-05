<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <div class="col-12">
                        <!-- Page Header -->
                        <div class="page-header card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                                    <div>
                                        <h4 class="mb-1">Blog Posts</h4>
                                        <p class="text-muted mb-0">Manage posts. New posts appear on the public blog.</p>
                                    </div>
                                    <a href="{{ route('admin.posts.create') }}" class="btn btn-brand">
                                        <i class="ti-plus me-1"></i> Create Post
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show m-4 mb-0" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show m-4 mb-0" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @endif

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table table-hover align-middle posts-admin-table">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 60px;">Image</th>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Date</th>
                                                <th class="text-center">Comments</th>
                                                <th class="text-end" style="width: 140px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($posts as $post)
                                                <tr>
                                                    <td>
                                                        @if ($post->image)
                                                            <img src="{{ asset('blog_images/' . basename($post->image)) }}" alt="" class="posts-table-thumb" loading="lazy">
                                                        @else
                                                            <div class="posts-table-thumb posts-table-thumb-placeholder">
                                                                <i class="ti-image"></i>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <span class="posts-table-title">{{ Str::limit($post->getTranslatedAttribute('title', 'en') ?: '—', 50) }}</span>
                                                    </td>
                                                    <td><span class="text-muted">{{ $post->user->name ?? '—' }}</span></td>
                                                    <td><span class="text-muted">{{ $post->created_at->format('d M Y') }}</span></td>
                                                    <td class="text-center">
                                                        <span class="badge bg-light text-dark">{{ $post->comments_count ?? 0 }}</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-brand-outline" title="Edit post">
                                                                <i class="ti-pencil-alt"></i>
                                                            </a>
                                                            <a href="{{ route('blog.show', $post->id) }}" class="btn btn-brand-outline" target="_blank" rel="noopener" title="View on blog">
                                                                <i class="ti-eye"></i>
                                                            </a>
                                                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this post? This cannot be undone.');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger-outline" title="Delete post">
                                                                    <i class="ti-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center py-5 text-muted">
                                                        <i class="ti-files d-block mb-2" style="font-size: 2rem;"></i>
                                                        No posts yet. <a href="{{ route('admin.posts.create') }}">Create one</a>.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                @if ($posts->hasPages())
                                    <div class="card-footer border-top bg-light">
                                        {{ $posts->links() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .btn-brand { background: #066d44; color: #fff; border: none; border-radius: 6px; }
    .btn-brand:hover { background: #055a38; color: #fff; }
    .btn-brand-outline { background: #fff; color: #066d44; border: 1px solid #066d44; border-radius: 6px; }
    .btn-brand-outline:hover { background: #f4f9fc; color: #055a38; }
    .btn-danger-outline { background: #fff; color: #dc3545; border: 1px solid #dc3545; border-radius: 6px; }
    .btn-danger-outline:hover { background: #fff5f5; color: #bb2d3b; }
    .posts-admin-table .table-light th { font-weight: 600; color: #495057; }
    .posts-table-thumb { width: 48px; height: 48px; object-fit: cover; border-radius: 6px; display: block; }
    .posts-table-thumb-placeholder { background: #e9ecef; display: flex; align-items: center; justify-content: center; color: #adb5bd; font-size: 1.25rem; }
    .posts-table-title { font-weight: 500; }
    .btn-group .btn { padding: 0.35rem 0.5rem; }
</style>
