@extends('front.layouts.app')

@section('title', 'Blog | Aryal Akash')
@section('content')

<section id="blog" class="container">
  <div class="content-text">
    <h2>Blog</h2>
    <p>Insights, tutorials, and thoughts from my tech journey</p>
  </div>

  <div class="blog-posts">
    @foreach ($blogs as $blog)
      <div class="card">
        @if($blog->featured_image)
          <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}" class="blog-image">
        @endif
        <h3>{{ $blog->title }}</h3>
        <p>{{ Str::limit(strip_tags($blog->content), 120) }}</p>
        <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-secondary">Read More</a>
      </div>
    @endforeach
  </div>

  <div class="pagination mt-4">
    {{ $blogs->links() }}
  </div>
</section>

@endsection
