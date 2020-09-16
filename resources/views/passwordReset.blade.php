@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">
      <h3 class="bigtext"> Password <span>recovery</span></h3>
    </div>
  </div>
  <div class="clearfix"></div>

  <div class="c__section_holder_all">
    <div class="container">

      <script language=javascript>
        function checkform() {
          if (document.forgotform.email.value == '') {
            alert("Please type your username or email!");
            document.forgotform.email.focus();
            return false;
          }
          return true;
        }
      </script>
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{session('success')}}
        </div>
      @endif
      @error('error')
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{$message}}
      </div>
      @enderror
    
      <div class="login_form">
        <form method=post action="/password/reset" name=forgotform onsubmit="return checkform();" class="sky-form">
            @csrf
            <input type="hidden" name="form_id" value="15959856747556">
            <input type="hidden" name="form_token" value="f909c46bbb85f3d4a09617cc9f2e2ed5">
          <input type=hidden name=a value="forgot_password">
          <input type=hidden name=action value="forgot_password">
          <table cellspacing=0 cellpadding=2 border=0>
            <header>Password Recovery Form</header>
            <fieldset>
              <section>
                <div class="row">
                  <label class="label col col-4">Type your e-mail</label>
                  <div class="col col-8">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="input">
                      <i class="icon-append icon-envelope-alt"></i>
                      <input type=email name='email' value="" class=inpts size=30>
                    </label>
                  </div>
                </div>
              </section>
            </fieldset>
            <footer>
              <div class="fright">
                <a href="/login" class="button button-secondary eight">Login</a>
                <input type=submit value="Forgot" class="button eight">
              </div>

            </footer>
          </table>
        </form>
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