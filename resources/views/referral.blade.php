@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

        <h3 class="bigtext"> Referral <span>Links </span></h3>

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
                                <li class="first"><a href="/user/user_dashboard"
                                        class="active">Account</a></li>
                                <li><a href="/user/invest">Make Deposit</a></li>


<li><a href="/user/withdraw">Withdraw</a></li>

<!-- <li><a href=" ./referral.html?a=referals" "="">Your Referrals</a></li> -->
{{-- <li><a href="/ref_links">Referral Links</a></li> --}}
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






                        <form method="post"><input type="hidden" name="form_id" value="15965862198879"><input
                                type="hidden" name="form_token" value="41d8ae05920e5febb46ef1ce63fc7efb">
                            <input type="hidden" name="a" value="withdraw">
                            <input type="hidden" name="action" value="preview">
                            <input type="hidden" name="say" value="">



                            <table cellspacing="0" cellpadding="2" border="0">
                                <tbody>
                                    <tr>
                                        <td>Account Balance:</td>
                                        <td>$<b>0.00</b></td>
                                    </tr>
                                    <tr>
                                        <td>Pending Withdrawals: </td>
                                        <td>$<b></b></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table cellspacing="0" cellpadding="2" border="0" width="80%">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Processing</th>
                                        <th>Available</th>
                                        <th>Pending</th>
                                        <th>Account</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><img src="./fox-access.com referal_files/1000.gif" width="44"
                                                height="17" align="absmiddle"> Bitcoin</td>
                                        <td><b style="color:green">$0.00</b></td>
                                        <td><b style="color:red">$0.00</b></td>
                                        <td>Wallet Address: 77reirer89asa8snxsnxanxsna</td>
                                    </tr>
                                </tbody>
                            </table>

                            <br><br>
                            You have no funds to withdraw.
                        </form>


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