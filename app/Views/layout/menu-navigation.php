<!-- <div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar site-navbar-target" role="banner">

  <div class="container">
    <div class="row align-items-center position-relative">

      <div class="col-3">
        <div class="site-logo">
          <a href="/" class="font-weight-bold">EMP</a>
        </div>
      </div>

      <div class="col-9  text-right">
        <span class="d-inline-block d-lg-none"><a href="#" class="text-primary site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-dark"></span></a></span>

        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto ">
            <li class="active"><a href="/" class="nav-link">Home</a></li>
            <li><a href="/employees/" class="nav-link">Employees</a></li>
            <li><a href="/users" class="nav-link">Users</a></li>
            <li><a href="/profile" class="nav-link">Profile</a></li>
          </ul>
        </nav>
      </div>


    </div>
  </div>

</header> -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="banner">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="/"><span>Logo</span></a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/employees/">Employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/users">Users</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Profile
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/profile">Edit Profile</a>
            <a class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>