<nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-stretch">
            <div class="col-3 d-flex align-items-center">
              <a class="navbar-brand" href="index.html">Spring<span>Church</span></a>
            </div>
                <div class="col-9 d-flex align-items-center text-right">
              <ul class="ftco-social mt-2 mr-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>

              <button class="navbar-toggler d-flex align-items-center" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="pt-1 mr-1">Menu</span> <span class="oi oi-menu"></span>
              </button>
          </div>


      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ Route::currentRouteName() == 'home'? 'active' : ''}}"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'about'? 'active' : ''}}" ><a href="{{ route('about') }}" class="nav-link">About</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'ministries'? 'active' : ''}}"><a href="{{ route('ministries') }}" class="nav-link">Ministries</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'sermons'? 'active' : ''}}"><a href="{{ route('sermons') }}" class="nav-link">Sermons</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'upcomingevent'? 'active' : ''}}"><a href="{{ route('upcomingevent') }}" class="nav-link">Upcoming Events</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'blogs'? 'active' : ''}}"><a href="{{ route('blogs') }}" class="nav-link">Blog</a></li>
          <li class="nav-item {{ Route::currentRouteName() == 'contact'? 'active' : ''}}"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
