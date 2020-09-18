@include('admin.layouts.header', ['title'=>'Email'])

    <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/index.html"
                                class="mobile-logo"><img
                                    src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/logo.svg') }}"
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
            <!-- Start Breadcrumbbar -->
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Compose Email</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Apps</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Email</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Compose email</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <!-- <div class="widgetbar">
                            <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- End Breadcrumbbar -->

            @if (session()->has('success'))
                <div class="container ">
                    <div class="alert alert-success alert-dismissible fade show mx-3 mt-4">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{session('success')}}
                    </div>
                </div>
            @endif
            
            <!-- Start Contentbar -->
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                    <!-- Start col -->
                    <div class="col-lg-3">
                        <div class="email-leftbar">
                            <div class="card m-b-30">
                                <div class="card-header text-center">
                                    <a href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/apps-email-compose.html"
                                        class="btn btn-danger-rgba btn-lg btn-block py-2 px-0 font-18"><i
                                            class="feather icon-plus mr-2"></i>Compose</a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a
                                                href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/apps-email-compose.html#"></i>Important</a>
                                            <span class="badge badge-secondary-inverse">6</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a
                                                href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/apps-email-compose.html#"></i>Spam</a>
                                            <span class="badge badge-secondary-inverse">7</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a
                                                href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/apps-email-compose.html#">Trash</a>
                                            <span class="badge badge-secondary-inverse">8</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                    <!-- Start col -->
                    <div class="col-lg-9">
                        <div class="email-rightbar">
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class="card-title">New Message</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.send.mail') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="emailTo" class="col-sm-2 col-form-label">To</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailTo"
                                                    placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="emailCc" class="col-sm-2 col-form-label">CC</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailCc" placeholder="CC">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="emailBcc" class="col-sm-2 col-form-label">BCC</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="emailBcc"
                                                    placeholder="BCC">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="emailSubject" class="col-sm-2 col-form-label">Subject</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="emailSubject" name="title"
                                                    placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="emailSubject" class="col-sm-2 col-form-label">Message</label>
                                            <div class="col-sm-10">
                                                <textarea name="message" id="" class="form-control" placeholder="Enter message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col-sm-12">
                                                <button type="submit"
                                                    class="btn btn-primary-rgba my-1"></i>Send</button>
                                            </div>
                                        </div>
                                    </form>
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
