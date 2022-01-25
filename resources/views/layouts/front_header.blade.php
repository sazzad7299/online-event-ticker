   <!-- Header Area wrapper Starts -->
   <header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="{{route('index')}}" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="navbar-nav mr-auto w-100 justify-content-end">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('show_cat_all')}}">
                Events
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="{{route('schedules')}}">
                schedules
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('gallery')}}">
                Gallery
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">
                About
              </a>
            </li>

            @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">
                Log in
              </a>
            </li> 
            @endguest
            @auth
            <li class="nav-item">
              <a class="nav-link">
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="border-radius: 50%;background: #ccc; color:black">
                    <em class="lni lni-user"></em>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="/home">Dashboard5</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit()">
                        {{ __('Logout') }}
                    </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
              </a>
            </li>
            @endauth
            
          </ul>
        </div>
      </div>
      

      <!-- Mobile Menu Start -->
      <ul class="mobile-menu">
        <li>
          <a class="page-scrool" href="{{route('index')}}">Home</a>
        </li>
        <li>
          <a class="page-scrool" href="{{route('about')}}">About</a>
        </li>
        <li>
           <a class="page-scroll" href="{{route('schedules')}}">Schedules</a>
        </li>

        <li>
          <a class="page-scroll" href="{{route('gallery')}}">Gallery</a>
        </li>

        <li>
          <a class="page-scroll" href="{{route('show_cat_all')}}">Events</a>
        </li>
        @guest
        <li>
          <a class="page-scroll" href="{{ route('login') }}">
            Log in
          </a>
        </li> 
        @endguest
        @auth
        <li>
          <a class="page-scroll" href="{{ route('home') }}">
            Dashboard
          </a>
        </li>
        @endauth
      </ul>
      <!-- Mobile Menu End -->

    </nav>
    <!-- Navbar End -->
  </header>

  <!-- Header Area wrapper End -->