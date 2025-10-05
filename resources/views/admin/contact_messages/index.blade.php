@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>User Messages</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Read</th>
                <th>Received At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr class="{{ $message->is_read ? '' : 'table-warning' }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->is_read ? 'Yes' : 'No' }}</td>
                    <td>{{ $message->created_at->format('d M Y, h:i A') }}</td>

                    <td>
                    
                        <a href="{{ route('admin.contacts.show', $message->id) }}" class="btn btn-sm btn-info">View</a>
                        <form action="{{ route('admin.contacts.destroy', $message->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this message?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $messages->links() }}
</div>
@endsection
