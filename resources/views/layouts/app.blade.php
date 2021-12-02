<!DOCTYPE html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | CDC Portal-Admin</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/font-awesome/css/font-awesome.css') !!}" />
		<link rel="stylesheet" href="[!! asset('assets/vendor/magnific-popup/magnific-popup.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}" />

		<!-- Specific Page Vendor CSS -->
		<!-- <link rel="stylesheet" href="{!! asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css') !!}" /> -->
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/morris/morris.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/vendor/jquery-datatables/media/css/dataTables.bootstrap.min.css') !!}">
        <link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/css/bootstrap.min.css') !!}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/theme.css') !!}" />
		<link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css') !!}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/skins/default.css') !!}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{!! asset('assets/stylesheets/theme-custom.css') !!}">

		<!-- Head Libs -->
		<script src="{!! asset('assets/vendor/modernizr/modernizr.js') !!}"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="{{ URL::to('images/logo.png') }}" height="35" alt="CDC logo" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
			
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="{{ asset('photo/') }}/{{ Auth::user()->photo}}" alt="" class="img-circle" data-lock-picture="{{ asset('photo/') }}/{{ Auth::user()->photo}}" />
							</figure>
							<div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
								<span class="name">{{ Auth::user()->name }}</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li> --><!-- 
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li> -->
								<li>
									<a role="menuitem" tabindex="-1" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="{{ URL::to('home/')}}">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-users" aria-hidden="true"></i>
											<span>Manage Members</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ URL::to('home/addMembers')}}">
													 Register Members
												</a>
											</li>
											<li>
												<a href="{{ URL::to('home/viewList')}}">
													 View Members
												</a>
											</li>
											<li>
												<a href="{{ URL::to('home/ageGroup')}}">
												     Age Groups
												</a>
											</li>
											<li>
												<a href="{{ URL::to('home/updateList')}}">
													 Update / Search Members
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-globe" aria-hidden="true"></i>
											<span>County Management</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ URL::to('home/viewCounties')}}">
													 View Counties
												</a>
											</li>
											<li>
												<a href="{{ URL::to('home/adminList')}}">
													 View County Administrators
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tree" aria-hidden="true"></i>
											<span>District Management</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="{{ URL::to('home/districts')}}">
													 View Districts
												</a>
											</li>
											<!-- <li>
												<a href="">
													 View District Members
												</a>
											</li>
											<li>
												<a href="">
													 View District Administrators
												</a>
											</li> -->
										</ul>
									</li>
								</ul>
							</nav>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						@yield('page')
					
						<div class="right-wrapper pull-right">
						</div>
					</header>

					<!-- start: page -->
					
					<div class="row">
						 @if(Session::has('msg'))
                                     <div class="alert alert-info">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong>Success!</strong> {!!Session::get('msg')!!}
                                     </div>
                                      @endif

                                       @if(Session::has('msgErr'))
                                     <div class="alert alert-danger">
                                    <a class="close" data-dismiss="alert">×</a>
                                    <strong>Oops!</strong> {!!Session::get('msgErr')!!}
                                     </div>

                                     @endif

                      @yield('content')
					</div>
					<!-- end: page -->
				</section>
			</div>

			
		</section>

		<!-- Vendor -->
		<script src="{!! asset('assets/vendor/jquery/jquery.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap/js/bootstrap.js') !!}"></script>
		<script src="{!! asset('assets/vendor/nanoscroller/nanoscroller.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!}"></script>
		<script src="{!! asset('assets/vendor/magnific-popup/magnific-popup.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-placeholder/jquery.placeholder.js') !!}"></script>
		
		<!-- Specific Page Vendor -->
	<script src="{!! asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-appear/jquery.appear.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') !!}"></script>
		<script src="{!! asset('assets/vendor/flot/jquery.flot.js') !!}"></script>
		<script src="{!! asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-sparkline/jquery.sparkline.js') !!}"></script>
		<script src="{!! asset('assets/vendor/raphael/raphael.js') !!}"></script>
		<script src="{!! asset('assets/vendor/morris/morris.js') !!}"></script>
		<script src="{!! asset('assets/vendor/gauge/gauge.js') !!}"></script>
		<script src="{!! asset('assets/vendor/snap-svg/snap.svg.js') !!}"></script>
		<script src="{!! asset('assets/vendor/liquid-meter/liquid.meter.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jqvmap/data/jquery.vmap.sampledata.js') !!}"></script>
		
		
		<!-- Theme Base, Components and Settings -->
		<script src="{!! asset('assets/javascripts/theme.js') !!}"></script>
		
		<!-- Theme Custom -->
		<script src="{!! asset('assets/javascripts/theme.custom.js') !!}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{!! asset('assets/javascripts/theme.init.js') !!}"></script>
		<script src="{!! asset('assets/javascripts/ui-elements/examples.modals.js') !!}"></script>

        <!-- Specific Page Vendor -->
		<script src="{!! asset('assets/vendor/jquery-autosize/jquery.autosize.js') !!}"></script>
		<script src="{!! asset('assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js') !!}"></script>
		<!-- Datatables -->
		<script src="{!! asset('assets/vendor/vendor/bootstrap/js/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js') !!}"></script>
		<script src="{!! asset('assets/vendor/jquery-datatables/media/js/dataTables.bootstrap.min.js') !!}"></script>
		<!-- <script src="{!! asset('assets/vendor/jquery/jquery.min.js') !!}"></script> -->
		<!-- Examples -->
		<script src="{!! asset('assets/javascripts/dashboard/examples.dashboard.js') !!}"></script>
	</body>
</html>