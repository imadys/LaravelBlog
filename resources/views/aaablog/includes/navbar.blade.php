<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="/">AAA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::path() === '/' ? 'active' : ''}}">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>

      <li class="nav-item {{ Request::path() === 'posts' ? 'active' : ' '}}">
        <a class="nav-link" href="/posts">Posts</a>
      </li>

      <li class="nav-item {{ Request::path() === 'contact' ? 'active' : ' '}}">
        <a class="nav-link" href="/contact">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
<a class="btn btn-outline-success my-2 my-sm-0" style="color:#fff;" href="/dashboard">Log In</a>
    </form>
  </div>
</nav>