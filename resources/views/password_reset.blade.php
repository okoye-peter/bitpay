@include('layouts.header',['title'=>'Password Reset'])

    <div class="container">
          <section>
            
            <div class="section-text random--text">
              <h2 style="margin-bottom: 15px;">Forgot password</h2>

              @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{session('success')}}
                </div>
              @endif
              @error('error')
                <div class="alert alert-success alert-dismissible fade in">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  {{$message}}
                </div>
              @enderror

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




              <form method="post" class="form-user form-login" name=forgotform onsubmit="return checkform();" action="{{ route('send.link') }}">
                @csrf
                <input type="hidden" name="form_id" value="16001268776233">
                <input type="hidden" name="form_token" value="101e1aac4aa915726cf02a05127f9da2">
                <input type=hidden name=a value="forgot_password">
                <input type=hidden name=action value="forgot_password">
                <label class="form-user__label">
                  <span class="label-title">Enter an Email</span>
                  <!-- /.label-title -->
                  <input type="email" class="form-user__input" name="email" value="{{ old('email') ?? ''}}" autofocus>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                  @enderror
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