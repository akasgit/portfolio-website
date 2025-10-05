@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Edit Category</h2>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>


        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
