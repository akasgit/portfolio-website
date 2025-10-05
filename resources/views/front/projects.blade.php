@extends('front.layouts.app')

@section('title', 'Projects | Aryal Akash')
@section('content')

<section id="projects" class="project-container container">
  <div class="content-text">
    <h2>My Projects</h2>
    <p>Here are some of my latest works</p>
  </div>

  <div class="project-grid">
    @foreach ($projects as $project)
    <div class="project-card">
      <div class="project-image" 
           style="background-image: url('{{ asset('storage/' . $project->featured_image) }}');">
      </div>

      <div class="project-details">
        <h3>
          @if($project->project_url)
            <a href="{{ $project->project_url }}" target="_blank" class="text-dark text-decoration-none">
              {{ $project->title }}
            </a>
          @else
            {{ $project->title }}
          @endif
        </h3>
        <p>{{ $project->description ?? 'Technology Stack not specified' }}</p>

      
      </div>
    </div>
    @endforeach
  </div>
</section>

@endsection
