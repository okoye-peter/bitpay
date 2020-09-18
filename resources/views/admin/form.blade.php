@include('admin.layouts.header', ['title'=>'Form'])

        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/index.html"
                                class="mobile-logo"><img
                                    src="./Orbiter - Bootstrap Minimal &amp; Clean Admin Template form_files/logo.svg"
                                    class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="./Orbiter - Bootstrap Minimal &amp; Clean Admin Template form_files/horizontal.svg"
                                                class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="./Orbiter - Bootstrap Minimal &amp; Clean Admin Template form_files/verticle.svg"
                                                class="img-fluid menu-hamburger-vertical" alt="verticle">
                                        </a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="./Orbiter - Bootstrap Minimal &amp; Clean Admin Template form_files/collapse.svg"
                                                class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="./Orbiter - Bootstrap Minimal &amp; Clean Admin Template form_files/close.svg"
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
                        <h4 class="page-title">Edit User dashboard</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Edit user dashboard</li>
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
            @error('error')
                <div class="container">
                    <div class="alert alert-success alert-dismissible fade show mx-3 mt-4">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{$message}}
                    </div>
                </div>
            @enderror
            <!-- Start Contentbar -->
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                </div>
                <!-- End row -->
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">User dashboard fields</h5>
                            </div>
                            <div class="card-body">
                                <!-- <h6 class="card-subtitle">Basic form validation.</h6> -->
                                <form class="form-validate"
                                    {{-- action="https://themesbox.in/admin-templates/orbiter/html/light-vertical/form-validations.html#" --}}
                                    action="{{ route('update.company.bonus') }}"
                                    method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">User ID <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username"
                                                name="clientID" placeholder="Enter User ID">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-email">Company bonus <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" name="company_bonus"
                                                placeholder="Enter Company bonus">
                                        </div>
                                    </div>
                                    <!-- 
                                    <div class=" form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-password">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-password"
                                                    name="val-password" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-confirm-password">Re-Type
                                                Password <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confirm-password"
                                                    name="val-confirm-password"
                                                    placeholder="Enter again passward for confirm">
                                            </div>
                                        </div> -->
                                    <!-- <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Description <span
                                                class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="val-suggestions"
                                                rows="5" placeholder="Enter Your Details."></textarea>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->

@include('admin.layouts.footer')
