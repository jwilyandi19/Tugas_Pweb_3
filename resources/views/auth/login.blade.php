<!DOCTYPE html>
<html>
<head>
<title>Derulo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Derulo" />
<script type="application/x-javascript">
	addEventListener("load", function()
	{
		setTimeout(hideURLbar, 0);
	}, false);
	function hideURLbar()
	{
		window.scrollTo(0,1);
	}
</script>
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="main-layouts wrapper">
		<h1>Derulo Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('login')}}" method="post">
          {{ csrf_field() }}
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">

					<div class="-text">

						<div class="clear"> </div>
					</div>
					<input type="submit" value="LOGIN">
				</form>
				<p>Don't have an Account? <a href="{{route('register')}}"> Register Now!</a></p>
			</div>
		</div>

		<ul class="lsg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
