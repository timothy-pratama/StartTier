<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css"/><meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Start - Tier</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="{{asset('css/style.css')}}" rel="stylesheet"/>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
<div id="wrapper">

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
            <li class="active"><a href="#">Beranda</a></li>
            <li><a href="#">Startup</a></li>
            <li><a href="#">Investor</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form" role="search" style="margin-right: 29em">
              <div class="form-group">
                  <input type="text" class="form-control" placeholder="Cari" style="width: 20em">
                </div>
              <input type="submit" class="btn btn-default" value="Cari" />
            </form>
          </li>
          <li><a href="{{route('login')}}">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

	@yield('content')

<div class="push">

</div>
</div>
<div id="footer">
	<p>© 2016 TofuCurry. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>

<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- end #footer -->
</body>
</html>
