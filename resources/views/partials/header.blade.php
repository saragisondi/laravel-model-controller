<header>
  <ul class="nav">
    <li class="nav-item active">
      <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }} " aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">Film</a>
    </li>
  </ul>
</header>
