@include('admin.layouts.header')

        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/index.html"
                                class="mobile-logo"><img
                                    src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/logo.svg') }}"
                                    class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/horizontal.svg') }}"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/verticle.svg') }}"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/collapse.svg') }}"
                                                class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/close.svg') }}"
                                                class="img-fluid menu-hamburger-close" alt="close">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->

            <!-- End Topbar -->

            <!-- Start Breadcrumbbar -->
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Data Tables</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a
                                        href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/table-bootstrap.html#">Tables</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Data tables</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <!-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumbbar -->
            @if (session()->has('success'))
                <div class="container">
                    <div class="alert alert-success alert-dismissible fade show mx-3 mt-4">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{session('success')}}
                    </div>
                </div>
            @endif
            <!-- Start Contentbar -->
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">

                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Activity List</h5>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Wallet Address</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($investments as $index => $invesment)
                                                <tr>
                                                    <th scope="row">{{++$index}}</th>
                                                    <td>{{$investment->user->email}}</td>
                                                    <td>{{$investment->user->full_name}}</td>
                                                    <td>{{$investment->user->walletID}}</td>
                                                    <td>{{$investment->amount}}</td>
                                                    <td>{{$investment->status}}</td>
                                                    <td>
                                                        <form action="{{ route('admin.confirm.investment', [$investment->id] ) }}" method="post" class="form-inline">
                                                            @csrf
                                                            <select name="action" class="form-control" onchange="this.parentElement.submit()">
                                                                <option value="" disabled selected></option>
                                                                <option value="approve">approve</option>
                                                                <option value="cancel">cancel</option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->

                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">New users</h5>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Date joined</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $index => $user)
                                                <tr>
                                                    <th scope="row">{{ ++$index }}</th>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->full_name}}</td>
                                                    <td>{{$user->clientID}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->

                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Withdrawal List</h5>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">User wallet</th>
                                                <th scope="col">Options</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($withdraws as $index => $withdraw)
                                                <tr>
                                                    <th scope="row">{{++$index}}</th>
                                                    <td>{{ $withdraw->user->email}}</td>
                                                    <td>{{$withdraw->user->username}}</td>
                                                    <td>{{$withdraw->user->clientID}}</td>
                                                    <td>{{$withdraw->user->walletID}}</td>
                                                    <td>
                                                        <form action="{{ route('admin.confirm.withdrawal', [$withdraw->id] ) }}" method="post" class="form-inline">
                                                            @csrf
                                                            <select name="action" class="form-control" onchange="this.parentElement.submit()">
                                                                <option value="" disabled selected></option>
                                                                <option value="approve">approve</option>
                                                                <option value="cancel">cancel</option>
                                                            </select>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
@include('admin.layouts.footer')