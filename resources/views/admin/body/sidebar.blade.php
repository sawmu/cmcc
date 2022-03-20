<!-- partial:partials/_sidebar.html -->
@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp


<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Elora<span>CMS</span>
      </a>
      
    </div>
    <div class="sidebar-body">
      <ul class="nav">
       
        {{-- Dashboard --}}
        <li class="nav-item {{ ($prefix == '/dashboard')?'active':'' }}">
          <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>

        {{-- User Management  --}}
        <li class="nav-item {{ ($prefix == '/user')?'active':'' }}">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="archive"></i>
            <span class="link-title">Manage User</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('user.view') }}" class="nav-link">View User</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.add') }}" class="nav-link">Add User</a>
              </li>
            
            </ul>
          </div>
        </li>
        {{-- Manage Profile  --}}
        
        <li class="nav-item {{ ($prefix == '/profile')?'active':'' }}">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="user"></i>
            <span class="link-title">Manage Profile</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('profile.view') }}" class="nav-link">Your Profile</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('password.view') }}" class="nav-link">Change Password</a>
              </li>
              
            </ul>
          </div>
        </li>

        
       
      </ul>
    </div>
  </nav>
  {{-- <nav class="settings-sidebar">
    <div class="sidebar-body">
      <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
      </a>
      <h6 class="text-muted mb-2">Sidebar:</h6>
      <div class="mb-3 pb-3 border-bottom">
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
          <label class="form-check-label" for="sidebarLight">
            Light
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
          <label class="form-check-label" for="sidebarDark">
            Dark
          </label>
        </div>
      </div>
    
    </div>
  </nav> --}}
      <!-- partial -->