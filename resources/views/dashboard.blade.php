@extends('layouts.admin')

@section('title', 'Projects')

@section('content')
    

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

  

    <div class="card shadow mb-4">
        <div class="card-body">
        
        </div>
    </div>
@endsection
