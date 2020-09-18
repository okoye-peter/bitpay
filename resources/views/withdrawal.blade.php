@include('layouts.auth.header', ['title'=>'Withdrawal'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">

                <span>Withdrawal <b>Request</b></span>
                <small>Dashboard</small>

              </h2>
              <div style="float:right;">
                <a href="https://capital-finance.uk/?a=deposit" class="btn btn-blue with-icon">Make deposit</a>
                <a href="https://capital-finance.uk/?a=withdraw" class="btn btn-green with-icon">withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>












              <form method="post"><input type="hidden" name="form_id" value="16002352652627"><input type="hidden"
                  name="form_token" value="0f60f33d2804a2ed256d4daa98a14927">
                <input type="hidden" name="a" value="withdraw">
                <input type="hidden" name="action" value="preview">
                <input type="hidden" name="say" value="">



                <table cellspacing="0" cellpadding="2" border="0" class="table table-form table2" style="width:100%;">
                  <tbody>
                    <tr>
                      <td style="color: white !important">Account Balance:</td>
                      <td style=" color: white !important">$<b>0.00</b></td>
                    </tr>
                    <tr>
                      <td style="color: white !important">Pending Withdrawals: </td>
                      <td style=" color: white !important">$<b></b></td>
                    </tr>
                  </tbody>
                </table>
                <div class="box-over-table-form white">

                  <b class="acc-subtitle"><i>01</i>Choose payment <span>processor</span></b>
                  <table cellspacing="0" cellpadding="2" border="0" class="table table-form table2" style="width:100%;">
                    <tbody>
                      <tr>
                        <th style="color: white;"></th>
                        <th style="color: white;">Processing</th>
                        <th style="color: white;">Available</th>
                        <th style="color: white;">Pending</th>
                        <th style="color: white;">Account</th>
                      </tr>
                      <tr>
                        <td style="color: white;"></td>
                        <td style="color: white;"><img src="./capital-finance.uk withdrawal_files/1000.gif" width="44"
                            height="17" align="absmiddle"> Bitcoin</td>
                        <td style="color: white;"><b style="color:green">$0.00</b></td>
                        <td style="color: white;"><b style="color:red">$0.00</b></td>
                        <td style="color: white;"><a href="https://capital-finance.uk/?a=edit_account"
                            style="color: white !important;"><i>not
                              set</i></a></td>
                      </tr>
                    </tbody>
                  </table>

                  <br><br>
                  You have no funds to withdraw.



                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.auth.footer')