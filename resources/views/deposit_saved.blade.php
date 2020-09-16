@include('layouts.header')
<div class="header_medium two s__header_medium">
    <div class="container">

      <h3 class="bigtext"> Make a <span>Deposit </span></h3>

    </div>
  </div>
  <div class="clearfix"></div>



  <div class="c__section_holder_all">
    <div class="container">
      <div class="s__accout_content three_fourth">
        <div class="login_form" style="max-width: 100%;">
          <div class="sky-form clearfix">
            <div class="right_sidebar s__accountnav">
              <div class="categories_holder">
                <h4 class="pro_sidebar_title">Account navigation </h4>
                <ul class="list">
                  <li class="first"><a href="/user_dashboard" class="active">Account</a></li>
                  <li><a href="/user/deposit">Make Deposit</a></li>


      <li><a href="/user/withdraw">Withdraw</a></li>

      {{-- <li><a href=" https://fox-access.com/?a=referals" "="">Your Referrals</a></li> --}}
      {{-- <li><a href="/user/ref_links">Referral Links</a></li> --}}
      {{-- <li><a href=" https://fox-access.com/?a=history" "="">History</a></li> --}}
      <li><a href="/user/edit">Edit Account</a></li>

      <li class=" last">
        <form action="/user/logout" method="post">
          @csrf
          <button type="submit" class="logoutbtn">Logout</button>
      </form>
    </li>
                </ul>
              </div>
            </div>
            <div class="content_left">



              <!-- <script language="javascript">
                function openCalculator(id) {

                  w = 225;
                  h = 400;
                  t = (screen.height - h - 30) / 2;
                  l = (screen.width - w - 30) / 2;
                  window.open('?a=calendar&type=' + id, 'calculator' + id, "top=" + t + ",left=" + l + ",width=" +
                    w + ",height=" + h + ",resizable=1,scrollbars=0");



                  for (i = 0; i < document.spendform.h_id.length; i++) {
                    if (document.spendform.h_id[i].value == id) {
                      document.spendform.h_id[i].checked = true;
                    }
                  }



                }

                function updateCompound() {
                  var id = 0;
                  var tt = document.spendform.h_id.type;
                  if (tt && tt.toLowerCase() == 'hidden') {
                    id = document.spendform.h_id.value;
                  } else {
                    for (i = 0; i < document.spendform.h_id.length; i++) {
                      if (document.spendform.h_id[i].checked) {
                        id = document.spendform.h_id[i].value;
                      }
                    }
                  }

                  var cpObj = document.getElementById('compound_percents');
                  if (cpObj) {
                    while (cpObj.options.length != 0) {
                      cpObj.options[0] = null;
                    }
                  }

                  if (cps[id] && cps[id].length > 0) {
                    document.getElementById('coumpond_block').style.display = '';

                    for (i in cps[id]) {
                      cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                    }
                  } else {
                    document.getElementById('coumpond_block').style.display = 'none';
                  }
                }
                var cps = {};
              </script> -->
              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{session('success')}}
                </div>    
              @endif
              <form method="post" name="spendform" action="/user/invest">
                @csrf
                <input type="hidden" name="form_id" value="15971292866398">
                <input type="hidden" name="form_token" value="6500720f0e1f9b4f4f7237ada5887635">
                <input type="hidden" name="a" value="deposit">
                Select a plan:<br>
                <table cellspacing="1" cellpadding="2" border="0" width="100%">
                  <tbody>
                    <tr>
                      <td colspan="3">
                        <input type="radio" name="plan" value="starter" checked="" onclick="updateCompound()">
                        <!--	<input type=radio name=h_id value='1'  checked  > -->

                        <b>120% After 24 Hours</b></td>
                    </tr>
                    <tr>
                      <td class="inheader">Plan</td>
                      <td class="inheader" width="200">Spent Amount ($)</td>
                      <td class="inheader" width="100" nowrap="">
                        <nobr> Profit (%)</nobr>
                      </td>
                    </tr>
                    <tr>
                      <td class="item">Plan 1</td>
                      <td class="item" align="right">$20.00 - $100.00</td>
                      <td class="item" align="right">120.00</td>
                    </tr>
                    <tr>
                      <td colspan="3" align="right"><a href="javascript:openCalculator(&#39;1&#39;)">Calculate your
                          profit &gt;&gt;</a></td>
                    </tr>
                  </tbody>
                </table><br><br>
                <script>
                  cps[1] = [];
                </script>
                <table cellspacing="1" cellpadding="2" border="0" width="100%">
                  <tbody>
                    <tr>
                      <td colspan="3">
                        <input type="radio" name="plan" value="basic" onclick="updateCompound()">
                        <!--	<input type=radio name=h_id value='2'  > -->

                        <b>150% after 48 Hours</b></td>
                    </tr>
                    <tr>
                      <td class="inheader">Plan</td>
                      <td class="inheader" width="200">Spent Amount ($)</td>
                      <td class="inheader" width="100" nowrap="">
                        <nobr> Profit (%)</nobr>
                      </td>
                    </tr>
                    <tr>
                      <td class="item">Plan 2</td>
                      <td class="item" align="right">$101.00 - $1000.00</td>
                      <td class="item" align="right">150.00</td>
                    </tr>
                    <tr>
                      <td colspan="3" align="right"><a href="javascript:openCalculator(&#39;2&#39;)">Calculate your
                          profit &gt;&gt;</a></td>
                    </tr>
                  </tbody>
                </table><br><br>
                <script>
                  cps[2] = [];
                </script>
                <table cellspacing="1" cellpadding="2" border="0" width="100%">
                  <tbody>
                    <tr>
                      <td colspan="3">
                        <input type="radio" name="plan" value="standard" onclick="updateCompound()">
                        <!--	<input type=radio name=h_id value='3'  > -->

                        <b>350% After 72 Hours</b></td>
                    </tr>
                    <tr>
                      <td class="inheader">Plan</td>
                      <td class="inheader" width="200">Spent Amount ($)</td>
                      <td class="inheader" width="100" nowrap="">
                        <nobr> Profit (%)</nobr>
                      </td>
                    </tr>
                    <tr>
                      <td class="item">Plan 3</td>
                      <td class="item" align="right">$1001.00 and more</td>
                      <td class="item" align="right">350.00</td>
                    </tr>
                    <tr>
                      <td colspan="3" align="right"><a href="javascript:openCalculator(&#39;3&#39;)">Calculate your
                          profit &gt;&gt;</a></td>
                    </tr>
                  </tbody>
                </table><br><br>
                <script>
                  cps[3] = [];
                </script>
                <table cellspacing="1" cellpadding="2" border="0" width="100%">
                  <tbody>
                    <tr>
                      <td colspan="3">
                        <input type="radio" name="plan" value="premium" onclick="updateCompound()">
                        <!--	<input type=radio name=h_id value='4'  > -->

                        <b>500% after 5 Days</b></td>
                    </tr>
                    <tr>
                      <td class="inheader">Plan</td>
                      <td class="inheader" width="200">Spent Amount ($)</td>
                      <td class="inheader" width="100" nowrap="">
                        <nobr> Profit (%)</nobr>
                      </td>
                    </tr>
                    <tr>
                      <td class="item">Plan 5</td>
                      <td class="item" align="right">$5000.00 and more</td>
                      <td class="item" align="right">500.00</td>
                    </tr>
                    <tr>
                      <td colspan="3" align="right"><a href="javascript:openCalculator(&#39;4&#39;)">Calculate your
                          profit &gt;&gt;</a></td>
                    </tr>
                  </tbody>
                </table><br><br>
                <script>
                  cps[4] = [];
                </script>

                <table cellspacing="0" cellpadding="2" border="0">
                  <tbody>
                    <tr>
                      <td>Your account balance ($):</td>
                      <td align="right">$0.00</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td align="right">
                        <small>
                        </small>
                      </td>
                    </tr>
                    <tr>
                      <td>Amount to Spend ($):</td>
                      <td align="right"><input type="text" name="amount" value="20.00" class="inpts" size="15"
                          style="text-align:right;"></td>
                    </tr>
                    <tr id="coumpond_block" style="display:none">
                      <td>Compounding(%):</td>
                      <td align="right">
                        <select name="compound" class="inpts" id="compound_percents"></select>
                      </td>
                    </tr>

                    <tr>
                      <td colspan="2">
                        <table cellspacing="0" cellpadding="2" border="0">
                          <tbody>
                            <tr>
                              <td><input type="radio" name="type" value="process_1000" checked=""></td>
                              <td>Spend funds from Bitcoin</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <footer>
                  <input type="submit" value="Spend" class="button s__pcenter one_full">
                </footer>

              </form>

              <script language="javascript">
                for (i = 0; i < document.spendform.type.length; i++) {
                  if ((document.spendform.type[i].value.match(/^process_/))) {
                    document.spendform.type[i].checked = true;
                    break;
                  }
                }
                updateCompound();
              </script>


            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <div class="clearfix"></div>
    <div class="footer1 s__footer1 s__footer1-1">
      <div class="social_links">
        <div class="container">

        </div>
      </div>
    </div>

@include('layouts.footer')