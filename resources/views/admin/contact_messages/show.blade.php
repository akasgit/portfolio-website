@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2>Message Details</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Name:</strong> {{ $contact->name }}</p>
            <p><strong>Email:</strong> {{ $contact->email }}</p>
            <p><strong>Subject:</strong> {{ $contact->subject ?? 'No subject' }}</p>
            <p><strong>Message:</strong><br>{{ $contact->message }}</p>
            <p><strong>Received at:</strong> {{ $contact->created_at?->format('d M Y, h:i A') ?? 'N/A' }}</p>


            <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary mt-3">Back to Messages</a>
        </div>
    </div>
</div>
@endsection
