@include('layouts.header', ['title'=>'Home'])

    <div class="container">
				<section class="section-page section-separate wow fadeInLeftBig" data-wow-delay="0.4s">
					<div class="row">
						<div class="col-xs-12 col-md-6 abl">
							<div class="section-about-inner__text">
								<div class="section-title">
									<h2>About company</h2>
								</div>
								<p>Profit-miners.com offers a unique opportunity for everyone who wants to make money on investing in
									the
									progressive currency Bitcoin. Our main activity is the mining of the cryptocurrency, through the use
									of special computers – miners and algorithms used to solve complex equations. Increasing our capital
									in Bitcoins, we also carry out one more activity - the trade in cryptocurrency on the exchange.</p>
								<p>Acting in two directions at once, we receive a stable profit, we guarantee the success of the project
									and the regularity of payments. We work around the clock, concluding the most successful transactions,
									trading on the exchange in order to get maximum benefits.</p>
								<a href="{{ route('about')}}" class="btn btn-orange wow fadeInUp" data-wow-delay="1.4s"><span>Learn
										more</span></a>
							</div>
						</div>
						<div class="col-xs-12 col-md-6 abr">
							<div class="section-title">
								<h2>Company Documents</h2>
							</div>
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<a href="{{ asset('assets/certificate.pdf') }}" class="certificateLink" target="__blank"><img
											src="{{ asset('assets/img/certificate.png') }}" alt=""></a>
								</div>
								<div class="col-xs-12 col-sm-8">
									<p>Adress: 37 Tabernacle Street, London, United Kingdom, EC2A 4NJ</p>
									<a href="{{ route('home') }}" target="__blank" class="btn btn-orange"><span>Check out</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- /.section-about-inner -->
				</section>
				<section class="section-page section-separate clearfix wow fadeInRightBig" data-wow-delay="0.6s">
					<div class="block-graph">
						<div class="section-title">
							<h2>Profitability chart 2020</h2>
						</div>
						<div class="box-graph">
							<div class="graph-scale"></div>
							<div class="graph-lines"></div>
							<div class="graph-orange"></div>
							<div class="graph-white"></div>
						</div>
						<ul class="graph-descr-list">
							<li class="graph-descr-item orange--square">
								<span>Invested</span>
								<p>$ 100770.10</p>
							</li>
							<li class="graph-descr-item white--square">
								<span>Withdrawal</span>
								<p>$ 101264.67</p>
							</li>
							<li class="graph-descr-item">
								<span>Started</span>
								<p>Apr 1, 2019</p>
							</li>
							<li class="graph-descr-item">
								<span>Running days</span>
								<p>532</p>
							</li>
							<li class="graph-descr-item">
								<span>Total accounts</span>
								<p>81</p>
							</li>
						</ul>

					</div>
					<!-- /.section-graph -->
					<div class="block-invest">
						<div class="section-title">
							<h2>How to Invest</h2>
						</div>
						<ul class="invest-list">
							<li class="invest-item wow fadeInDown" data-wow-delay="0.8s">
								<div class="invest-item__number">1</div>
								<div class="invest-item__title">Register.</div>
								<div class="invest-item__text">To become a member of the project, you need to register. Click on the
									appropriate button on the page and follow the instructions.
								</div>
							</li>
							<li class="invest-item wow fadeInDown" data-wow-delay="1.1s">
								<div class="invest-item__number">2</div>
								<div class="invest-item__title">Select the service plan.</div>
								<div class="invest-item__text">It is very simple to make a deposit – make a deposit by selecting a
									service plan in your personal account or on the appropriate page.
								</div>
							</li>
							<li class="invest-item wow fadeInDown" data-wow-delay="1.4s">
								<div class="invest-item__number">3</div>
								<div class="invest-item__title">Get a profit.</div>
								<div class="invest-item__text">Percentage on the deposit will be accrued after 24 hours - this means
									that you can withdraw your profits almost immediately.
								</div>
							</li>
						</ul>
						<!-- /.invest-list -->
					</div>
					<!-- /.section-invest -->

				</section>

				<section class="section-page section-separate">
					<div class="section-title">
						<h2>Service Plans</h2>
					</div>
					<div class="section-text">
						<p>To participate in the investment project, you must make a deposit by selecting one of the proposed
							service plans. Since we are working with Bitcoin, your investment should also be in the cryptocurrency. To
							accurately calculate your profits, use a special calculator.</p>
					</div>
					<div class="section-inner-plans clearfix">

						<div class="plans-list">

							<div class="plans-item active wow fadeInLeft" data-wow-delay="1s">
								<div class="plans-item__title">Plan 1</div>
								<div class="plans-item__percent">120%</div>
								<!-- 								<div class="plans-item__descr">Ежедневно</div> -->
								<ul class="plan-description-list">
									<li class="plan-description-item">
										<div class="plan-description-item__title">Min/Max amount: </div>
										<div class="plan-description-item__value">$20 - $100</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Deposit: </div>
										<div class="plan-description-item__value">included in payments</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Term of investment: : </div>
										<div class="plan-description-item__value">After 12 Hours </div>
									</li>
								</ul>
								<a href="{{ route('register') }}" class="plans-item__link">Buy Tarriff</a>
							</div>

							<div class="plans-item active wow fadeInLeft" data-wow-delay="1s">
								<div class="plans-item__title">Plan 2</div>
								<div class="plans-item__percent">150%</div>
								<!-- 								<div class="plans-item__descr">Ежедневно</div> -->
								<ul class="plan-description-list">
									<li class="plan-description-item">
										<div class="plan-description-item__title">Min/Max amount: </div>
										<div class="plan-description-item__value">$100 - $1000</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Deposit: </div>
										<div class="plan-description-item__value">included in payments</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Term of investment: : </div>
										<div class="plan-description-item__value">After 24 Hours </div>
									</li>
								</ul>
								<a href="{{ route('register') }}" class="plans-item__link">Buy Tarriff</a>
							</div>

							<div class="plans-item wow fadeInLeft" data-wow-delay="0.7s">
								<div class="plans-item__title">Plan 3</div>
								<div class="plans-item__percent">350%</div>
								<!-- 								<div class="plans-item__descr">Ежедневно</div> -->
								<ul class="plan-description-list">
									<li class="plan-description-item">
										<div class="plan-description-item__title">Min/Max amount: </div>
										<div class="plan-description-item__value">$1000 - $2000</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Deposit: </div>
										<div class="plan-description-item__value">included in payments</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Term of investment: : </div>
										<div class="plan-description-item__value">After 48 Hours </div>
									</li>
								</ul>
								<a href="{{ route('register') }}" class="plans-item__link">Buy Tarriff</a>
							</div>

							<div class="plans-item wow fadeInLeft" data-wow-delay="0.4s">
								<div class="plans-item__title">Plan 4</div>
								<div class="plans-item__percent">500%</div>
								<!-- 								<div class="plans-item__descr">Ежедневно</div> -->
								<ul class="plan-description-list">
									<li class="plan-description-item">
										<div class="plan-description-item__title">Min/Max amount: </div>
										<div class="plan-description-item__value">$5000 - Unlimited</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Deposit: </div>
										<div class="plan-description-item__value">included in payments</div>
									</li>
									<li class="plan-description-item">
										<div class="plan-description-item__title">Term of investment: : </div>
										<div class="plan-description-item__value">After 3 Days </div>
									</li>
								</ul>
								<a href="{{ route('register') }}" class="plans-item__link">Buy Tarriff</a>
							</div>

						</div>

						<div class="plans-calculator wow bounceInDown" data-wow-delay="0.6s">
							<div class="plans-calculator__title">BTC Calculator</div>
							<form action="#" class="form-calculator"><input type="hidden" name="form_id" value="16001227501998"><input
									type="hidden" name="form_token" value="508d926bb5b50defe9942ba3c6aa088b">
								<label class="form-calculator__label">
									<span class="label-title">Deposit amount</span>
									<input type="number" name="amount" min="0" max="250" step="0.00000001" autocomplete="off"
										id="deposit-calc" class="form-calculator__input">
								</label>
								<label class="form-calculator__label">
									<span class="label-title">Term of investment</span>
									<input type="number" name="amount" min="0" step="1" autocomplete="off" id="day-calc"
										class="form-calculator__input">
								</label>
								<div class="profit-block">
									<div class="profit-block__title">Profit</div>
									<div class="profit-block-list">
										<div class="profit-block-item">Deposit amount: <span id="deposit_text">0 BTC</span></div>
										<div class="profit-block-item">% per day: <span id="percent_text">5.1%</span></div>
										<div class="profit-block-item">Term of deposit, days: <span id="day_text">1</span></div>
										<div class="profit-block-item">Total profit: <span id="profit_text">0 BTC</span></div>
									</div>
								</div>
								<!-- /.profit-block -->
								<div class="form-calculator__bottom">
									<a href="{{ route('register') }}" class="btn btn-transparent"><span>Buy tarrif</span></a>
								</div>
							</form>
						</div>
						<!-- /.calculator -->
					</div>

				</section>

				<section class="section-page section-separate">
					<div class="section-title">
						<h2>Advantages of Our Company</h2>
					</div>
					<div class="section-text">
						<p>In a wide variety of investment companies, it is difficult to make the final choice, but only we offer
							the best conditions.</p>
					</div>
					<div class="advantages-list monitor--img">
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.2s">
							<div class="advantages-item__icon adv1--icon"></div>
							<div class="advantages-item__title">Daily Charges</div>
							<div class="advantages-item__text">Your deposit works for you exactly as much as you wish, and accruals
								are made every day.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.4s">
							<div class="advantages-item__icon adv2--icon"></div>
							<div class="advantages-item__title">Stable income</div>
							<div class="advantages-item__text">We work around the clock - this means that your money is constantly in
								circulation and your profit grows every hour.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.6s">
							<div class="advantages-item__icon adv3--icon"></div>
							<div class="advantages-item__title">Instant payments</div>
							<div class="advantages-item__text">Getting your profit is very simple - you make out an application in
								your personal account and in a moment receive money for your wallet.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="0.8s">
							<div class="advantages-item__icon adv4--icon"></div>
							<div class="advantages-item__title">Professional team</div>
							<div class="advantages-item__text">We have many years of experience working on stock exchanges and in the
								sphere of cryptocurrency mining – you can completely entrust your investments to us.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="1s">
							<div class="advantages-item__icon adv5--icon"></div>
							<div class="advantages-item__title">Comfort and protection</div>
							<div class="advantages-item__text">Your charges are displayed in your personal cabinet, you can access it
								from any device, and all your accounts are securely encrypted.</div>
						</div>
						<div class="advantages-item wow fadeInUp" data-wow-delay="1.2s">
							<div class="advantages-item__icon adv6--icon"></div>
							<div class="advantages-item__title">24/7 Support</div>
							<div class="advantages-item__text">Our managers are always ready to answer the questions you are
								interested in - contact us in any convenient way and you will receive the necessary information. </div>
						</div>
					</div>
					<!-- /.advantages-list -->

				</section>

				<section class="section-page section-separate">
					<div class="section-title">
						<h2>Referral System</h2>
					</div>
					<div class="section-text">
						<p>Getting a bonus from the company is always nice. Especially when it takes a minimum of effort. Just tell
							everyone about your success in our company and give your individual link to register a new investor. Once
							your referral makes a deposit, you earn a profit of 5% of the amount. The sub-referral will bring you 1%
							of the profit.</p>
					</div>
					<div class="referrals-list clearfix">
						<div class="referral-item referral-item2 wow bounceInLeft">
							<div class="referral-item__percent">Level 1-5<span>%</span></div>
							<div class="referral-item-inner">
								<!-- 								<div class="referral-item__title">В течении суток</div> -->
								<div class="referral-item__text">Your profit from referrals, which you invite by yourself.</div>
							</div>
						</div>
						<div class="referral-item referral-item2 wow bounceInRight">
							<div class="referral-item__percent">Level 2-1<span>%</span></div>
							<div class="referral-item-inner">
								<!-- 								<div class="referral-item__title">В течении суток</div> -->
								<div class="referral-item__text">The profit that will be accrued from sub-referrals – your second-tier
									partners.</div>
							</div>
						</div>
					</div>
					<!-- /.referrals-list -->
				</section>

				<section class="section-page section-separate">
					<div class="row">
						<div class="section-title">
							<h2>Statistics</h2>
						</div>
						<div class="section-text">
							<div class="col-xs-12 col-sm-6">
								<div class="lastStatItem">
									<h3>Last Deposits</h3>
									<table class="statsTable">
										<thead>
											<tr>
												<th>Username</th>
												<th>Payment system</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>


											<tr>
												<td class="investors">Mark-S</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td class="investors_amount">$300.00</td>
												</td>
											</tr>
											<tr>
												<td class="investors">Voronina</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td class="investors_amount">$100.00</td>
												</td>
											</tr>
											<tr>
												<td class="investors">Kennedy</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td class="investors_amount">$200.00</td>
												</td>
											</tr>
											<tr>
												<td class="investors">hoerunisa</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td class="investors_amount">$500.00</td>
												</td>
											</tr>
											<tr>
												<td class="investors">Mccown</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td class="investors_amount">$1000.00</td>
												</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>




							<div class="col-xs-12 col-sm-6">
								<div class="lastStatItem">
									<h3>Last Withdrawals</h3>
									<table class="statsTable">
										<thead>
											<tr>
												<th>Username</th>
												<th>Payment system</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>


											<tr>
												<td class="cashers">Juwandi</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td><span class="cashers_amount">$3.00</span></td>
											</tr>
											<tr>
												<td class="cashers">Moser</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td><span class="cashers_amount">$3850.00</span></td>
											</tr>
											<tr>
												<td class="cashers">Lino</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td><span class="cashers_amount">$5255.00</span></td>
											</tr>
											<tr>
												<td class="cashers">Atebil</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td><span class="cashers_amount">$642.59</span></td>
											</tr>
											<tr>
												<td class="cashers">Kennedy</td>
												<td><img src="{{ asset('assets/img/48.gif') }}"></td>
												<td><span class="cashers_amount">$2142.00</span></td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>








						</div>
					</div>
				</section>

			</div>
			<!-- /.container -->

@include('layouts.footer')