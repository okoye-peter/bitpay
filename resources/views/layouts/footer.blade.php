<!--end footer-->
<div class="footer_payment_types s__footer_payment_types">
    <div class="container">
      <ul class="payment_logos">
        <li class="white">Payments <br />
          We Accept</li>
        <li><img src="{{asset('asset2/sdata/images/s__am18.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am43.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am48.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am68.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am69.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am71.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am77.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am79.png')}}" alt="" /></li>
        <li><img src="{{asset('asset2/sdata/images/s__am80.png')}}" alt="" /></li>
      </ul>
    </div>
  </div>
  <!--end payment types-->

  <div class="copyrights s__copyrights">
    <div class="container"> <span>Copyright © 2020 <a href="/">BIT-PAYCOIN.com</a> | All rights reserved.
        <!-- </span><span class="text2"><a href="https://beta.companieshouse.gov.uk/company/11911614"
          target="blank">REGISTRATION NUMBER: 11911614</a> | <a
          href="https://beta.companieshouse.gov.uk/company/11911614" target="blank">CHECK CERTIFICATE </a></span> -->
    </div>
  </div>
  <!--end copy rights-->

  <a href="#" class="scrollup"></a><!-- end scroll to top of the page-->

  </div>
  <!--end sitewraper-->

  <script type="text/javascript" src="{{asset('asset2/sdata/js/style-switcher/styleswitcher.js')}}"></script>
  <div class="s__themes">
    <a href="#" s__cc="default" onClick="setActiveStyleSheet('default'); return false;" title="green"
      class="s__themes_a1 active"><span><i class="fa fa-sun-o" aria-hidden="true"></i></span></a>
    <a href="#" s__cc="dark" onClick="setActiveStyleSheet('dark'); return false;" title="Dark"
      class="s__themes_a2"><span><i class="fa fa-moon-o" aria-hidden="true"></i></span></a>
  </div>
  <!-- end style switcher -->

  <!-- ######### JS FILES ######### -->
  <!-- get jQuery from the google apis -->
  <script type="text/javascript" src="{{asset('asset2/sdata/js/universal/jquery.js')}}"></script>

  <!-- style switcher -->
  <script src="{{asset('asset2/sdata/js/style-switcher/jquery-1.js')}}"></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/api-check/7.5.5/api-check.min.js' async defer></script>
  <script src="{{asset('asset2/sdata/js/style-switcher/styleselector.js')}}"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="{{asset('asset2/sdata/js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset2/sdata/js/revolutionslider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset2/sdata/js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}">
  </script>
  <script type="text/javascript" src="{{asset('asset2/sdata/js/revolutionslider/custom1.js')}}"></script>

  <!-- mega menu -->
  <script src="{{asset('asset2/sdata/js/mainmenu/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset2/sdata/js/mainmenu/customeUI.js')}}"></script>

  <!-- sticky menu -->
  <script type="text/javascript" src="{{asset('asset2/sdata/js/mainmenu/sticky.js')}}"></script>
  <script type="text/javascript" src="{{asset('asset2/sdata/js/mainmenu/modernizr.custom.75180.js')}}"></script>

  <!-- tabs -->
  <script src="{{asset('asset2/sdata/js/tabs/assets/js/responsive-tabs.min.js')}}" type="text/javascript"></script>

  <!-- accordion -->
  <script type="text/javascript" src="{{asset('asset2/sdata/js/accordion/custom.js')}}"></script>

  <!-- scroll up -->
  <script src="{{asset('asset2/sdata/js/scrolltotop/totop.js')}}" type="text/javascript"></script>

  <!-- Flexslider -->
  <script src="{{asset('asset2/sdata/js/flexslider/jquery.flexslider.js')}}"></script>
  <script src="{{asset('asset2/sdata/js/flexslider/custom.js')}}"></script>

  <script type="text/javascript">
    // jQuery(document).ready(function() {
    $(".mboxes_close").click(function () {
      $(this).closest(".alert").fadeOut();
      return false;
    });
    // });

    // ------

    function get_cookie(cookie_name) {
      var results = document.cookie.match('(^|;) ?' + cookie_name + '=([^;]*)(;|$)');
      if (results) {
        return (unescape(results[2]));
      } else {
        return null;
      }
    }
    if (get_cookie("style") == 'dark') {
      $('.s__themes_a1').removeClass('active');
      $('.s__themes_a2').addClass('active');
    } else {
      $('.s__themes_a2').removeClass('active');
      $('.s__themes_a1').addClass('active');
    }
    $(".s__themes > a").click(function () {
      $('.s__themes > a').removeClass('active');
      $(this).addClass('active');
      document.cookie = "style=" + $(this).attr("s__cc");
    });

    $('#source').change(function () {
      $(location).attr('href', '?language=' + $(this).val());
    });
  </script>


  <script type="text/javascript">
    $("#s__calculate_profit_but").click(function () {
      var plan = $("#s__calculate_profit_sel").val();
      var amount = (1 * $("#s__calculate_profit_inp").val());
      var percent = 0;
      var profit1 = 0;
      var profit2 = 0;
      var txt = '';
      var period, retdep, type;
      if (plan == 1) {
        if (amount >= 20) {
          period = 1;
          retdep = 1;
          type = 1;
          if (amount < 20) {
            percent = 0;
          } else if (amount < 20) {
            percent = 0;
          } else if (amount <= 100) {
            percent = 120;
          }
        }
        txt = 'AFTER 12 HOURS';
      } else if (plan == 2) {
        if (amount >= 100) {
          period = 2;
          retdep = 0;
          type = 1;
          if (amount < 100) {
            percent = 0;
          } else if (amount < 100) {
            percent = 0;
          } else if (amount <= 1000) {
            percent = 150;
          }
        }
        txt = 'AFTER 24 HOURS';
      } else if (plan == 3) {
        if (amount >= 1000) {
          period = 25;
          retdep = 1;
          type = 0;
          if (amount < 1000) {
            percent = 0;
          } else if (amount < 1000) {
            percent = 0;
          } else if (amount <= 999999999) {
            percent = 300;
          }
        }
        txt = 'AFTER 48 HOURS';
      } else if (plan == 4) {
        if (amount >= 5000) {
          period = 5;
          retdep = 1;
          type = 0;
          if (amount < 5000) {
            percent = 0;
          } else if (amount < 5000) {
            percent = 0;
          } else if (amount <= 999999999) {
            percent = 500;
          }
        }
        txt = 'AFTER 3 DAYS';
      }
      profit1 = (amount * percent) / 100;
      profit1 = profit1.toFixed(2).substring(0, profit1.toFixed(3).length - 1);
      if (type == 1) {
        profit2 = (amount * percent) / 100;
      } else {
        profit2 = (amount * percent) / 100;
      }
      if (retdep == 1) {
        profit2 = (amount * percent) / 100;
      }
      profit2 = profit2.toFixed(2).substring(0, profit2.toFixed(3).length - 1);

      $("#s__calculate_profit_prof1").text('$' + (type == 1 ? profit1 : '0.00'));
      $("#s__calculate_profit_prof2").text('$' + profit2);
      if (percent == 0) {
        percent = '-';
      } else {
        percent = percent + '%';
      }
      $(".s__calculate_profit_per").text(percent);
      if (txt == '') {
        txt = '-';
      }
      $(".s__calculate_profit_txt").text(txt);
      return false;
    });
  </script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function () {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5f25ed201a544e2a7275c66d/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>

</html>