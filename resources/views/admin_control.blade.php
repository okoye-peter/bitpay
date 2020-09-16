<!DOCTYPE html>
<html lang="en">

<head>
    <title>BIT-PAYCOIN ADMIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('asset2/sdata/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset2/sdata/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('asset2/Css/superStyle.css')}}" rel="stylesheet" type="text/css">

    <script defer src="{{asset('asset2/code.jquery.com/jquery-1.8.2.js')}}"></script>

    <style>
        body {
            background-color: #302b47;
            margin: 0px;
            font-size: 100%;
            width: 100%;
            overflow-x: hidden;
        }

        .navbar {
            background: goldenrod;
            border-bottom: 1px solid #ffc107;
            padding: 0px;
        }

        .navbar-brand {
            color: black !important;
            font-size: 200%;
            position: relative;
            left: 5vh;
        }

        .navbar .fa-bitcoin {
            color: #ffc107;
            transform: rotate(0deg);
            font-size: 80%;
        }

        .nav-link {
            color: white !important;
            font-size: 100%;

        }

        .nav-link:hover {
            color: #ffc107 !important;

        }

        .nav-item {
            min-width: 16vh;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: border 1s;
        }

        .nav-item:hover {
            border-radius: 4px;
            border: 1px solid #ffc107;
        }

        .container-fluid {
            display: flex;
            justify-content: start;
            width: 100%;
            overflow-x: auto;
        }

        .side-bar {
            width: 3%;
            height: 100vh;
            display: flex;
            padding: 0px;
            justify-content: center;
            position: fixed;
            z-index: 2;
            /* border-right: 1px solid red; */
        }

        .side-bar ul {
            padding: 0px;
        }

        .side-bar ul li {
            background: transparent !important;
            border: none;
            margin-bottom: 10px;
            cursor: pointer;
        }

        .body-bar {
            width: 100%;
            height: auto;
            padding: 4px;
            position: relative;
            left: 6vh;
            overflow-y: auto;
        }


        #table-new-con {
            display: none;
        }

        #edit-detail-con {
            display: none;
        }

        #withdraw-con {
            display: none;
        }


        #web-mail-con {
            display: none;
            height: auto;
        }

        textarea {
            height: 40vh !important;
        }

        .invalid-feedback{    
    font-size: 11px;
    font-weight: 100;
    font-style: italic;
    color: red;
  }

  input.inpts.is-invalid{
    border: 1px solid red;
  }

  .alert {
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
  }

  .alert.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    margin: 0em 1.5em;
  }

  .alert.alert-danger{
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
    margin: 0em 4em;
    border-radius: 0.4em
  }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: .75rem 1.25rem;
    color: inherit;
    border: 0;
    background: transparent;
    font-size: 20px;
    font-weight: 600;
  }


        @media screen and (max-width:1024px) {
            .body-bar {
                left: 4.6vh;
            }
        }

        @media screen and (max-width:768px) {

            .side-bar {
                width: 6%;
            }

            .body-bar {
                left: 6.5vh;
            }

        }



        @media screen and (max-width:425px) {

            .side-bar {
                width: 40px;
            }

            .body-bar {
                left: 5.7vh;
            }
        }

    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light d-flex justify-content-between flex-wrap">

        <div>
            <a class="navbar-brand font-weight-bolder">Bit-paycoin</a>
        </div>
    </nav>

    <div class="container-fluid p-0">
        <div class="jumbotron side-bar rounded-0 m-0">
            <ul class="list-group">
                <!-- <li class="list-group-item" id="admin-home"><i class="fa fa-home"></i></li> -->
                <li class="list-group-item" id="users-tab"><i class="fa fa-home"></i></li>
                <li class="list-group-item" id="new-users-tab"><i class="fa fa-user-plus"></i></li>

                <li class="list-group-item" id="edit-tab"><i class="fa fa-edit"></i></li>
                <li class="list-group-item" id="withdraw-tab"><i class="fa fa-download"></i></li>
                <li class="list-group-item" id="mail-tab"><i class="fa fa-envelope"></i>
                </li>
            </ul>
        </div>
        <div class="jumbotron body-bar rounded-0 m-0">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" onclick="this.parentNode.style.display='none'">&times;</button>
                    <strong>Success!</strong> {{session()->get('success')}}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" onclick="this.parentNode.style.display='none'">&times;</button>
                    {{ session('error') }}
                </div>
            @endif
            <div class=" views" id="table-con">
                <table class="table table-striped table-bordered">
                    <caption>Activity List</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <!-- <th scope="col">Country</th> -->
                            <!-- <th scope="col">Date joined</th> -->
                            <th scope="col">Email</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Wallet Address</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($investments as $index => $investment)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$investment->user->email}}</td>
                                <td>{{$investment->user->username}}</td>
                                <td>{{$investment->user->walletID}}</td>
                                <td>{{$investment->amount}}</td>
                                <td>{{$investment->status}}</td>
                                <td>
                                    <form action="/update/{{$investment->id}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <select name="action" class="custom-select" onchange="this.parentNode.submit()">
                                            <option selected disabled>select an action</option>
                                            <option value="cancel">cancel</option>
                                            <option value="approve">approve</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>

            <div class=" views" id="table-new-con">
                <table class="table table-striped table-bordered">
                    <caption>List of new users</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">user name</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Date joined</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                            <tr>
                                <th scope="row">{{$index + 1}}</th>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->clientID}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <form action="/delete/{{$user->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>

            <div class=" views" id="edit-detail-con">
                <div class="jumbotron">
                    <form id="client-profit-form" method="POST" action="/update/user">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Investor ID</label>
                            <input type="text" class="form-control" id="ClientId"
                                placeholder="enter id from users' Id column" name="clientID">
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput1">Investor Account Balance </label>
                            <input type="number" class="form-control" id="totalInvestment" placeholder="e.g 3000" name="account_balance">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Total Earned</label>
                            <input type="number" class="form-control" id="totalProfit" placeholder="e.g 3000" name="earned_total">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Pending Withdrawal</label>
                            <input type="number" class="form-control" id="totalProfit" placeholder="e.g 3000" name="pending_withdrawal">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Withdrawal Total</label>
                            <input type="number" class="form-control" id="totalProfit" placeholder="e.g 3000" name="withdraw_total">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">ACtive Deposit</label>
                            <input type="number" class="form-control" id="totalProfit" placeholder="e.g 3000" name="active_deposit">
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Client Referral bonus</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="e.g 3000">
                        </div> -->

                        <button type="submit" class="btn btn-warning">Update Changes</button>
                    </form>
                </div>
            </div>

            <div class=" views" id="withdraw-con">
                <table class="table table-striped table-bordered">
                    <caption>List of withdrawals</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">user name</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Wallet</th>
                            <th scope="col">status</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($withdraws as $index => $withdraw)
                            <tr>
                                <th scope="row">{{$index +1}}</th>
                                <td>{{$withdraw->user->email}}</td>
                                <td>{{$withdraw->user->name}}</td>
                                <td>{{$withdraw->user->clientID}}</td>
                                <td>{{$withdraw->user->walletID}}</td>
                                <td>{{$withdraw->isPaid}}</td>
                                <td>
                                    <form action="/withdraw/{{$withdraw->id}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <select name="action" class="custom-select" onchange="this.parentNode.submit()">
                                            <option selected disabled>select an action</option>
                                            <option value="cancel">cancel</option>
                                            <option value="approve">approve</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>

            <div class="views" id="web-mail-con">
                <div class="jumbotron">
                    <form method="POST" action="/sendMail">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Investor ID</label>
                            <input type="text" class="form-control" id="ClientId"
                                placeholder="enter id from users' Id column" name="user_id">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Message Title</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Message</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" name="message"></textarea>

                        </div>

                        <button type="submit" class="btn btn-warning">Send Mail</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    </div>
    <script>
        // for users
        document.querySelector("#users-tab").addEventListener("click", () => {
            $(".views").not("#table-con").hide();
            $("#table-con").css("display", "block")
            console.log("users");
        })

        // for new users
        document.querySelector("#new-users-tab").addEventListener("click", () => {
            $(".views").not("#table-new-con").hide();
            $("#table-new-con").css("display", "block")
            console.log("new view");
        })

        // for edit
        document.querySelector("#edit-tab").addEventListener("click", () => {
            $(".views").not("#edit-detail-con").hide();
            $("#edit-detail-con").css("display", "block")
            console.log("edit view");
        })

        // for withdrawal
        document.querySelector("#withdraw-tab").addEventListener("click", () => {
            $(".views").not("#withdraw-con").hide();
            $("#withdraw-con").css("display", "block")
            console.log("withdrawals");
        })

        // for mail
        document.querySelector("#mail-tab").addEventListener("click", () => {
            $(".views").not("#web-mail-con").hide();
            $("#web-mail-con").css("display", "block")
            console.log("withdrawals");
        })
    </script>
</body>

</html>