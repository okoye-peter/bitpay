@include('layouts.auth.header', ['title'=>'Histroy'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">
                <span>History <b></b></span>
                <small>Dashboard</small>

              </h2>
              <div style="float:right;">
                <a href="{{ route('deposit') }}" class="btn btn-blue with-icon"> Make deposit</a>
                <a href="{{ route('withdraw') }}" class="btn btn-green with-icon"> withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>







              <script language="javascript">
                function go(p) {
                  document.opts.page.value = p;
                  document.opts.submit();
                }
              </script>

              <div class="box-over-table-form white">

                <b class="acc-subtitle"><i>01</i>Choose <span>period</span></b>
                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                  <tbody>
                    <tr>
                      <form method="post" name="opts"></form><input type="hidden" name="form_id"
                        value="16002353513502"><input type="hidden" name="form_token"
                        value="9157d973ed8364fc0d56fc28efca018c">
                      <input type="hidden" name="a" value="history">
                      <input type="hidden" name="page" value="1">
                      <td style="color:white !important" style="color:white !important">
                        <select name="type" class="inpts select2-hidden-accessible" onchange="document.opts.submit();"
                          data-select2-id="1" tabindex="-1" aria-hidden="true">
                          <option value="" data-select2-id="3">All transactions</option>
                          <option value="deposit">Deposit</option>
                          <option value="withdrawal">Withdrawal</option>
                          <option value="earning">Earning</option>
                          <option value="commissions">Referral commission</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="2" style="width: 215px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-type-30-container"><span
                                class="select2-selection__rendered" id="select2-type-30-container" role="textbox"
                                aria-readonly="true" title="All transactions">All transactions</span><span
                                class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                        <br><img src="./1 new message history_files/q.gif" width="1" height="4"><br>
                        <select name="ec" class="inpts select2-hidden-accessible" data-select2-id="4" tabindex="-1"
                          aria-hidden="true">
                          <option value="-1" data-select2-id="6">All eCurrencies</option>
                          <option value="1000">Bitcoin</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="5" style="width: 170px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-ec-r3-container"><span
                                class="select2-selection__rendered" id="select2-ec-r3-container" role="textbox"
                                aria-readonly="true" title="All eCurrencies">All eCurrencies</span><span
                                class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                      </td>
                      <td style="color:white !important" align="right">
                        From: <select name="month_from" class="inpts select2-hidden-accessible" data-select2-id="7"
                          tabindex="-1" aria-hidden="true">
                          <option value="1">Jan
                          </option>
                          <option value="2">Feb
                          </option>
                          <option value="3">Mar
                          </option>
                          <option value="4">Apr
                          </option>
                          <option value="5">May
                          </option>
                          <option value="6">Jun
                          </option>
                          <option value="7">Jul
                          </option>
                          <option value="8" selected="" data-select2-id="9">Aug
                          </option>
                          <option value="9">Sep
                          </option>
                          <option value="10">Oct
                          </option>
                          <option value="11">Nov
                          </option>
                          <option value="12">Dec
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="8" style="width: 78px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-month_from-73-container"><span
                                class="select2-selection__rendered" id="select2-month_from-73-container" role="textbox"
                                aria-readonly="true" title="Aug
">Aug
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span> &nbsp;
                        <select name="day_from" class="inpts select2-hidden-accessible" data-select2-id="10"
                          tabindex="-1" aria-hidden="true">
                          <option value="1">1
                          </option>
                          <option value="2">2
                          </option>
                          <option value="3" selected="" data-select2-id="12">3
                          </option>
                          <option value="4">4
                          </option>
                          <option value="5">5
                          </option>
                          <option value="6">6
                          </option>
                          <option value="7">7
                          </option>
                          <option value="8">8
                          </option>
                          <option value="9">9
                          </option>
                          <option value="10">10
                          </option>
                          <option value="11">11
                          </option>
                          <option value="12">12
                          </option>
                          <option value="13">13
                          </option>
                          <option value="14">14
                          </option>
                          <option value="15">15
                          </option>
                          <option value="16">16
                          </option>
                          <option value="17">17
                          </option>
                          <option value="18">18
                          </option>
                          <option value="19">19
                          </option>
                          <option value="20">20
                          </option>
                          <option value="21">21
                          </option>
                          <option value="22">22
                          </option>
                          <option value="23">23
                          </option>
                          <option value="24">24
                          </option>
                          <option value="25">25
                          </option>
                          <option value="26">26
                          </option>
                          <option value="27">27
                          </option>
                          <option value="28">28
                          </option>
                          <option value="29">29
                          </option>
                          <option value="30">30
                          </option>
                          <option value="31">31
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="11" style="width: 65px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-day_from-ah-container"><span
                                class="select2-selection__rendered" id="select2-day_from-ah-container" role="textbox"
                                aria-readonly="true" title="3
">3
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span> &nbsp;

                        <select name="year_from" class="inpts select2-hidden-accessible" data-select2-id="13"
                          tabindex="-1" aria-hidden="true">
                          <option value="2016">2016
                          </option>
                          <option value="2017">2017
                          </option>
                          <option value="2018">2018
                          </option>
                          <option value="2019">2019
                          </option>
                          <option value="2020" selected="" data-select2-id="15">2020
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="14" style="width: 86px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-year_from-hb-container"><span
                                class="select2-selection__rendered" id="select2-year_from-hb-container" role="textbox"
                                aria-readonly="true" title="2020
">2020
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span><br><img src="./1 new message history_files/q.gif"
                          width="1" height="4"><br>

                        To: <select name="month_to" class="inpts select2-hidden-accessible" data-select2-id="16"
                          tabindex="-1" aria-hidden="true">
                          <option value="1">Jan
                          </option>
                          <option value="2">Feb
                          </option>
                          <option value="3">Mar
                          </option>
                          <option value="4">Apr
                          </option>
                          <option value="5">May
                          </option>
                          <option value="6">Jun
                          </option>
                          <option value="7">Jul
                          </option>
                          <option value="8">Aug
                          </option>
                          <option value="9" selected="" data-select2-id="18">Sep
                          </option>
                          <option value="10">Oct
                          </option>
                          <option value="11">Nov
                          </option>
                          <option value="12">Dec
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="17" style="width: 78px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-month_to-o5-container"><span
                                class="select2-selection__rendered" id="select2-month_to-o5-container" role="textbox"
                                aria-readonly="true" title="Sep
">Sep
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span> &nbsp;
                        <select name="day_to" class="inpts select2-hidden-accessible" data-select2-id="19" tabindex="-1"
                          aria-hidden="true">
                          <option value="1">1
                          </option>
                          <option value="2">2
                          </option>
                          <option value="3">3
                          </option>
                          <option value="4">4
                          </option>
                          <option value="5">5
                          </option>
                          <option value="6">6
                          </option>
                          <option value="7">7
                          </option>
                          <option value="8">8
                          </option>
                          <option value="9">9
                          </option>
                          <option value="10">10
                          </option>
                          <option value="11">11
                          </option>
                          <option value="12">12
                          </option>
                          <option value="13">13
                          </option>
                          <option value="14">14
                          </option>
                          <option value="15">15
                          </option>
                          <option value="16" selected="" data-select2-id="21">16
                          </option>
                          <option value="17">17
                          </option>
                          <option value="18">18
                          </option>
                          <option value="19">19
                          </option>
                          <option value="20">20
                          </option>
                          <option value="21">21
                          </option>
                          <option value="22">22
                          </option>
                          <option value="23">23
                          </option>
                          <option value="24">24
                          </option>
                          <option value="25">25
                          </option>
                          <option value="26">26
                          </option>
                          <option value="27">27
                          </option>
                          <option value="28">28
                          </option>
                          <option value="29">29
                          </option>
                          <option value="30">30
                          </option>
                          <option value="31">31
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="20" style="width: 65px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-day_to-fx-container"><span
                                class="select2-selection__rendered" id="select2-day_to-fx-container" role="textbox"
                                aria-readonly="true" title="16
">16
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span> &nbsp;

                        <select name="year_to" class="inpts select2-hidden-accessible" data-select2-id="22"
                          tabindex="-1" aria-hidden="true">
                          <option value="2016">2016
                          </option>
                          <option value="2017">2017
                          </option>
                          <option value="2018">2018
                          </option>
                          <option value="2019">2019
                          </option>
                          <option value="2020" selected="" data-select2-id="24">2020
                          </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                          data-select2-id="23" style="width: 86px;"><span class="selection"><span
                              class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                              aria-expanded="false" tabindex="0" aria-labelledby="select2-year_to-c6-container"><span
                                class="select2-selection__rendered" id="select2-year_to-c6-container" role="textbox"
                                aria-readonly="true" title="2020
">2020
                              </span><span class="select2-selection__arrow" role="presentation"><b
                                  role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>

                      </td>
                      <td style="color:white !important" style="color:white !important">
                        &nbsp; <input type="submit" value="Go" class="sbmt">
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>
              <br><br>


              <table cellspacing="1" cellpadding="2" border="0" class="table table-form table2" style="width:100%;">
                <tbody>
                  <tr>
                    <td style="color:white !important" class="inheader"><b>Type</b></td>
                    <td style="color:white !important" class="inheader" width="200"><b>Amount</b></td>
                    <td style="color:white !important" class="inheader" width="170"><b>Date</b></td>
                  </tr>
                  <tr>
                    <td style="color:white !important" colspan="3" align="center">No transactions found</td>
                  </tr>
                  <tr>
                    <td style="color:white !important" colspan="3">&nbsp;</td>

                  </tr>

                </tbody>
              </table>

              <ul class="pagination">
                <li class="page-item"><a class="prev page-link disabled">&lt;&lt;</a></li>
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a class="next page-link disabled">&gt;&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.auth.footer')