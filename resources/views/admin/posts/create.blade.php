<x-app-layout>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="page-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Create Blog Post</h5>
                                <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-brand-outline">Back to Dashboard</a>
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

                                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mb-4">
                                        <label for="image">Blog Image</label>
                                        <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                    </div>

                                    @foreach (['en' => 'English', 'sw' => 'Swahili'] as $locale => $language)
                                        <hr class="my-4">
                                        <h6 class="text-muted">{{ $language }} Content</h6>

                                        <div class="form-group mb-3">
                                            <label for="title_{{ $locale }}">Title ({{ $language }})</label>
                                            <input type="text" name="title[{{ $locale }}]" id="title_{{ $locale }}"
                                                class="form-control" value="{{ old('title.'.$locale) }}" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="content_{{ $locale }}">Content ({{ $language }})</label>
                                            <textarea name="content[{{ $locale }}]" id="content_{{ $locale }}" rows="5"
                                                class="form-control" required>{{ old('content.'.$locale) }}</textarea>
                                        </div>
                                    @endforeach

                                    <button type="submit" class="btn btn-brand mt-3">
                                        <i class="ti-upload me-1"></i> Publish
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
