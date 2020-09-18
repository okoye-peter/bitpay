@include('layouts.auth.header', ['title'=>'dashboard'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">

                <span>Account <b>Area</b></span>
                <small>Dashboard</small>

              </h2>
              <div style="float:right;">
                <a href="https://capital-finance.uk/?a=deposit" class="btn btn-blue with-icon">Make deposit</a>
                <a href="https://capital-finance.uk/?a=withdraw" class="btn btn-green with-icon">withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>





              <ul class="balance-list">


              </ul>
              <br>
              <div class="col-md-12">
                <div class="box-over-table-form white">
                  <table class="table table-form">
                    <tbody>
                      <tr>
                        <td>
                          <label><span>Referral <b> link</b></span>
                            <p>
                              <i class="icon-globe"></i>
                              <input type="text" onclick="this.select();" value="https://capital-finance.uk/?ref=">
                            </p>
                          </label>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="clearfix"></div>
                  <br>
                </div>
              </div>
              <div class="clearfix"></div>
              <br>

              <div class="account-box1">
                <ul class="account-page-list">
                  <li>
                    <div>
                      <span style="color: black;"><img src="{{ asset('assets/capital-finance.uk account area_files/accic4.svg') }}">
                        Active
                        Deposit</span><abbr>
                        <div></div>
                        </abbr><b><small>$</small>{{ $user->active_deposit}}</b>
                    </div>
                  </li>

                  <li>
                    <div>
                      <span style="color: black;"><img src="{{ asset('assets/capital-finance.uk account area_files/accic2.svg') }}">
                        Profit Earned</span><abbr>
                        <div></div>
                        </abbr><b><small>$</small>{{ $user->earned_total }}</b>
                    </div>
                  </li>
                  <li>
                    <div>
                      <span style="color: black;"><img src="{{ asset('assets/capital-finance.uk account area_files/accic1.svg') }}"> Company
                        Bonus</span><abbr>
                        <div></div>
                      </abbr><b><small>$</small>0.00</b>
                    </div>
                  </li>
                  <li>
                    <div>
                      <span style="color: black;"><img src="{{ asset('assets/capital-finance.uk account area_files/accic3.svg') }}">
                        Available withdrawal</span><abbr>
                        <div></div>
                      </abbr><b><small>$</small>0.00</b>
                    </div>
                  </li>

                  <li>
                    <div>
                      <span><img src="{{ asset('assets/capital-finance.uk account area_files/accic5.svg') }}"> Total Deposit</span><abbr>
                        <div></div>
                      </abbr><b><small>$</small>0.00</b>
                    </div>
                  </li>
                </ul>
                <div class="clearfix"></div>
                <br>
                <ul class="account-page-list list2">
                  <!-- <li style="width:33.333%;">
                    <div>
                      <span><img src="{{ asset('assets/capital-finance.uk account area_files/accic6.svg') }}"> Last Deposit</span><abbr>
                        <div></div>
                      </abbr><b><small>$</small> &nbsp; <small></small></b> </div>
                  </li> -->
                  <li style="width:33.333%;">
                    <div>
                      <span style="color: black;"><img src="{{ asset('assets/capital-finance.uk account area_files/accic7.svg') }}">
                        Registration
                        Date</span><abbr>
                        <div></div>
                      </abbr><b class="small">{{ date("M-d-Y",strtotime($user->created_at)) }}</b>
                    </div>
                  </li>
                  <!-- <li style="width:33.333%;">
                    <div>
                      <span><img src="{{ asset('assets/capital-finance.uk account area_files/accic8.svg') }}"> Last Access</span><abbr>
                        <div></div>
                      </abbr><b class="small">15 Sep, 13:11 </b>
                    </div>
                  </li> -->
                </ul>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.auth.footer')