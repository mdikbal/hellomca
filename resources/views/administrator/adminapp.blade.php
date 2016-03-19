<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Dashboard | Farmersmarket</title>
		<meta name="keywords" content="" />
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		{!! Html::style('assets/admin/vendor/bootstrap/css/bootstrap.css')!!}
		{!! Html::style('assets/admin/vendor/font-awesome/css/font-awesome.css')!!}
		{!! Html::style('assets/admin/vendor/magnific-popup/magnific-popup.css')!!}
		{!! Html::style('assets/admin/vendor/bootstrap-datepicker/css/datepicker3.css')!!}

		<!-- Specific Page Vendor CSS -->
		{!! Html::style('assets/admin/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')!!}
		{!! Html::style('assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css')!!}
		{!! Html::style('assets/admin/vendor/morris/morris.css')!!}

		<!-- Theme CSS -->
		{!! Html::style('assets/admin/stylesheets/theme.css')!!}

		<!-- Skin CSS -->
		{!! Html::style('assets/admin/stylesheets/skins/default.css')!!}

		<!-- Theme Custom CSS -->
		{!! Html::style('assets/admin/stylesheets/theme-custom.c')!!}

		<!-- Head Libs -->
		{!! Html::script('assets/admin/vendor/modernizr/modernizr.js')!!}
	</head>
	<body>


		<section class="body">
			<!-- start: header -->
			@include('administrator.block.header')
			<!-- end: header -->
			<div class="inner-wrapper">
				@include('administrator.block.left_sidebar')
				@yield('content')
			</div>
			@include('administrator.block.right_sidebar')
		</section>

		<!-- Vendor -->
		{!! Html::script('assets/admin/vendor/jquery/jquery.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')!!}
		{!! Html::script('assets/admin/vendor/bootstrap/js/bootstrap.js')!!}
		{!! Html::script('assets/admin/vendor/nanoscroller/nanoscroller.js')!!}
		{!! Html::script('assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')!!}
		{!! Html::script('assets/admin/vendor/magnific-popup/magnific-popup.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-placeholder/jquery.placeholder.js')!!}
		
		<!-- Specific Page Vendor -->
		{!! Html::script('assets/admin/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-appear/jquery.appear.js')!!}
		{!! Html::script('assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-easypiechart/jquery.easypiechart.js')!!}
		{!! Html::script('assets/admin/vendor/flot/jquery.flot.js')!!}
		{!! Html::script('assets/admin/vendor/flot-tooltip/jquery.flot.tooltip.js')!!}
		{!! Html::script('assets/admin/vendor/flot/jquery.flot.pie.js')!!}
		{!! Html::script('assets/admin/vendor/flot/jquery.flot.categories.js')!!}
		{!! Html::script('assets/admin/vendor/flot/jquery.flot.resize.js')!!}
		{!! Html::script('assets/admin/vendor/jquery-sparkline/jquery.sparkline.js')!!}
		{!! Html::script('assets/admin/vendor/raphael/raphael.js')!!}
		{!! Html::script('assets/admin/vendor/morris/morris.js')!!}
		{!! Html::script('assets/admin/vendor/gauge/gauge.js')!!}
		{!! Html::script('assets/admin/vendor/snap-svg/snap.svg.js')!!}
		{!! Html::script('assets/admin/vendor/liquid-meter/liquid.meter.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/jquery.vmap.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/data/jquery.vmap.sampledata.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/jquery.vmap.world.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.africa.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.asia.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.australia.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.europe.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js')!!}
		{!! Html::script('assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js')!!}
		
		<!-- Theme Base, Components and Settings -->
		{!! Html::script('assets/admin/javascripts/theme.js')!!}
		
		<!-- Theme Custom -->
		{!! Html::script('assets/admin/javascripts/theme.custom.js')!!}
		
		<!-- Theme Initialization Files -->
		{!! Html::script('assets/admin/javascripts/theme.init.js')!!}


		<!-- Examples -->
		{!! Html::script('assets/admin/javascripts/dashboard/examples.dashboard.js')!!}

	</body>
</html>