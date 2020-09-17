@include('layouts.header',['title'=>'Password Reset'])

    <div class="container">
          <section>
            <div class="section-text random--text">
              <h2 style="margin-bottom: 15px;">Forgot password</h2>




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




              <form method="post" class="form-user form-login" name=forgotform onsubmit="return checkform();"><input
                  type="hidden" name="form_id" value="16001268776233"><input type="hidden" name="form_token"
                  value="101e1aac4aa915726cf02a05127f9da2">
                <input type=hidden name=a value="forgot_password">
                <input type=hidden name=action value="forgot_password">
                <label class="form-user__label">
                  <span class="label-title">Enter an Email</span>
                  <!-- /.label-title -->
                  <input type="email" class="form-user__input" name="email" value="" autofocus>
                </label>

                <div class="form-user__btn">
                  <button type="submit" class="btn btn-orange"><span>Send</span></button>
                </div>
              </form>
            </div>
          </section>
        </div>
        <!-- /.container -->

@include('layouts.footer')