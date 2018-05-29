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
		<h1>Derulo SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="{{route('register')}}" method="post">
          {{ csrf_field() }}

					<input class="text" type="text" name="username" placeholder="Username" required>
          @if ($errors->has('username'))
            <span>
                <strong>{{ $errors->first('username') }}</strong>
            </span>
          @endif

					<input class="text email" type="email" name="email" placeholder="Email" required>
          @if ($errors->has('email'))
                 <span>
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
          @endif

          <input class="text" type="text" name="school" placeholder="Sekolah" required>
          @if ($errors->has('school'))
                 <span>
                     <strong>{{ $errors->first('school') }}</strong>
                 </span>
          @endif
          <br>

					<input class="text" type="password" name="password" placeholder="Password" required>
          @if ($errors->has('password'))
                 <span>
                     <strong>{{ $errors->first('password') }}</strong>
                 </span>
          @endif

					<input class="text lpass" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
          @if ($errors->has('password_confirmation'))
                 <span>
                     <strong>{{ $errors->first('password_confirmation') }}</strong>
                 </span>
          @endif

          <label for="user_type" style="color:white;">Dafter sebagai</label>
          <select id="usertype" name="user_type">
              <option value="S">Student</option>
              <option value="T">Teacher</option>
          </select>

					<input type="submit" value="Daftar">
				</form>
				<p>Sudah memiliki akun? <a href="{{route('login')}}"> Login sekarang!</a></p>
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
	<!-- //main -->
</body>
</html>
