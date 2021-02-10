<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">




	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="brand">
					KIRASASTRA
				</div>
				<div class="container-fluid">
					<div class="navbar-btn">
						<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
					</div>
					<div id="navbar-menu">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>{{ auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
									<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
									<li><a href="{{ route('logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
			<div id="sidebar-nav" class="sidebar">
				<div class="sidebar-scroll">
					<nav>
						<ul class="nav">
							<li><a href="{{ route('home')}}"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
							<li><a href="{{ route('dasboardadmin')}}" class="active"><i class="lnr lnr-database"></i> <span>Dashboard Admin</span></a></li>
							<li>
								<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Members</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
								<div id="subPages" class="collapse ">
									<ul class="nav">
										<li><a href="{{ route('all_members')}}" class="lnr lnr-users"<span> All Members</span></a></li>
										<li><a href="page-login.html" class="">Login</a></li>
										<li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
			<div class="main">
				@yield('content')
			</div>
		<!-- END MAIN -->

		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 KiraSastra All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->


	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>

</body>
</html>
