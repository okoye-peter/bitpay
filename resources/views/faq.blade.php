@include('layouts.header', ['title'=>'FAQ'])

    <div class="container">
        <section class="section-page section-separate">
          <div class="section-title">
            <h2>FAQ</h2>
          </div>
          <div class="section-text">
            <p>The answers to the most important questions on the project are collected in this section. To make it
              easier for you to find what you are looking for, we arranged them in the appropriate categories.</p>
          </div>
          <div class="tabs faq-tabs">

            <ul class="tabs__caption faq-tabs__nav">
              <li class="active wow fadeInLeftBig">
                <span>Registration</span>
                <ul class="faq-tabs-nav-sublist">
                  <li>How to register in the project?</li>
                  <li>Who is allowed to register and participate in this investment project?</li>
                  <!-- <li>Is the investor obligated to provide reliable information about himself?</li> -->
                </ul>
              </li>
              <li class="wow fadeInLeftBig" data-wow-delay="0.2s">
                <span>Authorization</span>
                <ul class="faq-tabs-nav-sublist">
                  <li>How do I access my personal cabinet?</li>
                  <li>From which device can I access my personal cabinet?</li>
                  <!-- <li>What should I do if I forgot my password for logging in to my account?</li> -->
                </ul>
              </li>
              <li class="wow fadeInLeftBig" data-wow-delay="0.5s">
                <span>Finance</span>
                <ul class="faq-tabs-nav-sublist">
                  <li>How quickly after registration does the investor need to make a deposit?</li>
                  <li>When do accrual to my deposit start?</li>
                  <!-- <li>Is there a fee for withdrawing profits?</li> -->
                </ul>
              </li>
              <li class="wow fadeInLeftBig" data-wow-delay="0.7s">
                <span>For partners</span>
                <ul class="faq-tabs-nav-sublist">
                  <li>How to become a member of the referral program?</li>
                  <li>Do I have to have an active deposit to profit from the referral program?</li>
                  <!-- <li>How many levels are there in the referral system?</li> -->
                </ul>
              </li>
            </ul>

            <div class="tabs__content faq-tabs__content active">
              <h4>Questions regarding registration</h4>
              <p>All you need to know about the registration procedure in this project.</p>
              <ul class="faq-tabs-list">
                <li>
                  <div class="faq-tabs-list__number">1. How to register in the project?</div>
                  <p>In order to register in this project, you need to click on the "Registration" button at the top of
                    the page and fill in the required fields of the questionnaire.</p>
                </li>
                <li>
                  <div class="faq-tabs-list__number">2. Who is allowed to register and participate in this investment
                    project?</div>
                  <p>Any adult citizen. The country of residence does not matter.</p>
                </li>
                <!-- <li>
                  <div class="faq-tabs-list__number">3. Is the investor obligated to provide reliable information about
                    himself?</div>
                  <p>No, you can remain anonymous and decide what information to provide.</p>
                </li> -->
              </ul>

            </div>

            <div class="tabs__content faq-tabs__content">
              <h4>Questions regarding authorization</h4>
              <p>Questions about authorization in the project</p>
              <ul class="faq-tabs-list">
                <li>
                  <div class="faq-tabs-list__number">1. How do I access my personal cabinet?</div>
                  <p>To log in, you must use the login and password that you have chosen and indicated during the
                    registration.</p>
                </li>
                <li>
                  <div class="faq-tabs-list__number">2. From which device can I access my personal cabinet?</div>
                  <p>From any: phone, tablet, computer.</p>
                </li>
                <!-- <li>
                  <div class="faq-tabs-list__number">3. What should I do if I forgot my password for logging in to my
                    account?</div>
                  <p>You can use the form to recover passwords or contact customer support.</p>
                </li> -->
              </ul>
            </div>

            <div class="tabs__content faq-tabs__content">
              <h4>Questions regarding finance</h4>
              <p>All you need to know about making deposits and withdrawing.</p>
              <ul class="faq-tabs-list">
                <li>
                  <div class="faq-tabs-list__number">1. How quickly after registration does the investor need to make a
                    deposit?</div>
                  <p>At any convenient time. After registration, you can carefully study the conditions of the service
                    plans and only after that make the deposit.</p>
                </li>
                <li>
                  <div class="faq-tabs-list__number">2. When do accrual to my deposit start?</div>
                  <p>All accruals are carried out once a day. You can follow them in your personal cabinet.</p>
                </li>
                <!-- <li>
                  <div class="faq-tabs-list__number">3. Is there a fee for withdrawing profits?</div>
                  <p>No, all payments are instant and conducted without commissions. The minimum withdrawal amount is
                    0.0005 BTC. </p>
                </li> -->
              </ul>
            </div>

            <div class="tabs__content faq-tabs__content">
              <h4>Questions regarding partners</h4>
              <p>Information about the referral program of the investment project.</p>
              <ul class="faq-tabs-list clearfix">
                <li>
                  <div class="faq-tabs-list__number">1. How to become a member of the referral program?</div>
                  <p>It is enough to be a registered participant in the project. Your referral link is stored in your
                    personal cabinet.</p>
                </li>
                <li>
                  <div class="faq-tabs-list__number">2. Do I have to have an active deposit to profit from the referral
                    program?</div>
                  <p>No, you must not.</p>
                </li>
                <!-- <li>
                  <div class="faq-tabs-list__number">3. How many levels are there in the referral system?</div>
                  <p>There are two levels in the referral system of our project, this will allow you to make profit from
                    sub-referrals.</p>
                </li> -->
              </ul>
            </div>

          </div><!-- .tabs -->
        </section>
      </div>
      <!-- /.container -->

@include('layouts.footer')