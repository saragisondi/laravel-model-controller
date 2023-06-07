<header>
  <nav class="navbar-dark bg-primary-subtle fw-bold ">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link active link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover {{Route::currentRouteName() === 'home' ? 'active' : '' }} " aria-current="page" href="{{route('home')}}">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{route('movies')}}">Film</a>
      </li>
    </ul>
  </nav>
</header>
