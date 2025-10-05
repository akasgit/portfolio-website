<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Aryal Akash | Portfolio')</title>

  <!-- Meta -->
  <meta name="description" content="@yield('meta_description', 'Portfolio of Aryal Akash - Web Developer & Designer')" />
  
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/favicon/favicon-32x32.png') }}" />

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @stack('styles')
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <h1 id="logo">
        <a href="{{ url('/') }}"><img src="{{ asset('assets/logo.png') }}" alt="Aryal Akash Logo"></a>
      </h1>

      <ul class="nav-menu">
        <li><a class="nav-link" href="{{ url('/') }}">Home</a></li>
        <li><a class="nav-link" href="{{ url('/projects') }}">Projects</a></li>
        <li><a class="nav-link" href="{{ url('/blog') }}">Blog</a></li>
      
        <li>
          <a class="nav-link btn btn-primary" href="{{ url('/contact') }}" >
            Contact <i class="fas fa-arrow-right"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer id="footer">
    <div class="container">
      <a href="mailto:aryalakash@gmail.com">akaash.aryal@gmail.com</a>

      <div class="social">
        <a href="#"><img src="{{ asset('assets/facebook-icon.svg') }}" alt="Facebook" /></a>
        <a href="#"><img src="{{ asset('assets/twitter-icon.svg') }}" alt="Twitter" /></a>
        <a href="#"><img src="{{ asset('assets/linkedin-icon.svg') }}" alt="LinkedIn" /></a>
        <a href="#"><img src="{{ asset('assets/github-icon.svg') }}" alt="GitHub" /></a>
      </div>

      <p>© {{ date('Y') }} Aryal Akash — All Rights Reserved</p>
    </div>
  </footer>

  <!-- JS -->
  <script src="{{ asset('js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
