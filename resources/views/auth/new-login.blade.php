<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/font-awesome/css/font-awesome.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/magnific-popup/magnific-popup.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/theme.css') !!}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/skins/default.css') !!}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/theme-custom.css') !!}">
         
		<!-- Head Libs -->
		<script src="{!! asset('assets/vendor/modernizr/modernizr.js') !!}"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input class="form-control input-lg" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="{{ route('password.request') }}" class="pull-right">Forgot Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input id="password" type="password" name="password" class="form-control input-lg" required/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<!-- <div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div> -->

							<p class="text-center">Don't have an account yet? <a href="{{ route('register') }}">Sign Up!</a>

						</form>
					</div>
				</div>
<!-- 
				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2020. CDC Membership Portal.</p> -->
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>