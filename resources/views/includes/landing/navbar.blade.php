<!-- ======= Header ======= -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top transition-colors duration-300 bg-transparent">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="\img\laporpak.png" alt="Logo Laporpak" class="me-2" style="height: 70px;"> <!-- Ganti path-to-your-logo.png dengan URL atau path logo Anda -->
      </a>
      <!-- Hamburger Menu for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar Links and Buttons -->
    
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Centered Navigation Links -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link nav-text-large nav-hover-effect" href="/">Beranda</a>
          </li>



          @if(Auth::user()?->roles == "ADMIN")

          <li class="nav-item">
            <a class="nav-link nav-text-large nav-hover-effect" href="{{ url('admin/pengaduans')}} ">Laporan</a>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link nav-text-large nav-hover-effect" href="{{ url('user/pengaduan')}} ">Laporan</a>
          </li>
          @endif
  
          
          
          <li class="nav-item">
            <a class="nav-link nav-text-large nav-hover-effect" href="/team">Tim</a>
          </li>
        </ul>

        <!-- Login and Register Buttons -->
        @if(!Auth::user())
        <div class="d-flex ms-lg-3">
          <a href="{{ url('login')}}" class="border-solid">Login</a>
          <a href="{{ url('register')}}" class="border-solid"">Register</a>
        </div>
        @else
        <form method="POST" action="{{ route('logout') }}"
        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200">
        @csrf
        <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
          href="{{ route('logout') }} " onclick="event.preventDefault();
          this.closest('form').submit();">
          <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
            <path
              d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
            </path>
          </svg>
          <span>Log out</span>
        </a>
      </form>
        @endif
      </div>
    </div>
  </nav>

