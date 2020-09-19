@include('layouts.auth.header',['title'=>'Active Deposit'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">

                <span>Your <b>active</b></span>
                <small>Deposit List</small>

              </h2>
              <div style="float:right;">
                <a href="{{ route('deposit') }}" class="btn btn-blue with-icon"> Make deposit</a>
                <a href="{{ route('withdraw') }}" class="btn btn-green with-icon"> withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>






              <b>Total: $0.00</b><br><br>
              @foreach ($deposits as $index => $deposit)
                  <table cellspacing="1" cellpadding="2" border="0" width="100%" class="line">
                    <tbody>
                      <tr>
                        <td class="item">
                          <table cellspacing="1" cellpadding="2" border="0" class="table table-form table2"
                            style="width:100%;">
                            <tbody>
                              <tr>
                                <td colspan="3" align="center"><b>{{$deposit->profit_rate}}% AFTER {{$deposit->investment_time}} Hours</b></td>
                              </tr>
                              <tr>
                                <td class="inheader">Plan</td>
                                <td class="inheader" width="200">Deposit Amount</td>
                                <td class="inheader" width="100" nowrap="">
                                  <nobr> Profit (%)</nobr>
                                </td>
                              </tr>
                              <tr>
                                <td class="item">Plan 1</td>
                                <td class="item" align="right">$50.00 - $500.00</td>
                                <td class="item" align="right">{{$deposit->amount}}</td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                          <table cellspacing="1" cellpadding="2" border="0" class="table table-form table2"
                            style="width:100%;">
                            <tbody>
                              <tr>
                                <td colspan="4"><b>No deposits for this plan</b></td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
              @endforeach              
              <br>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.auth.footer')