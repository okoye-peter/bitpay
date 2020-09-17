@include('layouts.header', ['title'=>'investors'])

    <div class="container">
        <section class="section-invest section-separate ">
          <div class="section-title">
            <h2>Service plans</h2>
          </div>
          <div class="section-text">
            <p>The service plan is your ticket to the investment business with our project. All that is required from
              you is the choice of suitable conditions that correspond to your financial capabilities. To maximize your
              profit, increase the deposit amount.</p>
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

            <div class="section-title">
              <h2>Calculator</h2>
            </div>
            <div class="section-text">
              <p>To calculate your income, get information about the amount of accruals, use the calculator: enter the
                necessary data and click the button "Calculate profit".</p>
            </div>

            <div class="plans-calculator invest--page wow fadeInUpBig">
              <form action="#" class="form-calculator"><input type="hidden" name="form_id" value="16001228426777"><input
                  type="hidden" name="form_token" value="28e122fe85b15284ca709bc2e71c314c">
                <label class="form-calculator__label">
                  <span class="label-title">Deposit amount</span>
                  <input type="number" name="amount" min="0" max="250" step="0.00000001" autocomplete="off"
                    id="deposit-calc" class="form-calculator__input">
                </label>
                <label class="form-calculator__label label--range">
                  <span class="label-title">Term of investment</span>
                  <input type="number" name="amount" min="0" step="1" autocomplete="off" id="day-calc"
                    class="form-calculator__input">
                </label>
                <div class="profit-block">
                  <div class="profit-block__title">Profit</div>
                  <div class="profit-block-list">
                    <div class="profit-block-item">Deposit amount: <span id="deposit_text">0 BTC</span></div>
                    <div class="profit-block-item">% per day: <span id="percent_text">5.1%</span></div>
                    <div class="profit-block-item">Deposit term, days: <span id="day_text">1</span></div>
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
      </div>
      <!-- /.container -->

@include('layouts.footer')