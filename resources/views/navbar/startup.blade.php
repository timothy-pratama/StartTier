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
        <li id="menu_beranda" class="active"><a href="{{route('home_startup',array('nama_startup'=>'Bukalapak'))}}">Beranda</a></li>
        <li id="menu_startup"><a href="{{route('list_startup')}}">Startup</a></li>
        <li id="menu_investor"><a href="{{route('list_investor')}}">Investor</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <li>
        <form class="navbar-form" role="search" style="margin-right: 22em">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Cari" style="width: 20em">
            </div>
          <input type="submit" class="btn btn-default" value="Cari" />
        </form>
      </li>
      <li>
        <button type="button" class="btn btn-default" aria-label="Left Align" style="top: 10px; position: relative; background-color: rgba(34,34,34,1); border-color: rgba(34,34,34,1)">
          <span class="glyphicon glyphicon-envelope message-notification" aria-hidden="true"></span>
        </button>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">[username]<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Edit Profile</a></li>
          <li><a href="#">Edit Project</a></li>
          <li><a href="{{route('token',array('nama_startup'=>'Bukalapak'))}}">Management Token Push</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Logout</a></li>
        </ul>
       </li>
      </ul>
    </div>
  </div>
</nav>