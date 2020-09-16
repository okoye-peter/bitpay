<script type="text/javascript" src="{{ asset('asset2/code.jquery.com/jquery-1.8.2.js') }}"></script>
<style type="text/css">
  #overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    z-index: 100;
    display: none;
  }


  .cnt223 a {
    text-decoration: none;
  }

  .popup {
    width: 100%;
    margin: 0 auto;
    display: none;
    position: fixed;
    z-index: 101;
  }

  .cnt223 {
    min-width: 600px;
    width: 600px;
    min-height: 150px;
    margin: 100px auto;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
  }

  .cnt223 p {
    clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
  }

  .cnt223 p a {
    color: #d91900;
    font-weight: bold;
  }

  .cnt223 .x {
    float: right;
    height: 35px;
    left: 22px;
    position: relative;
    top: -25px;
    width: 34px;
  }

  .cnt223 .x:hover {
    cursor: pointer;
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

  .alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    margin: 0em 4em;
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

  form .logoutbtn{
    background: transparent;
    border: 0;
    margin: 1.5em 0em;
    font-size: 16px;
  }
</style>
<!-- <script type='text/javascript'>
  $(function () {
    var overlay = $('<div id="overlay"></div>');
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup').show();
    $('.close').click(function () {
      $('.popup').hide();
      overlay.appendTo(document.body).remove();
      return false;
    });




    $('.x').click(function () {
      $('.popup').hide();
      overlay.appendTo(document.body).remove();
      return false;
    });
  });
</script> -->
<div class='popup'>
  <div class='cnt223'>
    <h2>EXCLUSIVE BONUS!! JUST A LIMITED TIME</h2>
    <br />
    SPECIAL PACKAGE..!!
    A one time deposit of $500 will qualify you to earn an instant 250% of the deposit just after the deposit
    confirmation.

    All you need to do is to make a one time deposit of $500 and you will get 250% of your deposit total $1250 in
    24hours time.
    Note: all deposits are to be made using the company’s wallet address

    Thanks for your cooperation
    <br />
    <br />
    <a href='#' class='close'>Close</a>
    </p>
  </div>
</div>

<!doctype html>
<html lang="en-gb">
<!--<![endif]-->



<head>
  <title>BIT-PAYCOIN</title>
  <meta charset="utf-8">
  <!-- Meta -->
  <meta name="keywords" content="" />
  <meta name="author" content="">
  <meta name="robots" content="" />
  <meta name="description" content="" />

  <!-- this styles only adds some repairs on idevices  -->
  <meta name="viewport" content="width=1280px">

  <!-- Favicon -->

  <link href="{{ asset('asset2/sdata/images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />


  <!-- Google fonts - witch you want to use - (rest you can just remove) -->
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet'
    type='text/css'>

  <!--[if lt IE 9]>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

  <!-- ######### CSS STYLES ######### -->

  <link rel="stylesheet" href="{{asset('asset2/sdata/css/reset.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('asset2/sdata/css/style.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{asset('asset2/sdata/css/font-awesome/css/font-awesome.min.css')}}">

  <!-- responsive devices styles -->
  <link rel="stylesheet" media="screen" href="{{asset('asset2/sdata/css/responsive-leyouts.css')}}" type="text/css" />

  <!-- mega menu -->
  <link href="{{asset('asset2/sdata/js/mainmenu/sticky.css')}}" rel="stylesheet">
  <link href="{{asset('asset2/sdata/js/mainmenu/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset2/sdata/js/mainmenu/mjes6gyvb.css')}}" rel="stylesheet">
  <link href="{{asset('asset2/sdata/js/mainmenu/menu.css')}}" rel="stylesheet">

  <!-- revolution slider -->

  <!-- CSS STYLE-->
  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/js/revolutionslider/css/style.css')}}" media="screen" />



  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/js/revolutionslider/rs-plugin/css/settings.css')}}" media="screen" />

  <!-- simple line icons -->
  <link rel="stylesheet" type="text/css" href="{{{asset('asset2/sdata/css/Simple-Line-Icons-Webfont/simple-line-icons.css')}}}"
    media="screen" />

  <!-- flexslider -->
  <link rel="stylesheet" href="{{asset('asset2/sdata/js/flexslider/flexslider.css')}}" type="text/css" media="screen" />

  <!-- Accordions -->
  <link rel="stylesheet" href="{{asset('asset2/sdata/js/accordion/accordion.css')}}" type="text/css" media="all">

  <!-- tabs -->
  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/js/tabs/assets/css/responsive-tabs.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/js/tabs/assets/css/responsive-tabs2.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/js/tabs/assets/css/responsive-tabs3.css')}}">

  <!-- forms -->
  <link rel="stylesheet" href="{{asset('asset2/sdata/js/form/sky-forms.css')}}" type="text/css" media="all">

  <!-- Remove the below comments to use your color option -->
  <!--<link rel="stylesheet" href="sdata/css/colors/green.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/red.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/green.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/cyan.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/orange.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/liteblue.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/purple.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/bridge.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/grey.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/colors/darkred.css" />-->
  <link rel="alternate stylesheet" type="text/css" href="{{asset('asset2/sdata/css/colors/dark.css')}}" title="dark" />

  <!-- just remove the below comments witch bg patterns you want to use -->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-default.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-one.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-two.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-three.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-four.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-five.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-six.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-seven.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-eight.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-nine.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-ten.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-eleven.css" />-->
  <!--<link rel="stylesheet" href="sdata/css/bg-patterns/pattern-twelve.css" />-->

  <!-- style switcher -->
  <link rel="stylesheet" media="screen" href="{{asset('asset2/sdata/js/style-switcher/color-switcher.css')}}" />
  <!-- style switcher colors -->



  <link rel="stylesheet" type="text/css" href="{{asset('asset2/sdata/css/s__style65b1.css?v=jbd56b')}}" />


  <link rel="alternate stylesheet" type="text/css" href="{{asset('asset2/sdata/css/colors/darkred.css')}}" title="darkred" />
  <link rel="alternate stylesheet" type="text/css" href="{{asset('asset2/sdata/css/colors/dark.css')}}" title="dark" />

</head>

<body>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/api-check/7.5.5/api-check.min.js' async defer></script>
  <div class="s__site_wrapper">
    <div class="site_wrapper">
      <header id="header">

        <!-- Top header bar -->
        @if (Auth::user())
          <div id="trueHeader">
            <div class="wrapper">
              <div class="container">
      
                <!-- Logo -->
                <div class="logo s__logo"><a href="/" id="logo"></a></div>
                <!-- Menu -->
                <div class="menu_main">
                  <div class="navbar yamm navbar-default">
                    <div class="container">
                      <div class="navbar-header">
                        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse"
                          data-target="#navbar-collapse-1"> <span>Menu</span>
                          <button type="button"> <i class="fa fa-bars"></i></button>
                        </div>
                      </div>
                      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                        <nav>
                          <ul class="nav navbar-nav">
                            <li class="dropdown"> <a href="/" class="dropdown-toggle active">Home</a>
                            </li>
                            <li class="dropdown"> <a href="/about" class="dropdown-toggle">About Us</a>
                            </li>
                            <li class="dropdown"> <a href="/news" class="dropdown-toggle">Company's news</a></li>
                            <li class="dropdown"> <a href="/faq" class="dropdown-toggle">Faq</a></li>
                            <li class="dropdown"> <a href="/terms&conditions" class="dropdown-toggle">Terms and Conditions</a></li>
                            <li class="dropdown"> <a href="/contact" class="dropdown-toggle">Support</a>
                            </li>
                            <li class="dropdown"> <a href="/user/user_dashboard" class="dropdown-toggle">dashboard</a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end menu -->
      
              </div>
      
              <!-- for future -->
      
            </div>
          </div>        
        @else
          <!-- Top header bar -->
        <div id="topHeader">
          <div class="wrapper">
            <div class="top_nav s__top_nav">
              <div class="container">
                <div class="left"> <a href="mailto:admin@bit-paycoin.com"><i class="fa fa-envelope-o"></i>
                    &nbsp;admin@bit-paycoin.com</a>
                  <a href="t.me/bitpaycoin.com" target="_blank"><i class="fa fa-telegram"></i>
                    &nbsp;@BIT-PAYCOIN.com</a>
                  <span>24x7 live Technical Support </span> </div>
                <div class="right">
                  <a class="login_but" href="/login"><i class="fa fa-unlock-alt"></i> Login</a>
                  <a href="/register" class="registerbut"><i class="fa fa-user"></i> Registration</a>
                  <div class="country_selector">language
                    <select id="source" class="s__language">
                      <option selected="selected" value="default"> English</option>
                      <option value="ru">???????</option>
                    </select>
                  </div>

                </div>
                <!-- end right social links -->

              </div>
            </div>
          </div>
        </div>
        <!-- end top navigation -->

    </div>
    <!-- end top navigation -->

    <div id="trueHeader">
      <div class="wrapper">
        <div class="container">

          <!-- Logo -->
          <div class="logo s__logo"><a href="/" id="logo"></a></div>
          <!-- Menu -->
          <div class="menu_main">
            <div class="navbar yamm navbar-default">
              <div class="container">
                <div class="navbar-header">
                  <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse"
                    data-target="#navbar-collapse-1"> <span>Menu</span>
                    <button type="button"> <i class="fa fa-bars"></i></button>
                  </div>
                </div>
                <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
                  <nav>
                    <ul class="nav navbar-nav">
                      <li class="dropdown"> <a href="/" class="dropdown-toggle active"> Home</a>
                      </li>
                      <li class="dropdown"> <a href="/about" class="dropdown-toggle"> About Us</a>
                      </li>
                      <li class="dropdown"> <a href="/news" class="dropdown-toggle"> Company's
                          news</a></li>
                      <li class="dropdown"> <a href="/faq" class="dropdown-toggle"> Faq</a></li>
                      <li class="dropdown"> <a href="/terms&conditions" class="dropdown-toggle"> Terms and
                          Conditions</a></li>
                      <li class="dropdown"> <a href="/contact" class="dropdown-toggle"> Support</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
          <!-- end menu -->

        </div>

        <!-- for future -->

      </div>
    </div>
    </header>

    <div class="clearfix"></div>    
        @endif
        
