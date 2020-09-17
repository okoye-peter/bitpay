<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8">

    <title>Profit-miners.com</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1280">

    <!-- Template Basic Images Start -->
    <!--  -->
    <meta property="og:image" content="path/to/image.html">
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" type="image/x-icon">
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
                        <li class="user-link-item wow fadeInUp" data-wow-delay="0.8s"><a href="{{ route('login') }}" class="user-link-item__link"><span>Sign in</span></a></li>
                        <li class="user-link-item wow fadeInUp" data-wow-delay="1s"><a href="{{ route('register') }}" class="user-link-item__link"><span>Sign up</span></a></li>
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
                            <li class="main-menu-item wow zoomIn" data-wow-delay="0.6s"><a href="{{ route('home') }}" class="main-menu_link"><span>Home</span></a></li>
                            <li class="main-menu-item wow zoomIn" data-wow-delay="0.8s"><a href="{{ route('about') }}" class="main-menu_link"><span>About</span></a></li>
                            <li class="main-menu-item wow zoomIn" data-wow-delay="1s"><a href="{{ route('investors') }}" class="main-menu_link"><span>For Investors</span></a></li>
                            <li class="main-menu-item wow zoomIn" data-wow-delay="1.2s"><a href="{{ route('partners') }}" class="main-menu_link"><span>For Partners</span></a></li>
                            <li class="main-menu-item wow zoomIn" class="main-menu-item wow zoomIn" data-wow-delay="1.4s"><a href="{{ route('faq') }}" class="main-menu_link"><span>FAQ</span></a></li>
                            <li class="main-menu-item wow zoomIn" data-wow-delay="1.6s"><a href="{{ route('rules') }}" class="main-menu_link"><span>Rules</span></a></li>
                            <li class="main-menu-item wow zoomIn" data-wow-delay="1.8s"><a href="{{ route('support') }}" class="main-menu_link"><span>Support</span></a></li>
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
                                    <div class="header-banner-item__text">Bitcoin is a new generation of decentralized digital currency, created and operating only on the Internet</div>
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

        <main class="main-page referrals-page">
            <div class="container">
                <section class="section-page section-separate">
                    <div class="section-title">
                        <h2>Referral system</h2>
                    </div>
                    <div class="section-text">
                        <p>Get a reward from the company for helping to develop the project. This is the main purpose of the referral program. You contribute by inviting new investors, and the company thanks you in the amount of 5% of the deposit amount
                            of your referral. Tell about your achievements in this project and give your individual link for registration. Your sub-referrals can also bring you a profit of 1% of the deposit amount.
                        </p>
                    </div>
                    <div class="referrals-list clearfix">
                        <div class="referral-item">
                            <div class="referral-item__percent">Level 1- 5<span>%</span></div>
                            <div class="referral-item-inner">
                                <!-- 								<div class="referral-item__title">В течении суток</div> -->
                                <div class="referral-item__text">Your profit from referrals, which you invite by yourself.</div>
                            </div>
                        </div>
                        <div class="referral-item">
                            <div class="referral-item__percent">Level 2-1<span>%</span></div>
                            <div class="referral-item-inner">
                                <!-- 								<div class="referral-item__title">В течении суток</div> -->
                                <div class="referral-item__text">The profit that will be accrued from sub-referrals – your second-tier partners.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.referrals-list -->
                </section>
            </div>
            <!-- /.container -->
        </main>

        <footer class="footer-main">
			<div class="container">
				<div class="footer-content">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="logo-wrap logo--footer wow fadeInLeft" data-wow-delay="0.3s">
								<a href="{{ route('home') }}" class="logo">
									<img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-responsive logo-img">
									<span class="logo-title">Profit-<span>Miners</span></span>
								</a>
							</div>
							<p class="footer-text wow fadeInLeft" data-wow-delay="0.6s">Played on this website
								Trademarks are used with permission
								right holder.</p>
							<p class="copyright wow fadeInLeft" data-wow-delay="0.9s">Copyright Profit-miners.com © 2020</p>
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="footer-col pay-system">
								<div class="footer-col__title">Payment System</div>
								<ul class="pay-system-list">
									<li><img class="img-responsive wow fadeInUp" data-wow-delay="0.3s" src="{{ asset('assets/img/pay/bitcoin.png') }}"
											alt=""></li>
									<!--                   <li><img class="img-responsive wow fadeInUp" data-wow-delay="0.6s"" src="assets/img/pay/pfm.png" alt=""></li>
                  <li><img class="img-responsive wow fadeInUp" data-wow-delay="0.9s"" src="assets/img/pay/payeer.png" alt=""></li>
                  <li><img class="img-responsive wow fadeInUp" data-wow-delay="1.2s"" src="assets/img/pay/advcash.png" alt=""></li> -->
								</ul>
								<!-- /.partners-list -->
							</div>
							<!-- /.footer-main-item -->
						</div>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="footer-col footer-menu-col">
								<div class="footer-col__title">For client</div>
								<ul class="footer-menu">
									<li class="footer-menu-item wow fadeInRight">
										<a href="{{ route('home') }}" class="footer-menu__link"><span>Home</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="0.3s">
										<a href="{{ route('about') }}" class="footer-menu__link"><span>About</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="0.6s">
										<a href="{{ route('investors') }}" class="footer-menu__link"><span>For Investors</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="0.9s">
										<a href="{{ route('partners') }}" class="footer-menu__link"><span>For Partners</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="1.2s">
										<a href="{{ route('faq') }}" class="footer-menu__link"><span>FAQ</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="1.5s">
										<a href="{{ route('rules') }}" class="footer-menu__link"><span>Rules</span></a>
									</li>
									<li class="footer-menu-item wow fadeInRight" data-wow-delay="1.8s">
										<a href="{{ route('support') }}" class="footer-menu__link"><span>Support</span></a>
									</li>
								</ul>
							</div>
							<!-- /.footer-main-item -->
						</div>
						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="footer-col contacts--footer">
								<div class="footer-col__title">Contacts</div>
								<div class="footer-contacts-item wow fadeInRightBig" data-wow-delay="0.6s">
									<div class="footer-contacts-item__title">Adress</div>
									<p class="footer-contacts-text">London</p>
									<p class="footer-contacts-text">37 Tabernacle Street, United Kingdom, EC2A 4NJ</p>
								</div>
								<!-- /.footer-address -->
								<div class="footer-contacts-item wow fadeInRightBig" data-wow-delay="0.9s">
									<div class="footer-contacts-item__title">Telephone</div>
									<p class="footer-contacts-text"><a href="tel:" class="footer-contacts-link">Coming soon</a></p>
								</div>
								<!-- /.footer-phone -->
								<div class="footer-contacts-item wow fadeInRightBig" data-wow-delay="1.2s">
									<div class="footer-contacts-item__title">E-Mail:</div>
									<p class="footer-contacts-text"><a href="mailto:admin@Profit-miners.com"
											class="footer-contacts-link">admin@Profit-miners.com</a>
									</p>
								</div>
								<!-- /.footer-contacts-item -->
							</div>
							<!-- /.footer-main-item -->
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.footer-content -->
			</div>
			<!-- /.container -->
		</footer>
	</div>
	<!-- /.wrapper -->


	<!--[if lt IE 9]>
  <script src="assets/libs/html5shiv/es5-shim.min.js"></script>
  <script src="assets/libs/html5shiv/html5shiv.min.js"></script>
  <script src="assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
  <script src="assets/libs/respond/respond.min.js"></script>
  <![endif]-->

	<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/libs/ResponsiveTables/ng_responsive_tables.js') }}"></script>
	<script src="{{ asset('assets/libs/clipboard.js/clipboard.min.js') }}"></script>
	<script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bootstrap-sweetalert/sweetalert.min.js') }}"></script>
	<script src="{{ asset('assets/libs/wow/dist/wow.min.js') }}"></script>
	<script src="{{ asset('assets/libs/matchheight/jquery.matchHeight-min.js') }}"></script>
	<script src="{{ asset('assets/libs/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
	<script src="{{ asset('assets/parallax.min.js') }}"></script>
	<script src="{{ asset('assets/libs/waypoints/jquery.waypoints.min.js') }}"></script>

	<script src="{{ asset('assets/js/common.js') }}"></script>
	<script src="{{ asset('assets/js/calc.js') }}"></script>
	<!-- dummy -->
	<script src="{{ asset('assets/js/dummy.js') }}"></script>


	<script>
		setInterval(() => {

			// investment
			let items = document.querySelectorAll('.investors_amount');
			items.forEach(function (item) {
				function getRandomInt(min, max) {
					min = Math.ceil(20);
					max = Math.floor(5000);
					fillNum = Math.floor(Math.random() * (max - min)) +
						min; //The maximum is exclusive and the minimum is inclusive

				}
				getRandomInt()
				item.innerHTML = "$" + fillNum;
			});

			// random investors
			let investors = document.querySelectorAll('.investors');
			investors.forEach(function (investor) {
				function getRandomInvestors(min, max) {
					min = Math.ceil(0);
					max = Math.floor(3898);
					invNumber = Math.floor(Math.random() * (max - min)) +
						min; //The maximum is exclusive and the minimum is inclusive

				}
				getRandomInvestors()
				investor.innerHTML = dummies[invNumber];
			});

			// withdrawal
			let items1 = document.querySelectorAll('.cashers_amount');
			items1.forEach(function (item1) {
				function randomWithdraw(min, max) {
					min = Math.ceil(500);
					max = Math.floor(40000);
					fillWithdraw = Math.floor(Math.random() * (max - min)) +
						min; //The maximum is exclusive and the minimum is inclusive

				}
				randomWithdraw()
				item1.innerHTML = "$" + fillWithdraw;
				// console.log(item)
			});



			// random cash out
			let cashOuts = document.querySelectorAll('.cashers');
			cashOuts.forEach(function (cashOut) {
				function getRandomInvestors(min, max) {
					min = Math.ceil(0);
					max = Math.floor(3898);
					cashNumber = Math.floor(Math.random() * (max - min)) +
						min; //The maximum is exclusive and the minimum is inclusive

				}
				getRandomInvestors()
				cashOut.innerHTML = dummies[cashNumber];
			});

			// console.log(item)


		}, 2000);
	</script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function () {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/5f25ed201a544e2a7275c66d/default';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();
	</script>
	<!--End of Tawk.to Script-->
</body>