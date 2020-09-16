<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coinverse</title>
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/icons/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/Css/styled.css')}}" rel="stylesheet" type="text/css">
    <script defer src="{{asset('assets/js/dummy.js')}}"></script>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light d-flex justify-content-between flex-wrap">

        <div>
            <a class="navbar-brand font-weight-bolder" href="/"><span class="strip">Gold</span>C<span class="fab fa-bitcoin"></span>in<span>verse</span></a>
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="showSideBar()"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mx-4 active">
                        <a class="nav-link" href="/">Welcome
                            <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/about">About Us<span>
                                <!-- <i class="fa fa-question-circle tab-icons ml-1"></i> -->
                            </span>
                        </a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/terms&condition">Terms of Service<span>
                                <!-- <i class="fa fa-users tab-icons ml-1"></i> -->
                            </span></a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/">Contact Us <span>
                                <!-- <i class="fa fa-phone tab-icons ml-1"></i> -->
                            </span></a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="invest"><button
                                class="btn btn-primary rounded get-started-top font-weight-bold">Invest
                                Bitcoin</button></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid p-o">
        <div class="dummy-everything">
            <div><span class="lead dummy-name">{{$user->username}}</span>
                <i class="fa fa-user-circle dp-dummy"></i>
            </div>
            <div>
                <span class="lead dummy-mail">{{$user->email}}</span>
                <i class="fa fa-envelope dp-dummy"></i>
            </div>
        </div>
    </div>
    <div class="container p-0">

        <div class="jumbotron mb-0 invest-s1-super bg-transparent rounded-0">
            <div class="table-responsive">

                <table class="table table-striped table-bordered table-sm mb-5">
                    <thead>
                        <tr>
                            <th scope="col">Plans</th>
                            <th scope="col">STARTER</th>
                            <th scope="col">BASIC</th>
                            <th scope="col">STANDARD</th>
                            <th scope="col">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Minimum</th>
                            <td>$25</td>
                            <td>$500</td>
                            <td>$1,700</td>
                            <td>$2,700</td>
                        </tr>
                        <tr>
                            <th scope="row">Maximum</th>
                            <td>$500</td>
                            <td>$1,500</td>
                            <td>$10,000</td>
                            <td>$30,000</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="invest-s1">

                <form id="investForm" method="post" action="/invest">
                    @csrf
                    <div class="form-group">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible">

                                <button type="button" class="close" data-dismiss="alert" onclick="this.parentNode.style.display='none'">&times;</button>
                                <strong>Success!</strong> {{session()->get('success')}}

                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" onclick="this.parentNode.style.display='none'">&times;</button>
                                {{ session('error') }}</div>
                        @endif
                        <label for="inputState">Choose Plan</label>
                        <select class="form-control selector" name="plan">
                            <option class="select-option" selected>Choose your investment plan</option>
                            <option class="select-option" id="plan-a" value="starter">STARTER $25 - $500 (20%)</option>
                            <option class="select-option" id=" plan-b" value="basic">BASIC $500 - $1,500 (25%)</option>
                            <option class="select-option" id="plan-c" value="standard">STANDARD $1,700 - $10,000 (50%)</option>
                            <option class="select-option" id="plan-d" value="premium">PREMIUM $2,700 - $30,000 (100%)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inputState">Capital in USD</label>
                        <input type="number" min="25" max="100000000000" name="amount" class="form-control" id="inputCapital"
                            placeholder="Capital in USD">
                    </div>
                    <!-- <div class="form-group">
                        <label for="inputState">Bitcoin Equivalent</label>
                        <input readonly class="form-control" value="30">
                    </div> -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="jumbotron talk-super">
            <div class="real-talk">
                <p class="lead text-white">Why Trust US?
                </p>
                <!-- <p class="small text-white">We serve</p> -->
            </div>
            <div class="jumbotron bg-warning talk-con">

                <div class="jumbotron talk-con-inner">
                    <p class="figures"><span id="daily-figure">2,040</span>+</p>
                    <p class="figure-text">Daily Users</p>
                </div>
                <div class="jumbotron talk-con-inner">
                    <p class="figures"><span id="traded-figure">$52,000</span></p>
                    <p class="figure-text">traded volume</p>
                </div>
                <div class="jumbotron talk-con-inner">
                    <p class="figures"><span id="withdraw-figure">20,000</span>+</p>
                    <p class="figure-text">Daily Withdrawals</p>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron m-0 bg-transparent col-lg-12 m-0">
        <center>
            <div class="hrr-5 hidden-xs"></div>
        </center>

        <p class="text-center small text-secondary">©2016 - 2020 Coinverse<br>
            Coinverse is a registered trademark of Coinverse.
        </p>

    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ee14d389e5f69442290539d/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script defer src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script defer src="{{asset('assets/js/spine.js')}}"></script>
</body>

</html>
