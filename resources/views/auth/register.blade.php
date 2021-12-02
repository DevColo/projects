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
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />
		<link href="{!! asset('assets/bootstrap-fileinput/bootstrap-fileinput.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/plugins.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/global/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
		<link href="{!! asset('assets/css/components.min.css') !!}" rel="stylesheet" type="text/css" />
        
		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign Up</h2>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg">
								<label>Name</label>
								<input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autofocus/>

								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
							</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg">
					<label>County</label>
					<select name="county" class="form-control">
                        <option value="">Select your County</option>
                        <option value="Bomi">Bomi</option>
                        <option value="Bong">Bong</option>
                        <option value="Gbapolu">Gbapolu</option>
                        <option value="Grand-Bassa">Grand Bassa</option>
                        <option value="Grand-Cape-Mount">Grand Cape Mount</option>
                        <option value="Grand-Gedeh">Grand Gedeh</option>
                        <option value="Grand-Kru">Grand Kru</option>
                        <option value="Lofa">Lofa</option>
                        <option value="Margibi">Margibi</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Montserrado">Montserrado</option>
                        <option value="Nimba">Nimba</option>
                        <option value="River-Cess">River Cess</option>
                        <option value="River-Gee">River Gee</option>
                        <option value="Sinoe">Sinoe</option>
                    </select>

								@if ($errors->has('county'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                @endif
							</div>

				<div class="form-group{{ $errors->has('district') ? ' has-error' : '' }} mb-lg">
								<label>District</label>
								<input id="district" type="number" class="form-control " name="district" value="{{ old('district') }}" required autofocus/>

								@if ($errors->has('district'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('district') }}</strong>
                                    </span>
                                @endif
							</div>

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg">
						<div class="fileinput fileinput-new" data-provides="fileinput">
                        <span class="btn btn-file" style="background:#0088cc;border-color:#0088cc;color:#fff;">
                          <span class="fileinput-new"> Upload profile photo </span>
                            <span class="fileinput-exists"> Change photo </span>
                          <input type="file" name="photo"> <span class="icon icon-lg">
											<i class="fa fa-camera"></i>
										</span></span>
                            <span class="fileinput-filename"> </span> &nbsp;
                            <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"></a>
                    </div>
							</div>

							<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
								<label>E-mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required/>

								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>

							<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-none">
								<div class="row">
									<div class="col-sm-6 mb-lg">
										<label>Password</label>
										<input id="password" type="password" class="form-control" name="password" required/>
									</div>
									<div class="col-sm-6 mb-lg">
										<label>Password Confirmation</label>
										<input id="password-confirm" name="password_confirmation" type="password" class="form-control" />
									</div>
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
										<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
										<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
									</div>
								</div>
							 <div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
								</div> 
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<!-- <div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div> -->

							<p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign In!</a>

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
		<script src="{!! asset('assets/bootstrap-fileinput/bootstrap-fileinput.js') !!}" type="text/javascript"></script>
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>