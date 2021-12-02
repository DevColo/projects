<!DOCTYPE html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


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
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2>
					</div>
					<div class="panel-body">
						<div class="alert alert-info">
							<p class="m-none text-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
						</div>

						@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-none">
								<div class="input-group">
									<input id="email" type="email" placeholder="E-mail" class="form-control input-lg" name="email" value="{{ old('email') }}" required/>
									 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
									<span class="input-group-btn">
										<button class="btn btn-primary btn-lg" type="submit">Reset </button>
									</span>
								</div>
							</div>

							<p class="text-center mt-lg">Remembered? <a href="{{route('login')}}">Sign In!</a>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2020. CDC Membership Portal.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{!! asset('assets/vendor/jquery/jquery.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.js') !!}"></script>
		<script src="{!! asset('assets/vendor/nanoscroller/nanoscroller.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}"></script>
		<script src="{!! asset('assets/vendor/magnific-popup/magnific-popup.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') !!}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{!! asset('assets/javascripts/theme.js') !!}"></script>
		
		<!-- Theme Custom -->
		<script src="{!! asset('assets/javascripts/theme.custom.js') !!}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{!! asset('assets/javascripts/theme.init.js') !!}"></script>

	</body>
</html>