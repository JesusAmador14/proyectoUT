<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>
	<!-- Favicon-->
	<link rel="icon" href="../../favicon.ico" type="image/x-icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />


	<link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

	<link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/themes/theme-green.css') }}" rel="stylesheet">
</head>

<body class="theme-green">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-green">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Cargando...</p>
		</div>
	</div>
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="../../index.html">Proyecto - UT</a>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<li class="header">MENÚ</li>
					<li>
						<a href="{{ url('/students') }}">
							<i class="material-icons">group_add</i>
							<span>Estudiantes</span>
						</a>
					</li>
					<li>
						<a href="{{ url('/tools') }}">
							<i class="material-icons">layers</i>
							<span>Herramientas</span>
						</a>
					</li>
				</ul>
			</div>
			<!-- #Menu -->
			<!-- Footer -->
			<div class="legal">
				<div class="copyright">
					&copy; 2019
					<a href="javascript:void(0);">Proyecto Escolar</a>.
				</div>
				<div class="version"><b>Version: </b> 1.0.0</div>
			</div>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->
	</section>
	<div class="overlay"></div>
	<section class="content">
		@yield('content')
	</section>

	<!-- Jquery Core Js -->
	<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

	<!-- Bootstrap Core Js -->
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

	<!-- Slimscroll Plugin Js -->
	<script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

	<!-- Waves Effect Plugin Js -->
	<script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

	<!-- Jquery DataTable Plugin Js -->
	<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>

	<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>

	<!-- Custom Js -->
	<script src="{{ asset('js/admin.js') }}"></script>
	<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>

	<!-- Demo Js
	<script src="../../js/demo.js"></script> -->
</body>

</html>