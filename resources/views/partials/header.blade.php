<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link {{ (request()->is('filmpiuvotati')) ? 'active' : '' }}" href="{{ url('filmpiuvotati') }}">Film più votati</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">IN ARRIVO</a>
    </div>
  </div>
</nav>