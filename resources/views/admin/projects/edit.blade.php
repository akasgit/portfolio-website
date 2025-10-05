@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Project</h1>

    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $project->description }}</textarea>
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="url" name="project_url" class="form-control" value="{{ $project->project_url }}">
        </div>

        <div class="form-group">
            <label>Image</label><br>
            @if($project->featured_image)
                <img src="{{ asset('storage/'.$project->featured_image) }}" width="100" class="mb-2">
            @endif
            <input type="file" name="featured_image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
