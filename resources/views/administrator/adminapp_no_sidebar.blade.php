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
		{!! Html::style('assets/admin/vendor/bootstrap/css/bootstrap.css') !!}
		{!! Html::style('assets/admin/vendor/font-awesome/css/font-awesome.css') !!}
		{!! Html::style('assets/admin/vendor/magnific-popup/magnific-popup.css') !!}
		{!! Html::style('assets/admin/vendor/bootstrap-datepicker/css/datepicker3.css') !!}

		<!-- Theme CSS -->
		{!! Html::style('assets/admin/stylesheets/theme.css') !!}

		<!-- Skin CSS -->
		{!! Html::style('assets/admin/stylesheets/skins/default.css') !!}

		<!-- Theme Custom CSS -->
		{!! Html::style('assets/admin/stylesheets/theme-custom.c') !!}

		<!-- Head Libs -->
		{!! Html::script('assets/admin/vendor/modernizr/modernizr.js')!!}

	</head>
	<body>
		@yield('content')
		<!-- end: page -->

		<!-- Vendor -->
		{!! Html::script('assets/admin/vendor/jquery/jquery.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')!!}
		{!! Html::script('assets/admin/vendor/bootstrap/js/bootstrap.js')!!}
		{!! Html::script('assets/admin/vendor/nanoscroller/nanoscroller.js')!!}
		{!! Html::script('assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')!!}
		{!! Html::script('assets/admin/vendor/magnific-popup/magnific-popup.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-placeholder/jquery.placeholder.js')!!}
		
		<!-- Theme Base, Components and Settings -->
		{!! Html::script('assets/admin/javascripts/theme.js')!!}
		
		<!-- Theme Custom -->
		{!! Html::script('assets/admin/javascripts/theme.custom.js')!!}
		
		<!-- Theme Initialization Files -->
		{!! Html::script('assets/admin/javascripts/theme.init.js')!!}

	</body>

</html>