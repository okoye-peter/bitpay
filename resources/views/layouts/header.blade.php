<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

	<meta charset="utf-8">

	<!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1280">

	<!-- Template Basic Images Start -->
	<!--  -->
	<meta property="og:image" content="{{ asset('assets/path/to/image.html') }}">
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:locale" content="ru_RU" />
	<meta property="og:type" content="website" />

	<link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico" type="image/x-icon') }}">
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico" type="image/x-icon') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}">
	<!-- Template Basic Images End -->


	<link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/ResponsiveTables/ng_responsive_tables.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-sweetalert/sweetalert.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/flag-icon/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/ion.rangeSlider/css/ion.rangeSlider.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libs/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>

	<div class="wrapper">
		<div class="bg-light"></div>

		<header class="header-main">
			<div class="btn-menu-wrap">
				<div class="btn-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="container">
				<div class="header-top-line">
					<a href="{{ route('home') }}" class="logo">
						<img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-responsive logo-img">
						<span class="logo-title">Profit-<span>Miners</span></span>
					</a>
					<ul class="support-list">
						<li class="support-item wow bounceInLeft" data-wow-delay="0.6s">
							<a href="https://www.facebook.com/" target="__blank" class="support-item__link facebook--icon">
								<span class="support-item__value">Facebook</span>
							</a>
						</li>
						<li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
							<a href="tel:+442039911140" class="support-item__link phone--icon">
								<span class="support-item__title">Phone</span>
								<span class="support-item__value">Coming soon</span>
							</a>
						</li>
						<li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
							<a href="mailto:admin@Profit-miners.com" class="support-item__link email--icon">
								<span class="support-item__title">Email</span>
								<span class="support-item__value">admin@Profit-miners.com</span>
							</a>
						</li>
					</ul>

					<ul class="user-link-list">
            <li class="user-link-item wow fadeInUp" data-wow-delay="0.8s"><a href="{{ route('login') }}"
								class="user-link-item__link"><span>Sign in</span></a></li>
						<li class="user-link-item wow fadeInUp" data-wow-delay="1s"><a href="{{ route('register') }}"
								class="user-link-item__link"><span>Sign up</span></a></li>
					</ul>
					<!-- /.user-link-wrap -->

				</div>
				<!-- /.header-top-line -->
			</div>
			<!-- /.container -->
			<div class="header-content">

				<div class="bg-header-el"></div>
				<div class="bg-header"></div>
				<div class="container">
					<nav class="main-menu">
						<ul class="main-menu-list">
							<li class="main-menu-item wow zoomIn" data-wow-delay="0.6s"><a href="{{ route('home') }}"
									class="main-menu_link"><span>Home</span></a></li>
							<li class="main-menu-item wow zoomIn" data-wow-delay="0.8s"><a href="{{ route('about') }}"
									class="main-menu_link"><span>About</span></a></li>
							<li class="main-menu-item wow zoomIn" data-wow-delay="1s"><a href="{{ route('investors') }}"
									class="main-menu_link"><span>For Investors</span></a></li>
							<li class="main-menu-item wow zoomIn" data-wow-delay="1.2s"><a href="{{ route('partners') }}"
									class="main-menu_link"><span>For Partners</span></a></li>
							<li class="main-menu-item wow zoomIn" class="main-menu-item wow zoomIn" data-wow-delay="1.4s"><a
									href="{{ route('faq') }}" class="main-menu_link"><span>FAQ</span></a></li>
							<li class="main-menu-item wow zoomIn" data-wow-delay="1.6s"><a href="{{ route('rules') }}"
									class="main-menu_link"><span>Rules</span></a></li>
							<li class="main-menu-item wow zoomIn" data-wow-delay="1.8s"><a href="{{ route('support') }}"
									class="main-menu_link"><span>Support</span></a></li>
						</ul>
					</nav>
					<!-- /.main-menu -->

					<div class="header-banner">
						<div class="header-banner-block">
							<div class="logo-el1"></div>
							<div class="logo-el2"></div>
							<div class="logo-el3"></div>
							<div class="logo-el4"></div>
							<div class="logo-el5"></div>
							<div class="logo-center"></div>
							<div class="logo-light"></div>
							<div class="logo-el-left"></div>
							<div class="logo-el-right"></div>
						</div>
						<!-- /.header-banner-block -->
						<div class="header-banner-content">
							<h1 class="wow bounceInRight" data-wow-delay="1s">Earn from 5.1% to 10% every day!</h1>
							<div class="header-banner-list">
								<div class="header-banner-item wow fadeInRightBig" data-wow-delay="1.3s">
									<div class="header-banner-item__icon">
										<img src="{{ asset('assets/img/icons/btc-big.png') }}" class="img-responsive" alt="">
									</div>
									<div class="header-banner-item__text">Bitcoin is a new generation of decentralized digital currency,
										created and operating only on the Internet</div>
									<!-- <a href="#" class="header-banner-item__link">Регистрация</a> -->
								</div>
							</div>
							<!-- /.header-banner-list -->
						</div>
						<!-- /.header-banner-content -->
					</div>
					<!-- /.header-banner -->

				</div>
				<!-- /.container -->
			</div>
			<!-- /.header-content -->
    </header>
    
    <main class="main-page">
      {{-- @yield('content') --}}
    

</html>
