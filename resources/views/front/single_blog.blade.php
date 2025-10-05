@extends('front.layouts.app')

@section('title', $blog->title . ' | Aryal Akash')

@section('content')
<section class="single-blog container">
  <div class="blog-header">
    <h1>{{ $blog->title }}</h1>
    <p class="blog-date">{{ $blog->created_at->format('F d, Y') }}</p>
  </div>

  @if($blog->featured_image)
    <div class="featured-image-container">
      <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="featured-image">
    </div>
  @endif

  <div class="blog-content">
    {!! $blog->body !!}
  </div>

  <div class="back-btn">
    <a href="{{ route('blog.index') }}" class="btn btn-secondary">← Back to Blog</a>
  </div>
</section>
@endsection
