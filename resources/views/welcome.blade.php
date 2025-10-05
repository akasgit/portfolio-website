<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Meta Info -->
  <title>Aryal Akash | Portfolio</title>
  <meta name="title" content="Aryal Akash - Web Developer & Designer" />
  <meta name="description" content="I'm Aryal Akash — a web developer passionate about creating modern, fast, and responsive digital experiences." />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
  <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}">

  <!-- Fonts & Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <header id="hero">
    <!-- Navbar -->
    <nav class="navbar">
      <div class="container">
        <h1 id="logo">
          <a href="/"><img src="{{ asset('assets/logo.png') }}" alt="Aryal Akash Logo" /></a>
        </h1>

        <ul class="nav-menu">
          <li><a class="nav-link" href="#projects">Projects</a></li>
          <li><a class="nav-link" href="#blog">Blog</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li>
            <a class="nav-link btn btn-primary" href="{{ asset('assets/AryalAkash_Resume.pdf') }}" target="_blank">
              Resume <i class="fas fa-arrow-right"></i>
            </a>
          </li>

          <div class="theme-switch">
            <input type="checkbox" id="switch" />
            <label class="toggle-icons" for="switch">
              <img class="moon" src="{{ asset('assets/moon.svg') }}" />
              <img class="sun" src="{{ asset('assets/sun.svg') }}" />
            </label>
          </div>
        </ul>

        <div class="hamburger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section class="header-container">
      <img class="profile-image" src="{{ asset('assets/profile-image.svg') }}" alt="Aryal Akash" />
      <h1>Hi, I'm Aryal Akash</h1>
      <div class="content-text">
        <h2>Building digital</h2>
        <h2>products, brands, and experiences</h2>
        <p>
          A web developer passionate about clean code, modern design, and building meaningful digital solutions.
        </p>
      </div>
      <a href="#contact" class="btn btn-secondary">Connect With Me</a>
    </section>
  </header>

  <!-- Projects Section -->
  <section id="projects" class="project-container container">
    <div class="division"></div>
    <div class="content-text">
      <h2>Projects</h2>
