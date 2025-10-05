<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.projects.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Nav Item -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.projects.index') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Projects</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.blogs.index') }}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blogs</span>
        </a>
    </li>

     <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.categories.index') }}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Blog Category</span>
        </a>
    </li>

 

        <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.contacts.index') }}">
            <i class="fas fa-fw fa-blog"></i>
            <span>Contact Messages   @if($unreadMessageCount > 0)
                <span class="badge bg-danger">{{ $unreadMessageCount }}</span>
            @endif</span>
        </a>
    </li>

    <!-- Add more links here -->
</ul>
