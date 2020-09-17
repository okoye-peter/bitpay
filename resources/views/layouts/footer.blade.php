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