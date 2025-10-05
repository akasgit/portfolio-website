@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add Project</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="url" name="project_url" class="form-control">
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="file" name="featured_image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
