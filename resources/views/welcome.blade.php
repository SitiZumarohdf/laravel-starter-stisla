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

    <!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Aduin</h2>
					{{-- <h5></h5> --}}
                    <br>
					<p>Pengaduan masyarakat adalah penyampaian keluhan oleh masyarakat kepada pemerintah
                         atas pelayanan yang tidak sesuai dengan standar pelayanan, atau pengabaian kewajiban dan/atau pelanggaran larangan.</p>
                        <br>
                        <br>
					<a href="{{ route('login') }}" class="site-btn sb-gradients sbg-line mt-5">Get Started</a>
				</div>
			</div>
			<div class="about-img">
				<img src="{{ asset('homepage/img/hero.svg')}}" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Alur Pengaduan</h2>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-3 feature">
					<i class="ti-pencil"></i>
					<div class="feature-content">
						<h4>Tulis Laporan</h4>
						<p>Tulis laporan keluhan Anda dengan jelas.</p>
						{{-- <a href="" class="readmore">Readmore</a> --}}
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-3 feature">
					<i class="ti-reload"></i>
					<div class="feature-content">
						<h4>Proses Verifikasi</h4>
						<p>Tunggu sampai laporan Anda di verifikasi.</p>
						{{-- <a href="" class="readmore">Readmore</a> --}}
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-3 feature">
					<i class="ti-settings"></i>
					<div class="feature-content">
						<h4>Tindak Lanjut</h4>
						<p>Laporan Anda sedang dalam tindak lanjut.</p>
						{{-- <a href="" class="readmore">Readmore</a> --}}
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-3 feature">
					<i class="ti-check-box"></i>
					<div class="feature-content">
						<h4>Selesai</h4>
						<p>Laporan pengaduan telah selesai ditindak.</p>
						{{-- <a href="" class="readmore">Readmore</a> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title"> Kelompok 5 - UAS PWL </h5>
					<div class="social">
                        <p>Khofifah Amanda [2041720119]</p>
                        <p> Safira Dyah Satiti [2041720094]</p>
                        <p> Siti Zumaroh D.F [2041720058]</p>
					</div>
				</div>
			</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('homepage/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('homepage/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('homepage/js/main.js')}}"></script>
</body>

</html>
