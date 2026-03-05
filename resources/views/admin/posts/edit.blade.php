<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Edit Post</h5>
                                <div>
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-sm btn-brand-outline">Back to list</a>
                                    <a href="{{ route('blog.show', $post->id) }}" class="btn btn-sm btn-brand-outline" target="_blank">View on blog</a>
                                </div>
                            </div>
                            <div class="card-block p-4">
                                @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
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

                                <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group mb-4">
                                        <label for="image">Blog Image</label>
                                        @if ($post->image)
                                            <div class="mb-2">
                                                <img src="{{ asset('blog_images/' . basename($post->image)) }}" alt="" class="rounded" style="max-height: 120px;">
                                                <p class="text-muted small mt-1">Current image. Upload a new file to replace.</p>
                                            </div>
                                        @endif
                                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                    </div>

                                    @foreach (['en' => 'English', 'sw' => 'Swahili'] as $locale => $language)
                                        <hr class="my-4">
                                        <h6 class="text-muted">{{ $language }} Content</h6>

                                        <div class="form-group mb-3">
                                            <label for="title_{{ $locale }}">Title ({{ $language }})</label>
                                            <input type="text" name="title[{{ $locale }}]" id="title_{{ $locale }}"
                                                class="form-control"
                                                value="{{ old('title.'.$locale, $post->getTranslatedAttribute('title', $locale)) }}"
                                                required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="content_{{ $locale }}">Content ({{ $language }})</label>
                                            <textarea name="content[{{ $locale }}]" id="content_{{ $locale }}" rows="5"
                                                class="form-control" required>{{ old('content.'.$locale, $post->getTranslatedAttribute('content', $locale)) }}</textarea>
                                        </div>
                                    @endforeach

                                    <button type="submit" class="btn btn-brand mt-3">
                                        <i class="ti-save me-1"></i> Update Post
                                    </button>
                                </form>
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
</style>
