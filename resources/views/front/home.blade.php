@extends('front.layouts.app')

@section('title', 'Home | Aryal Akash')
@section('content')

<header id="hero">
  <section class="header-container">
    <img class="profile-image" src="{{ asset('assets/profile-image.svg') }}" alt="Aryal Akash" />
    <h1>Hi, I'm Aryal Akash</h1>
    <div class="content-text">
      <h2>Building digital</h2>
      <h2>products, brands, and experiences</h2>
      <p>A web developer passionate about clean code, modern design, and meaningful digital experiences.</p>
    </div>
    <a href="{{ url('/contact') }}" class="btn btn-secondary">Connect With Me</a>
  </section>
</header>

@endsection
