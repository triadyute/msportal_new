<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Digicel Managed Services Customer Portal</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
            <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('dashboard/vendor/bootstrap/css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('dashboard/vendor/font-awesome/css/all.min.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/magnific-popup/magnific-popup.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="{{asset('dashboard/vendor/jquery-ui/jquery-ui.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/jquery-ui/jquery-ui.theme.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/bootstrap-multiselect/css/bootstrap-multiselect.css')}}" />
		<link rel="stylesheet" href="{{asset('dashboard/vendor/morris/morris.css')}}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('dashboard/css/theme.css')}}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('dashboard/css/skins/default.css')}}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('dashboard/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('dashboard/vendor/modernizr/modernizr.js')}}"></script>

	</head>
	<body>
		<section class="body">

			@include('inc.header')
			<div class="inner-wrapper">
                @include('inc.sidebar')
				@yield('content')
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close d-md-none">
							Collapse <i class="fas fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark"></div>
			
								<ul>
									<li>
										<time datetime="2017-04-19T00:00+00:00">04/19/2017</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="img/!sample-user.jpg" alt="Joseph Doe" class="rounded-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>

		</section>

		<!-- Vendor -->
		<script src="{{asset('dashboard/vendor/jquery/jquery.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
		<script src="{{asset('dashboard/vendor/popper/umd/popper.min.js')}}"></script>
		<script src="{{asset('dashboard/vendor/bootstrap/js/bootstrap.js')}}"></script>
		<script src="{{asset('dashboard/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
		<script src="{{asset('dashboard/vendor/common/common.js')}}"></script>
		<script src="{{asset('dashboard/vendor/nanoscroller/nanoscroller.js')}}"></script>
		<script src="{{asset('dashboard/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		
		<!-- Specific Page Vendor -->
		<script src="{{asset('dashboard/vendor/select2/js/select2.js')}}"></script>
		<script src="{{asset('dashboard/vendor/pnotify/pnotify.custom.js')}}"></script>

		<!-- Specific Page Vendor -->
		<script src="{{asset('dashboard/vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jquery-appear/jquery.appear.js')}}"></script>
		<script src="{{asset('dashboard/vendor/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jquery.easy-pie-chart/jquery.easypiechart.js')}}"></script>
		<script src="{{asset('dashboard/vendor/flot/jquery.flot.js')}}"></script>
		<script src="{{asset('dashboard/vendor/flot.tooltip/jquery.flot.tooltip.js')}}"></script>
		<script src="{{asset('dashboard/vendor/flot/jquery.flot.pie.js')}}"></script>
		<script src="{{asset('dashboard/vendor/flot/jquery.flot.categories.js')}}"></script>
		<script src="{{asset('dashboard/vendor/flot/jquery.flot.resize.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
		<script src="{{asset('dashboard/vendor/raphael/raphael.js')}}"></script>
		<script src="{{asset('dashboard/vendor/morris/morris.js')}}"></script>
		<script src="{{asset('dashboard/vendor/gauge/gauge.js')}}"></script>
		<script src="{{asset('dashboard/vendor/snap.svg/snap.svg.js')}}"></script>
		<script src="{{asset('dashboard/vendor/liquid-meter/liquid.meter.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/jquery.vmap.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')}}"></script>
		<script src="{{asset('dashboard/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('dashboard/js/theme.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('dashboard/js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('dashboard/js/theme.init.js')}}"></script>

		<!-- Examples -->
		<script src="{{asset('dashboard/js/examples/examples.dashboard.js')}}"></script>
		<script src="{{asset('dashboard/js/examples/examples.modals.js')}}"></script>
		<script src="{{asset('dashboard/js/examples/examples.advanced.form.js')}}"></script>

	</body>
</html>