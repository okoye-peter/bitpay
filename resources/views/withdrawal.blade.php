@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

        <h3 class="bigtext"> Referral <span>Links </span></h3>

    </div>
</div>
<div class="clearfix"></div>
@error('error')
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Oops!</strong> {{$message}}
    </div>
@enderror
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Successful</strong> {{session('success')}}
    </div>
@endif

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

                        <form method="post" action="/user/withdraw">
                            @csrf
                            <input type="hidden" name="form_id" value="">
                            <input type="hidden" name="form_token" value="">
                            <input type="hidden" name="a" value="withdraw">
                            <input type="hidden" name="action" value="preview">
                            <input type="hidden" name="say" value="">

                            <table cellspacing="0" cellpadding="2" border="0">
                                <tbody>
                                    <tr>
                                        <td>Account Balance:</td>
                                        <td>$<b>{{$user->account_balance}}</b></td>
                                    </tr>
                                    <!-- <tr>
                                        <td>Pending Withdrawals: </td>
                                        <td>$<b></b></td>
                                    </tr> -->
                                </tbody>
                            </table>

                            <table cellspacing="0" cellpadding="2" border="0" width="80%">
                                <tbody>
                                    <tr>
                                        <th></th>
                                        <th>Processing</th>
                                        <th>Available</th>
                                        <!-- <th>Pending</th> -->
                                        <th>Account</th>
                                    </tr>
                                    @foreach ($investments as $index => $investment)
                                        <tr>
                                            <td><input type="radio" name="withdraw" value="{{$investment->id}}"></td>
                                            <td><i class="fa fa-bitcoin" width="44" height="17"
                                                    align="absmiddle"></i>
                                                Bitcoin</td>
                                            <td><b style="color:green">${{$investment->amount}}</b></td>
                                            <!-- <td><b style="color:red">$0.00</b></td> -->
                                            <td>Wallet Address: {{$user->walletID}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <table cellspacing="0" cellpadding="2" border="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>Withdrawal ($):</td>
                                        <td>
                                            <input type="submit" value="Request" class="button">
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="2"><textarea name="comment" class="form-control" cols="45"
                                                rows="4">Your comment</textarea>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
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