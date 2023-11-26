<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{asset('assets\img\shiaft.png')}}" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Shahariar Rahman</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="" class="https://twitter.com/ShahariarS73586"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/shaharier.all" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/shahariershifat/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/shahariarr/" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="https://www.linkedin.com/in/shahariar-shifat-6616a122b/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="{{route('home')}}" class="nav-link scrollto {{ Request::routeIs('home') ? 'active' : '' }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="{{route('about')}}" class="nav-link scrollto {{ Request::routeIs('about') ? 'active' : '' }}"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="{{route('project')}}" class="nav-link scrollto {{ Request::routeIs('project') ? 'active' : '' }}"><i class="bx bx-book-content"></i> <span>Project</span></a></li>
          <li><a href="{{route('contact')}}" class="nav-link scrollto {{ Request::routeIs('contact') ? 'active' : '' }}"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
