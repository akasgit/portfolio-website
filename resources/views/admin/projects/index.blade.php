@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Projects</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">+ Add Project</a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->title }}</td>
                            <td>
                                @if($project->featured_image)
                                    <img src="{{ asset('storage/'.$project->featured_image) }}" width="60">
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display:inline-block">
                                    @csrf @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
