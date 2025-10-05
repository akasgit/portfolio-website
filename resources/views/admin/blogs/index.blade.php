@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Blogs</h1>

    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3">Add Blog</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Category</th>
                <th>Published</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $key => $blog)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->category?->name ?? '—' }}</td>
                <td>{{ $blog->is_published ? 'Yes' : 'No' }}</td>
                <td>
                    @if($blog->featured_image)
                        <img src="{{ asset('storage/'.$blog->featured_image) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" style="display:inline-block;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this blog?')" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $blogs->links() }}
</div>
@endsection
