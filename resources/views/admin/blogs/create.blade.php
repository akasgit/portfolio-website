@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add Blog</h1>

    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Excerpt</label>
            <textarea name="excerpt" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control" rows="6"></textarea>
        </div>

        <div class="form-group">
            <label>Featured Image</label>
            <input type="file" name="featured_image" class="form-control">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" name="is_published" class="form-check-input" id="publishCheck" value="1">
            <label class="form-check-label" for="publishCheck">Publish Now</label>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
