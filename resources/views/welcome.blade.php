<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aduin</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('homepage/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('homepage/css/font-awesome.min.css')}}" />
	<link rel="stylesheet" href="{{ asset('homepage/css/themify-icons.css')}}" />
	<link rel="stylesheet" href="{{ asset('homepage/css/animate.css')}}" />
	<link rel="stylesheet" href="{{ asset('homepage/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{ asset('homepage/css/style.css')}}" />

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a> <b>Aduin - Website untuk Pengaduan Masyarakat </b> </a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<a href=" {{ route('login') }} " class="site-btn">Sign In</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<!-- <li><a href="">Lihat Laporan</a></li> -->
					{{-- <li><a href="">Features</a></li>
					<li><a href="">News</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li> --}}
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Layanan Pengaduan <br> <span>Masyarakat</span><br>Online</h2>
					<h4>Sampaikan laporan masalah Anda di sini, kami akan memprosesnya dengan cepat</h4>
					<button class="site-btn sb-gradients mt-5">Laporkan Di Sini</button>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('homepage/img/pengaduan.png')}}" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
