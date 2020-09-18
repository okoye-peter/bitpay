<!DOCTYPE html>
<!-- saved from url=(0037)https://capital-finance.uk/?a=account -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
  class=" sizes customelements history pointerevents postmessage webgl websockets cssanimations csscolumns csscolumns-width csscolumns-span csscolumns-fill csscolumns-gap csscolumns-rule csscolumns-rulecolor csscolumns-rulestyle csscolumns-rulewidth csscolumns-breakbefore csscolumns-breakafter csscolumns-breakinside flexbox picture srcset webworkers">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!--<base src="?a=home">-->
  <base href=".">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="hyips4u.com HYIP Developer Group">
  <link rel="icon" href="https://capital-finance.uk/assets/images/favicon.png" type="image/png">
  <link href="{{ asset('capital-finance.uk account area_files/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('capital-finance.uk account area_files/slick.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('capital-finance.uk account area_files/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{ asset('capital-finance.uk account area_files/slick-theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('capital-finance.uk account area_files/lightgallery.css') }}" rel="stylesheet">
  <link href="{{ asset('capital-finance.uk account area_files/fpssolidicons.css') }}" rel="stylesheet">
  <link href="{{ asset('capital-finance.uk account area_files/font-awesome.css') }}" rel="stylesheet">
  <script async="" src="{{ asset('capital-finance.uk account area_files/default') }}" charset="UTF-8" crossorigin="*"></script>
  <script src="{{ asset('capital-finance.uk account area_files/jquery.min.js.download') }}"></script>
  <script src="{{ asset('capital-finance.uk account area_files/slick.min.js.download') }}" type="text/javascript" charset="utf-8">
  </script>
  <script src="{{ asset('capital-finance.uk account area_files/bootstrap-select.min.js.download') }}"></script>
  <script src="{{ asset('capital-finance.uk account area_files/bootstrap.min.js.download') }}"></script>
  <script src="{{ asset('capital-finance.uk account area_files/scripts.js.downloa') }}d"></script>
  <script src="{{ asset('capital-finance.uk account area_files/calc-account.js.download') }}"></script>
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->



  <meta charset="utf-8">

  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=1280">

  <!-- Template Basic Images Start -->
  <meta property="og:image" content="{{ asset('assets/path/to/image.html') }}">
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="website" />

  <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico" type="image/x-icon') }}">
  <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.ico" type="image/x-icon') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png') }}">
  <!-- Template Basic Images End -->


  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/ResponsiveTables/ng_responsive_tables.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-sweetalert/sweetalert.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/flag-icon/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/ion.rangeSlider/css/ion.rangeSlider.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/libs/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

</head>

<body>
  <div class="wrapper">
    <div class="bg-light"></div>
    <header class="header-main">
      <div class="btn-menu-wrap">
        <div class="btn-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="container">
        <div class="header-top-line">
          <a href="{{ route('home')}}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-responsive logo-img">
            <span class="logo-title">Profit-<span>Miners</span></span>
          </a>
          <ul class="support-list">
            <li class="support-item wow bounceInLeft" data-wow-delay="0.6s">
              <a href="https://www.facebook.com/" target="__blank" class="support-item__link facebook--icon">
                <span class="support-item__value">Facebook</span>
              </a>
            </li>
            <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
              <a href="tel:+442039911140" class="support-item__link phone--icon">
                <span class="support-item__title">Phone</span>
                <span class="support-item__value">Coming soon</span>
              </a>
            </li>
            <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
              <a href="mailto:admin@Profit-miners.com" class="support-item__link email--icon">
                <span class="support-item__title">Email</span>
                <span class="support-item__value">admin@Profit-miners.com</span>
              </a>
            </li>
          </ul>

          <ul class="user-link-list">
            <li class="user-link-item wow fadeInUp" data-wow-delay="1s">
                <form action="{{ route('logout')}}" method="post" class="form-inline">
                    @csrf
                    <button type="submit"
                    class="user-link-item__link"><span>Sign Out</span>
                </button>
                </form>
            </li>
          </ul>
          <!-- /.user-link-wrap -->

        </div>
        <!-- /.header-top-line -->
      </div>
      <!-- /.container -->
    </header>

    <section class="header header-account">

      <div id="particles-js" class="particles-container particles-js"><canvas class="particles-js-canvas-el"
          width="1583" height="187" style="width: 100%; height: 100%;"></canvas></div>
      <div>
        <div class="header_menu">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="account-menu">
                  <ul>
                    <li><a href="{{ route('dashboard') }}">account<br>area</a></li>
                    <li><a href="{{ route('active.deposit') }}">active<br>deposits</a></li>
                    <li><a href="{{ route('withdraw') }}">
                        WITHDRAWAL<br>Funds</a></li>
                    <li><a href="{{ route('history') }}">
                        user<br>Transactions</a></li>
                    <!-- <li><a href="https://capital-finance.uk/?a=referals">
                        referal<br>system</a></li> -->
                    <!-- <li><a href="https://capital-finance.uk/?a=referallinks">
                        promo<br>materials</a></li> -->
                    <li><a href="{{ route('profile') }}">
                        Edit<br>account</a></li>
                  </ul>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>

    </section>