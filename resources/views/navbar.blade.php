 <div id="navbar-use">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar1 navbar-always">

    <a href="/index" class="navbar-brand"><img src="{{url('/images/main-logo.png')}}" alt="AP photography" id="w3s" width="90px" height="60px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
          <li class="nav-item list-1"><a href="/prewedding" class="nav-link">Pre-Wedding</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-2"><a href="/wedding" class="nav-link">Wedding</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-3"><a href="/modeling" class="nav-link">Modeling</a><div class="hover-line-1"></div></li>
          <li class="nav-item list-4"><a href="/kids" class="nav-link">Kids Shoot</a><div class="hover-line-1"></div></li>
          <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
          <li class="nav-item"><a href="/contactus" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="/photography" class="nav-link">Book Now</a></li>
              @if (session('email'))
              <li class="nav-item list-7"><a href="/logout" class="nav-link">Admin Logout</a><div class="hover-line-1"></div></li>
              @else
               <li class="nav-item list-7"><a href="/admin" class="nav-link">Admin Login</a><div class="hover-line-1"></div></li>
              @endif
               @if (session('userdata'))
              <li class="nav-item list-7"><a href="/logout" class="nav-link">Logout</a><div class="hover-line-1"></div></li>
              @else
               <li class="nav-item list-7"><a href="/createuser" class="nav-link">Sign Up</a><div class="hover-line-1"></div></li>
               <li class="nav-item list-7"><a href="/login" class="nav-link">Login</a><div class="hover-line-1"></div></li>
              @endif
      </ul>
    </div>
  </nav>
 </div>
 <br><br><br><br>   
 @yield('nav_content')