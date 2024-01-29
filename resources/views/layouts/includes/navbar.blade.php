<header class="navigation fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="index.html">
          <img class="img-fluid" width="100px" src="{{asset('usr_assets/images/logo.png')}}"
            alt="Astroacademy">
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Astro-Topic <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="https://science.nasa.gov/universe/galaxies/">Galaxy</a>

                <a class="dropdown-item" href="index-full-left.html">Solar System</a>

                <a class="dropdown-item" href="index-full-right.html">Universe</a>

                <a class="dropdown-item" href="index-list.html">Sun</a>

                <a class="dropdown-item" href="index-list-left.html">Blackhole</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                About <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="https://bd.linkedin.com/in/papan-banik-3a7338161">About Me</a>

                <a class="dropdown-item" href="about-us.html">About Us</a>
              </div>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
              </a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="author.html">Author</a>

                <a class="dropdown-item" href="author-single.html">Author Single</a>

                <a class="dropdown-item" href="advertise.html">Advertise</a>

                <a class="dropdown-item" href="post-details.html">Post Details</a>

                <a class="dropdown-item" href="post-elements.html">Post Elements</a>
              </div>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  Course <i class="ti-angle-down ml-1"></i>
                </a>
                <div class="dropdown-menu">

                  <a class="dropdown-item" href="#">BasicAstronomy</a>

                  <a class="dropdown-item" href="#">AdvanceAstronomy</a>
                </div>
            </li>
        </ul>
        </div>

        <div class="order-2 order-lg-3 d-flex align-items-center">
            <ul class="nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              Account <i class="ml-1 ti-angle-down"></i>
            </a>
        <div class="dropdown-menu">
            @auth
            <a class="dropdown-item" href="#">{{ auth()->user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
            </form>
            @else
            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
            @endauth

          </div>
          </li>
            </ul>
          <!-- search -->
          <form class="search-bar">
            <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
          </form>

          <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
            <i class="ti-menu"></i>
          </button>
        </div>

      </nav>
    </div>
  </header>
