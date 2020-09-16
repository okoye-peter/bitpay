@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

      <h3 class="bigtext"> Your <span>Referrals </span></h3>

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
                  <li class="first"><a href="/user/user_dashboard" class="active">Account</a></li>
                  <li><a href="/user/deposit">Make Deposit</a></li>


      <li><a href="/user/withdraw">Withdraw</a></li>

      <!-- <li><a href=" ./referral.html?a=referals" "="">Your Referrals</a></li> -->
      {{-- <li><a href="user/ref_links">Referral Links</a></li> --}}
      <!-- <li><a href=" ./history.html?a=history" "="">History</a></li> -->
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

              <br>
              <table width="100%" cellspacing="1" cellpadding="1">
                <tbody>
                  <tr>
                    <td class="item">Referrals:</td>
                    <td class="item">0</td>
                  </tr>
                  <tr>
                    <td class="item">Active referrals:</td>
                    <td class="item">0</td>
                  </tr>
                  <tr>
                    <td class="item">Total referral commission:</td>
                    <td class="item">$0.00</td>
                  </tr>
                </tbody>
              </table>
              <br>


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