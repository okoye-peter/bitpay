@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

        <h3 class="bigtext"> Please confirm your <span>deposit</span></h3>

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
                                <li><a href="/user/deposit">Make Deposit</a></li>


<li><a href="/user/withdraw">Withdraw</a></li>

{{-- <li><a href=" ./referral.html?a=referals" "="">Your Referrals</a></li> --}}
{{-- <li><a href="/user/ref_links">Referral Links</a></li> --}}
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


                        Please send your payments to this Bitcoin Wallet Address: <br><br><input type="text"
                            value="36tGKivLqq3XkiWxHnZJJKBdo2hrWhbFCK" id="myInput" class="inpts" readonly="">
                        <br>
                        <br><input type="button" value="Open in Blockchain App" class="sbmt"
                            onclick="document.location=&#39;bitcoin:36tGKivLqq3XkiWxHnZJJKBdo2hrWhbFCK?amount=0.0000&#39;">
                        &nbsp;
                        <input type="button" class="sbmt" value="Copy Wallet" onclick="myFunction()">

                        <br><br>

                        <table cellspacing="0" cellpadding="2" class="form deposit_confirm">
                            <tbody>
                                <tr>
                                    <th>Plan:</th>
                                    <td>{{$data['profit']}}% After {{$data['time']}} hours</td>
                                </tr>
                                <tr>
                                    <th>Profit:</th>
                                    <td>{{$data['profit']}}% After {{$data['time']}} hours</td>
                                </tr>
                                <tr>
                                    <th>Principal Return:</th>
                                    <td>No (included in profit)</td>
                                </tr>
                                <tr>
                                    <th>Principal Withdraw:</th>
                                    <td>
                                        Not available </td>
                                </tr>

                                <tr>
                                    <th>Credit Amount:</th>
                                    <td>${{$data['amount']}}</td>
                                </tr>
                                <tr>
                                    <th>Deposit Fee:</th>
                                    <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
                                </tr>
                                <tr>
                                    <th>Debit Amount:</th>
                                    <td>${{$data['amount']}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <form name="spend" method="POST" action="/user/save_deposit">
                            @csrf
                            {{-- <input type="hidden" name="form_id" value="15966326429112">
                            <input type="hidden" name="form_token" value="f87dabb64e3776ca0df277e1ebaa5448">
                            <input type="hidden" name="a" value="deposit">
                            <input type="hidden" name="action" value="confirm">
                            <input type="hidden" name="type" value="process_1000">
                            <input type="hidden" name="h_id" value="1">
                            <input type="hidden" name="compound" value=""> --}}

                            <input type="hidden" name="time" value="{{$data['time']}}">
                            <input type="hidden" name="profit" value="{{$data['profit']}}">
                            <input type="hidden" name="plans" value="{{$data['plans']}}">
                            <input type="hidden" name="amount" value="{{$data['amount']}}">

                            <br><input type="submit" value="Save" class="sbmt"> &nbsp;
                            <input type="button" class="sbmt" value="Cancel"
                                onclick="document.location=&#39;?a=deposit&#39;">
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
