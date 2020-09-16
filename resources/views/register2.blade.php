@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">
      <h3 class="bigtext"> Registration at <span>bit-paycoin.com</span></h3>
    </div>
  </div>
  <div class="clearfix"></div>



  <div class="c__section_holder_all">
    <div class="container">



      <script language=javascript>
        function checkform() {
          if (document.regform.full_name.value == '') {
            alert("Please enter your full name!");
            document.regform.fullname.focus();
            return false;
          }


          if (document.regform.username.value == '') {
            alert("Please enter your username!");
            document.regform.username.focus();
            return false;
          }
          if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
            alert("For username you should use English letters and digits only!");
            document.regform.username.focus();
            return false;
          }
          if (document.regform.password.value == '') {
            alert("Please enter your password!");
            document.regform.password.focus();
            return false;
          }
          // if (document.regform.password.value != document.regform.password2.value) {
          //   alert("Please check your password!");
          //   document.regform.password2.focus();
          //   return false;
          // }


          if (document.regform.email.value == '') {
            alert("Please enter your e-mail address!");
            document.regform.email.focus();
            return false;
          }
          // if (document.regform.email.value != document.regform.email1.value) {
          //   alert("Please retupe your e-mail!");
          //   document.regform.email.focus();
          //   return false;
          // }

          // for (i in document.regform.elements) {
          //   f = document.regform.elements[i];
          //   if (f.name && f.name.match(/^pay_account/)) {
          //     if (f.value == '') continue;
          //     var notice = f.getAttribute('data-validate-notice');
          //     var invalid = 0;
          //     if (f.getAttribute('data-validate') == 'regexp') {
          //       var re = new RegExp(f.getAttribute('data-validate-regexp'));
          //       if (!f.value.match(re)) {
          //         invalid = 1;
          //       }
          //     } else if (f.getAttribute('data-validate') == 'email') {
          //       var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
          //       if (!f.value.match(re)) {
          //         invalid = 1;
          //       }
          //     }
          //     if (invalid) {
          //       alert('Invalid account format. Expected ' + notice);
          //       f.focus();
          //       return false;
          //     }
          //   }
          }

          if (document.regform.agree.checked == false) {
            alert("You have to agree with the Terms and Conditions!");
            return false;
          }

          return true;
        }

        function IsNumeric(sText) {
          var ValidChars = "0123456789";
          var IsNumber = true;
          var Char;
          if (sText == '') return false;
          for (i = 0; i < sText.length && IsNumber == true; i++) {
            Char = sText.charAt(i);
            if (ValidChars.indexOf(Char) == -1) {
              IsNumber = false;
            }
          }
          return IsNumber;
        }
      </script>


      <ul style="color:red">

        <br>
      </ul>
      <div class="reg_form">
        <form action="/register" method='post' onsubmit="return checkform()" name="regform" class="sky-form">
          <input type="hidden" name="form_id" value="15959853025049"><input type="hidden" name="form_token" value="f4b1f6dceea495dbe8944933b8162f3c">
          @csrf
          <input type=hidden name=a value="signup">
          <input type=hidden name=action value="signup">
          <table cellspacing=0 cellpadding=2 border=0>
            <header>Registration form</header>

            <fieldset>
              <section>
                @error('full_name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=text name=full_name value="{{old('full_name')}}" class="inpts @error('full_name') is-invalid @enderror" size=30 placeholder="Your Fullname">
                </label>
              </section>
              <section>
                @error('username')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=text name=username value="{{old('username')}}" class="inpts @error('username') is-invalid @enderror" size=30 placeholder="Your Username">
                </label>
              </section>
              <section>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=password name=password value="" class="inpts  @error('password') is-invalid @enderror" size=30 placeholder="Define Password">
                </label>
              </section>
              <section>
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=password name=password_confirmation value='' class="inpts  @error('password') is-invalid @enderror" size=30 placeholder="Retype Password">
                </label>
              </section>
              <section>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=text name=email value="{{old('email')}}" class="inpts  @error('email') is-invalid @enderror" size=30 placeholder="Your E-mail Address">
                </label>
              </section>
              {{-- <section>
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=email name=email_confirmation value="{{old('email_confirmation')}}" class=inpts size=30 placeholder="Retype Your E-mail">
                </label>
              </section> --}}

            </fieldset>
            <fieldset>
              <section>
                @error('walletID')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input">
                  <i class="icon-append icon-user"></i>
                  <input type=text class="inpts  @error('walletID') is-invalid @enderror" size=30 name="walletID" value="{{old('walletID')}}"
                    placeholder="Your Bitcoin Wallet Address">
                </label>
              </section>

              <div class="row">
                <section class="col col-6">
                  @error('secret_question')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <label class="input">
                    <input type=text name="secret_question" value="{{old('secret_question')}}" class="inpts  @error('secret_question') is-invalid @enderror" size=30 placeholder="Secret question">
                  </label>
                </section>
                <section class="col col-6">
                  @error('secret_answer')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                  <label class="input">
                    <input type=text name="secret_answer" value="{{old('secret_answer')}}" class="inpts  @error('secret_answer') is-invalid @enderror" size=30 placeholder="Secret answer">
                  </label>
                </section>
              </div>
            </fieldset>

            <tr>
              <td>Your Upline:</td>
              <td>N/A (n/a)</td>
            </tr>


            <fieldset>
              <section>
                <label class="checkbox">
                  <input type=checkbox name=agree value=1 id="agree"><i></i> I agree with <a
                    href="/terms&conditions">Terms and conditions</a>
                </label>
              </section>
            </fieldset>
            <footer>
              <input type=submit value="Register" class="button">
              <a href="/login" class="button button-secondary s__button-secondary_left">Login</a>
            </footer>
          </table>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- </div> -->
<div class="clearfix"></div>
<div class="footer1 s__footer1 s__footer1-1">
  <div class="social_links">
    <div class="container">

    </div>
  </div>
</div>

@include('layouts.footer')