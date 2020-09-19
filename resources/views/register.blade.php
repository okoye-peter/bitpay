@include('layouts.header',['title'=>'Register'])

    <div class="container">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{session('success')}}
        </div>
      @endif
      @error('error')
        <div class="alert alert-danger alert-dismissible fade in">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          {{$message}}
        </div>
      @enderror

          <script language=javascript>
            function checkform() {
              if (document.regform.fullname.value == '') {
                alert("Please enter your full name!");
                document.regform.fullname.focus();
                return false;
              }


              if (document.regform.username.value == '') {
                alert("Please enter your username!");
                document.regform.username.focus();
                return false;
              }
              if (document.regform.password.value == '') {
                alert("Please enter your password!");
                document.regform.password.focus();
                return false;
              }
              if (document.regform.password.value != document.regform.password2.value) {
                alert("Please check your password!");
                document.regform.password2.focus();
                return false;
              }


              if (document.regform.email.value == '') {
                alert("Please enter your e-mail address!");
                document.regform.email.focus();
                return false;
              }
              if (document.regform.email.value != document.regform.email1.value) {
                alert("Please retupe your e-mail!");
                document.regform.email.focus();
                return false;
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




          <form method=post onsubmit="return checkform()" name="regform" class="form-user" action="{{ route('registration') }}">
            @csrf
            <input type="hidden" name="form_id" value="16001228388625"><input type="hidden" name="form_token"
              value="cc2f6b5aca877e0f803fa2dda8181356">
            <input type=hidden name=a value="signup">
            <input type=hidden name=action value="signup">
            <div class="form-user__title">
              <h2>Registration</h2>
            </div>
            <label class="form-user__label">
              <span class="label-title">Your name</span>
              <!-- /.label-title -->
              <input type="text" class="form-user__input" name="full_name" value="{{ old('full_name') ?? '' }}">
                @error('full_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label class="form-user__label">
              <span class="label-title">Your username</span>
              <!-- /.label-title -->
              <input type="text" class="form-user__input" name="username" value="{{ old('username') }}">
              @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </label>

            <label class="form-user__label">
              <span class="label-title">Your email</span>
              <!-- /.label-title -->
              <input type="email" class="form-user__input" name="email" value="{{ old('email') ?? '' }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label class="form-user__label">
              <span class="label-title">Password</span>
              <!-- /.label-title -->
              <input type="password" class="form-user__input" name="password" value="">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label class="form-user__label">
              <span class="label-title">Confirm Password</span>
              <!-- /.label-title -->
              <input type="password" class="form-user__input" name="password_confirmation" value="">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            {{-- <label class="form-user__label">
              <span class="label-title">Confirm an email</span>
              <!-- /.label-title -->
              <input type="email" class="form-user__input" name="email1" value="">
            </label> --}}
            <h2 class="walletshead">Your wallets</h2>

            <label class="form-user__label">
              <span class="label-title">Bitcoin</span>
              <!-- /.label-title -->
              <input type="text" class="form-user__input" name="walletID" value="{{ old('walletID') ?? ''}}">
            </label>



            <div class="form-user__checkbox">
              <input type="checkbox" name="agree" value="1" id="p1">
              <label for="p1">I agree with <a href="{{ route('rules') }}">terms and conditions</a></label>
            </div>
            <div class="form-user__btn">
              <button type="submit" class="btn btn-orange"><span>Register</span></button>
            </div>
            <!-- /.form-user__btn -->
          </form>
        </div>
        <!-- /.container -->

@include('layouts.footer')