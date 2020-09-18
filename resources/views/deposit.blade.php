@include('layouts.auth.header', ['title' => 'Make Deposit'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">

                <span>Make <b>deposit</b></span>
                <small>Dashboard</small>

              </h2>
              <div style="float:right;">
                <a href="{{ route('deposit') }}" class="btn btn-blue with-icon"> Make deposit</a>
                <a href="{{ route('withdraw') }}" class="btn btn-green with-icon"> withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>





              <ul class="balance-list">


              </ul>
              <br>
              <div class="clearfix"></div>


              <script language="javascript">
                // function openCalculator(id) {

                //   w = 225;
                //   h = 400;
                //   t = (screen.height - h - 30) / 2;
                //   l = (screen.width - w - 30) / 2;
                //   window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" + w +
                //     ",height=" + h + ",resizable=1,scrollbars=0");



                //   for (i = 0; i < document.spendform.h_id.length; i++) {
                //     if (document.spendform.h_id[i].value == id) {
                //       document.spendform.h_id[i].checked = true;
                //     }
                //   }



                // }

                // function updateCompound() {
                //   var id = 0;
                //   var tt = document.spendform.h_id.type;
                //   if (tt && tt.toLowerCase() == 'hidden') {
                //     id = document.spendform.h_id.value;
                //   } else {
                //     for (i = 0; i < document.spendform.h_id.length; i++) {
                //       if (document.spendform.h_id[i].checked) {
                //         id = document.spendform.h_id[i].value;
                //       }
                //     }
                //   }

                //   var cpObj = document.getElementById('compound_percents');
                //   if (cpObj) {
                //     while (cpObj.options.length != 0) {
                //       cpObj.options[0] = null;
                //     }
                //   }

                //   if (cps[id] && cps[id].length > 0) {
                //     document.getElementById('coumpond_block').style.display = '';

                //     for (i in cps[id]) {
                //       cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                //     }
                //   } else {
                //     document.getElementById('coumpond_block').style.display = 'none';
                //   }
                // }
                // var cps = {};
              </script>


                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{session('success')}}
                    </div>
                @endif

              <div class="clearfix"></div>
                <form method="post" name="spendform" action="{{ route('save.deposit') }}">
                    @csrf
                  <input type="hidden" name="form_id" value="16003189707768"><input
                  type="hidden" name="form_token" value="9308039d515c576363de14a6372d9176">
                <input type="hidden" name="a" value="deposit">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box-over-table-form white dashcalc">
                      <b class="acc-subtitle"><i>01</i>Select <span>investment</span> plan</b>


                      <table class="table table-form" style="margin:0;">
                        <tbody>
                          <tr>
                            <td>
                              <label><span>Select <b>plan</b></span>
                                <p>
                                  <div
                                    class="btn-group bootstrap-select select-duration select-plans select2-hidden-accessible open">


                                    <select class="selectpicker select-duration select-plans select2-hidden-accessible"
                                      name="plan" id="inputSelect" data-select2-id="inputSelect" tabindex="-98"
                                      aria-hidden="true">

                                      <option value="" disabled selected>choose a plan</option>

                                      <option value="120">
                                        120% After 12 Hours</option>


                                      <option value="50">50% AFTER 24 Hours</option>


                                      <option value="150">150% After 24 Hours
                                      </option>


                                      <option value="350">350% After 48 Hours</option>

                                      <option value="500">500% After 3 days</option>


                                    </select>
                                  </div>

                                </p>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                    <br>


                    <div class="box-over-table-form white depfield">

                      <b class="acc-subtitle"><i>02</i>Enter deposit <span>amount</span></b>
                      <table class="table table-form">
                        <tbody>
                          <tr>
                            <td>
                              <label><span><b>Amount</b> to Spend</span>
                                <p>

                                  <input type="text" name="amount" class="calculate-amount" value="">
                                </p>
                              </label>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table table-list">
                        <tbody>
                          <tr>
                            <!--td ><span>Daily profit</span></td>
                    <td class='td-amount'>
                      <b class="daily-profit_value">0.4<small>$</small></b>
                    </td>
                    
                  </tr>
                  <tr>
                    <td ><span>Total return:</span></td>
                    <td class='td-amount'>
                      <b class="total-profit_value">6<small>$</small></b-->


                          </tr>
                        </tbody>
                      </table>
                      <div class="clearfix"></div>
                      <br>

                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="box-over-table-form" style="border:2px solid #21d09f; background:none">
                      <b class="acc-subtitle green"><i>03</i>Select <span>Payment</span></b>
                      <b class="sub" style="line-height: 30px; color: #020514;">
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>

                        <b class="sub" style="line-height: 30px; color: #020514;">Payment system: <b>Bitcoin</b>
                          <div class="clearfix"></div>

                          <div class="submit" style="margin-bottom:20px">
                            <input type="submit" value="Spend" class="sbmt">
                          </div>
                        </b>
                      </b></div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
                        style="line-height: 30px; color: #020514;">


                      </b></b>
                  </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
                      style="line-height: 30px; color: #020514;">
                    </b></b>
                </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
                    style="line-height: 30px; color: #020514;">
                    <div class="clearfix"></div>


                    <br>
                    <br>



                    <script language="javascript">
                      for (i = 0; i < document.spendform.type.length; i++) {
                        if ((document.spendform.type[i].value.match(/^process_/))) {
                          document.spendform.type[i].checked = true;
                          break;
                        }
                      }
                      updateCompound();
                    </script>


                  </b></b>
              </form>
            </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
                style="line-height: 30px; color: #020514;">
              </b></b>
          </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
              style="line-height: 30px; color: #020514;">
            </b></b>
        </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
            style="line-height: 30px; color: #020514;">
          </b></b>
      </div><b class="sub" style="line-height: 30px; color: #020514;"><b class="sub"
          style="line-height: 30px; color: #020514;">
        </b></b>
    </section>

@include('layouts.auth.footer')