<!DOCTYPE html>
<!-- saved from url=(0085)https://themesbox.in/admin-templates/orbiter/html/light-vertical/table-bootstrap.html -->
<html lang="en"
    class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Orbiter is a bootstrap minimal &amp; clean admin template">
    <meta name="keywords"
        content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin</title>
    <!-- Fevicon -->
    <link rel="shortcut icon"
        href="https://themesbox.in/admin-templates/orbiter/html/light-vertical/assets/images/favicon.ico">
    <!-- Start css -->
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/icons.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template_files/style.css') }}" rel="stylesheet"
        type="text/css">
    <!-- End css -->
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <body class="vertical-layout">
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close"
                class="infobar-settings-close"><img
                    src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/close.svg') }}"
                    class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Payment Reminders</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Stock Updates</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Open for New Products</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third"
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small
                                style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Enable SMS</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Newsletter Subscription</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">Show Map</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth"
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="box-shadow: rgb(223, 223, 223) 0px 0px 0px 0px inset; border-color: rgb(223, 223, 223); background-color: rgb(255, 255, 255); transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s;"><small
                                style="left: 0px; transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8">
                        <h6 class="mb-0">e-Statement</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <h6 class="mb-0">Monthly Report</h6>
                    </div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked=""
                            data-switchery="true" style="display: none;"><span class="switchery switchery-small"
                            style="background-color: rgb(0, 128, 255); border-color: rgb(0, 128, 255); box-shadow: rgb(0, 128, 255) 0px 0px 0px 11px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small
                                style="left: 13px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <p>PROFIT-MINERS</p>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar active">
                    <ul class="vertical-menu in">
                        <li class="active">
                            <a href="{{ route('admin.dashboard') }}">
                                <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/tables.svg') }}"
                                    class="img-fluid" alt="tables"><span>Tables</span><i
                                    class="feather icon-chevron-right pull-right"></i>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('admin.email') }}">
                                <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/apps.svg') }}"
                                    class="img-fluid" alt="apps"><span>Apps</span><i
                                    class="feather icon-chevron-right pull-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.form')}}">
                                <img src="{{ asset('assets/admin/Orbiter - Bootstrap Minimal & Clean Admin Template email_files/form_elements.svg') }}"
                                    class="img-fluid" alt="form_elements"><span>Forms</span><i
                                    class="feather icon-chevron-right pull-right"></i>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('logout')}}">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                <span>logout</span>
                            </a>

                        </li>




                    </ul>
                </div>
                <!-- End Navigationbar -->
            </div>
            <!-- End Sidebar -->
        </div>
        <!-- End Leftbar -->