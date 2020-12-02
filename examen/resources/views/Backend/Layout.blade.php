<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Visual Admin Dashboard - Home</title>
	<meta name="description" content="">
	<meta name="author" content="templatemo">
	<!--
	Visual Admin Template
	https://templatemo.com/tm-455-visual-admin
	-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
{{--	<link href="BackEndassets/css/font-awesome.min.css" rel="stylesheet">--}}
	<link href="{{asset('BackEndassets/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('BackEndassets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('BackEndassets/css/templatemo-style.css')}}" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<!-- Left column -->
<div class="templatemo-flex-row">
	<div class="templatemo-sidebar">
		<header class="templatemo-site-header">
			<div class="square"></div>
			<h1>DTV Admin</h1>
		</header>
		<div class="profile-photo-container">
			<img src="BackEndassets/images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">
			<div class="profile-photo-overlay"></div>
		</div>

		<nav class="templatemo-left-nav">
			<ul>
				<li><a href="/admin" class="active"><i class="fa fa-home fa-fw"></i>Dashboard</a></li>
				<li><a href="/usermanage"><i class="fa fa-users fa-fw"></i>Manage Users</a></li>
				<li><a href="{{route('adminbaans')}}"><i class="fa fa-sliders fa-fw"></i>Baanen</a></li>
				<li><a href="{{route('adminkantine')}}"><i class="fa fa-sliders fa-fw"></i>Kantine</a></li>
				<li><a href="/pref"><i class="fa fa-sliders fa-fw"></i>Preferences</a></li>
				<li><a href="/adminlogin"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
			</ul>
		</nav>
	</div>
	<!-- Main content -->
	<div class="templatemo-content col-1 light-gray-bg">
		<div class="templatemo-top-nav-container">
			<div class="row">

			</div>
		</div>

		@yield("content")
    </div>
</div>
</body>
</html><
