<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Najwa 194</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>

    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @auth
        <div class="d-flex ms-auto me-4">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-danger" >Logout</button>
          </form>
        </div>
      @else
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-5">
            <a class="nav-link {{ $title === "home" ? 'active' : '' }}" aria-current="page" href="/">Home</a>

          </li>
          <li class="nav-item mx-4">
            <a class="nav-link {{ $title === "profile" ? 'active' : '' }}" href="/profile">About Me</a>

          </li>

        </ul>
        <div class="d-flex me-4">
          <a class="nav-link {{ $title === "login" ? 'active' : '' }}" href="/login">Login</a>
        </div>
      @endauth

    </div>

  </div>

</nav>