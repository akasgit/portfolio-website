<!DOCTYPE html>
<html>
<head>
  <title>Admin - Portfolio</title>
  @vite('resources/css/app.css')
</head>
<body class="p-6">
  <nav class="mb-6">
    <a href="{{ route('admin.blogs.index') }}" class="mr-4">Blogs</a>
    <a href="{{ route('admin.projects.index') }}" class="mr-4">Projects</a>
    <a href="{{ route('admin.services.index') }}" class="mr-4">Services</a>
    <a href="{{ route('admin.testimonials.index') }}" class="mr-4">Testimonials</a>
    <a href="{{ route('admin.contacts.index') }}" class="mr-4">Contacts</a>
  </nav>

  @if(session('success'))
    <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  @yield('content')
</body>
</html>
