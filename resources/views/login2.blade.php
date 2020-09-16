@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">
      <h3 class="bigtext"> Log in to your <span>account</span></h3>
    </div>
  </div>
  <div class="clearfix"></div>


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
  <div class="c__section_holder_all">
    <div class="container">

      <script language=javascript>
        function checkform() {
          if (document.mainform.username.value == '') {
            alert("Please type your username!");
            document.mainform.username.focus();
            return false;
          }
          if (document.mainform.password.value == '') {
            alert("Please type your password!");
            document.mainform.password.focus();
            return false;
          }
          return true;
        }
      </script>


      <div class="login_form">
        <form method="post" action="/login" name="mainform" onsubmit="return checkform()" class="sky-form">
            @csrf
            <input type="hidden" name="form_id" value="15959853023904">
            <input type="hidden" name="form_token"value="5c9d10adfc96e09753f530edb91e3c11">

            <input type='hidden' name='a' value='do_login'>
            <input type='hidden' name='follow' value=''>
            <input type='hidden' name='follow_id' value=''>
            <table cellspacing=0 cellpadding=2 border=0>
            <header>Login form</header>

            <fieldset>
              <section>
                <div class="row">
                  <label class="label col col-4">Email</label>
                  <div class="col col-8">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <label class="input">
                      <i class="icon-append icon-user"></i>
                      <input type='text' name='email' value="{{ old('email')}}" class='inpts' size=30 autofocus="autofocus">
                    </label>
                  </div>
                </div>
              </section>

              <section>
                <div class="row">
                  <label class="label col col-4">Password</label>
                  <div class="col col-8">
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                    <label class="input">
                      <i class="icon-append icon-lock"></i>
                      <input type='password' name='password' value='' class='inpts' size=30>
                    </label>
                    <div class="note">
                        <a href="/password/reset" class="modal-opener">Forgot password?</a>
                    </div>
                  </div>
                </div>
              </section>

            </fieldset>
            <footer>
              <div class="fright">
                <a href="/register" class="button button-secondary eight">Register</a>
                <input type=submit value="Login" class="button eight">
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
