@extends('front.layouts.app')

@section('title', 'Contact | Aryal Akash')
@section('content')

<section id="contact" class="container">
  <div class="content-text">
    <h2>Contact Me</h2>
     @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <p>Feel free to reach out for collaborations or inquiries.</p>
  </div>

  <form action="{{ route('contact.submit') }}" class="contact-form" method="POST" action="#">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" rows="5" placeholder="Your Message"></textarea>
    <button type="submit" class="btn btn-primary">Send Message</button>
  </form>
</section>

@endsection
