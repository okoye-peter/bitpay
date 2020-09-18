<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal &amp; clean admin template">
    <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/assets/images/favicon.ico">
    <!-- Start css -->
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/style.css') }}" rel="stylesheet" type="text/css">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('admin.authenticate') }}" method="post">
                                        @csrf
                                        <h4 class="text-primary my-4">Log in to admin!</h4>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="username" name="email"  placeholder="Enter Username here" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password here" required>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-lg btn-block font-18">Log
                                            in</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/jquery.min.js.download') }}"></script>
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/popper.min.js.download') }}"></script>
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/bootstrap.min.js.download') }}"></script>
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/modernizr.min.js.download') }}"></script>
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/detect.js.download') }}"></script>
    <script src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/jquery.slimscroll.js.download') }}"></script>
    <!-- End js -->

</body>

</html>