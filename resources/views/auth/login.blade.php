<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<title> {{ env('APP_NAME') }} - Login Area </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets/login/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/login/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/login/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="/assets/login/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="/assets/login/css/default/style.min.css" rel="stylesheet" />
	<link href="/assets/login/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/login/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<script src="/assets/login/plugins/pace/pace.min.js"></script>
	<link rel="shortcut icon" href="/assets/backend/media/logos/exilednoname.gif" />
</head>
<body class="pace-top">
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>

	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(/assets/login/img/login-bg/default.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>

	<div id="page-container" class="fade">
		<div class="login login-v2" data-pageload-addclass="animated fadeIn">
			<div class="login-header">
				<div class="brand">
					<b>LOGIN</b>
					<small> Created by <b>{{ env('APP_NAME') }}</b> </small>
				</div>
			</div>

			<div class="login-content">
				<form method="post" action="{{ route('login') }}" class="margin-bottom-0">
					@csrf

          <div class="form-group m-b-20">
						<input id="email" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ isset($_GET['email']) ? '' : old('email') }}" placeholder="Account" required>
					</div>
					<div class="form-group m-b-20">
						<input name="password" type="password" class="form-control form-control-lg" placeholder="Password" required />
					</div>
					<p>
            <p>
  						@error('email') <strong class="text-danger">{{ $message }}</strong> @enderror
  						@error('password') <strong class="text-danger"> {{ $message }}</strong> @enderror
  					</p>
					</p>
					<div class="login-buttons">
						<button type="submit" class="btn btn-success btn-block btn-lg"> Login </button>
					</div>
				</form>
				<br>
				<a href="/" style="text-decoration: none;"> <button class="btn btn-success btn-block btn-lg"> Back </button> </a>
			</div>
		</div>
	</div>

	<script src="/assets/login/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="/assets/login/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="/assets/login/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/login/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/login/plugins/js-cookie/js.cookie.js"></script>
	<script src="/assets/login/js/theme/default.min.js"></script>
	<script src="/assets/login/js/apps.min.js"></script>
	<script src="/assets/login/js/demo/login-v2.demo.min.js"></script>

	<script>
	$(document).ready(function() {
		App.init();
		LoginV2.init();
	});
</script>
</body>
</html>
