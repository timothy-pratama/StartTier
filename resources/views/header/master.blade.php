<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Start - Tier</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="{{asset('css/style.css')}}" rel="stylesheet"/>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

<script src="{{asset('js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.rater.js')}}" type="text/javascript"></script>

</head>
<body>
<div id="wrapper">

    @yield('navbar')

	@yield('content')

<div class="push">

</div>
</div>
<div id="footer">
	<p>© 2016 TofuCurry. All rights reserved. Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
<!-- end #footer -->

</body>
</html>
