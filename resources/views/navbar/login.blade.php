<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('home')}}">StartTier</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="menu_beranda" class="active"><a href="{{route('home')}}">Beranda</a></li>
        <li id="menu_startup"><a href="{{route('list_startup')}}">Startup</a></li>
        <li id="menu_investor"><a href="{{route('list_investor')}}">Investor</a></li>
      </ul>
    </div>
  </div>
</nav>
