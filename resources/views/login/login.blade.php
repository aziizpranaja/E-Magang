<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="{{asset('assets/css/menu.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/mainn.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/bgimg.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/bgimg-parallax.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/font.css')}}"/>
		<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"/>
		<script type="text/javascript" src="{{asset('assets/scripts/jquery-1.12.4.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/scripts/parallax.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/scripts/main.js')}}"></script>
	</head>
<body>
<div class="menu">
		<a href="/" class="bars">
			<i class="fa fa-arrow-left"></i>
		</a>
	</div>
	<div class="background" id="background"></div>
	<div class="backdrop"></div>
	<div class="login-form-container" id="login-form">
		<div class="login-form-content">
			<div class="login-form-header">
				<h3>Login ke akun Anda</h3>
			</div>
      @if (session('status'))
		<div class=" alert alert-success">

			{{ session ('status')}}

		</div>
		@endif
			<form action="{{ route('postlogin') }}" method="post" class="login-form">
				{{csrf_field()}}
				<div class="input-container">
					<i class="fa fa-envelope"></i>
					<input type="email" class="input" name="email" placeholder="Email"/>
				</div>
				<div class="input-container">
					<i class="fa fa-lock"></i>
					<input type="password"  id="login-password" class="input" name="password" placeholder="Password"/>
					<i id="show-password" class="fa fa-eye"></i>
				</div>
				<div class="rememberme-container">
					<a class="forgot-password" href="/forgotpass">Lupa Password?</a>
				</div>
				<input type="submit" name="login" value="Login" class="button"/>
				<a href="/register" class="register">Register</a>
			</form>
		</div>
	</div>
	<script type="text/javascript">
	$('#background').mouseParallax({ moveFactor: 5 });
	</script>
</body>
</html>