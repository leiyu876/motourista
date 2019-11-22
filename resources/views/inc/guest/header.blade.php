<header class="site-navbar site-navbar-target" role="banner">

  <div class="container">
    <div class="row align-items-center position-relative">

      <div class="col-3 ">
        <div class="site-logo">
          <a href="index.html" class="font-weight-bold">Capture</a>
        </div>
      </div>

      <div class="col-9  text-right">
        

        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

        

        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
          <ul class="site-menu main-menu js-clone-nav ml-auto ">
            <li class="{{ Request::is('/') ? 'active' : '' }}" >
              <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="{{ Request::is('about') ? 'active' : '' }}" >
              <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
            <li class="{{ Request::is('photography') ? 'active' : '' }}" >
              <a href="{{ route('photography') }}" class="nav-link">photography</a>
            </li>
            <li><a href="event.html" class="nav-link">Event</a></li>
            <li><a href="contact.html" class="nav-link">Contact</a></li>
          </ul>
        </nav>
      </div>

      
    </div>
  </div>

</header>