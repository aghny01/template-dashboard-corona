<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}" style="text-decoration: none">A D M I N</a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{ asset('assets/images/faces/face15.jpg') }}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>Admin</span>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <span class="menu-icon">
            <i class="mdi mdi-home"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
    
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('chef.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-chef-hat"></i>
          </span>
          <span class="menu-title">Chef</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('menu.index') }}">
          <span class="menu-icon">
            <i class="mdi mdi-menu"></i>
          </span>
          <span class="menu-title">Menu Makanan</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ route('home') }}" target="_blank">
          <span class="menu-icon">
            <i class="mdi mdi-web"></i>
          </span>
          <span class="menu-title">Home</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->