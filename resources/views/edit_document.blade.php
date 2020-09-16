@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

      <h3 class="bigtext"> Edit <span>Account </span></h3>

    </div>
  </div>
  <div class="clearfix"></div>



  <div class="c__section_holder_all">
    <div class="container">
      <div class="s__accout_content three_fourth">
        <div class="login_form" style="max-width: 100%;">
          <div class="sky-form clearfix">
            <div class="right_sidebar s__accountnav">
              <div class="categories_holder">
                <h4 class="pro_sidebar_title">Account navigation </h4>
                <ul class="list">
                  <li class="first"><a href="/user/user_dashboard" class="active">Account</a></li>
                  <li><a href="/user/deposit">Make Deposit</a></li>


      <li><a href=" /user/withdraw">Withdraw</a></li>

      <!-- <li><a href=" ./referral.html?a=referals" "="">Your Referrals</a></li> -->
      {{-- <li><a href="/user/ref_links">Referral Links</a></li> --}}
      <!-- <li><a href=" ./history.html?a=history" "="">History</a></li> -->
      <li><a href="/user/edit">Edit Account</a></li>

      <li class="last">
        <form action="/user/logout" method="post">
          @csrf
          <button type="submit" class="logoutbtn">Logout</button>
      </form>
      </li>
                </ul>
              </div>
            </div>
            <div class="content_left">




              <script language="javascript">
                function IsNumeric(sText) {
                  var ValidChars = "0123456789.";
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

                function checkform() {
                  if (document.editform.fullname.value == '') {
                    alert("Please type your full name!");
                    document.editform.fullname.focus();
                    return false;
                  }


                  if (document.editform.password.value != document.editform.password2.value) {
                    alert("Please check your password!");
                    document.editform.fullname.focus();
                    return false;
                  }




                  if (document.editform.email.value == '') {
                    alert("Please enter your e-mail address!");
                    document.editform.email.focus();
                    return false;
                  }



                  for (i in document.editform.elements) {
                    f = document.editform.elements[i];
                    if (f.name && f.name.match(/^pay_account/)) {
                      if (f.value == '') continue;
                      var notice = f.getAttribute('data-validate-notice');
                      var invalid = 0;
                      if (f.getAttribute('data-validate') == 'regexp') {
                        var re = new RegExp(f.getAttribute('data-validate-regexp'));
                        if (!f.value.match(re)) {
                          invalid = 1;
                        }
                      } else if (f.getAttribute('data-validate') == 'email') {
                        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                        if (!f.value.match(re)) {
                          invalid = 1;
                        }
                      }
                      if (invalid) {
                        alert('Invalid account format. Expected ' + notice);
                        f.focus();
                        return false;
                      }
                    }
                  }

                  return true;
                }
              </script>



              <form action="/user" method="post" onsubmit="return checkform()" name="editform">
                @method('PATCH')
                @csrf
                <input type="hidden" name="form_id" value="15965862278273">
                <input type="hidden" name="form_token" value="a9478f67933f684175049c4f59797294">
                <input type="hidden" name="a" value="edit_account">
                <input type="hidden" name="action" value="edit_account">
                <input type="hidden" name="say" value="">

                <table cellspacing="0" cellpadding="2" border="0">
                  <tbody>
                    <tr>
                      <td>Account Name:</td>
                      <td>{{$user->full_name}}</td>
                    </tr>
                    <tr>
                      <td>Registration date:</td>
                      <td>{{$user->created_at}}</td>
                    </tr>
                    <tr>
                      <td>Your Full Name:</td>
                      <td>
                        @error('full_name')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <input type="text" name="full_name" value="{{old('full_name') ? old('full_name') : $user->full_name}}" class="form-control">
                      </td>
                    </tr>

                    <tr>
                      <td>New Password:</td>
                      <td>
                        @error('password')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <input type="password" name="password" value="" class="form-control">
                      </td>
                    </tr>
                    <tr>
                      <td>Retype Password:</td>
                      <td><input type="password" name="password_confirmation" value="" class="form-control" size="30"></td>
                    </tr>
                    <tr>
                      <td>Your Bitcoin Wallet Address:</td>
                      <td>
                        @error('walletID')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <input type="text" class="form-control" size="30" value="{{old('walletID') ? old('walletID') : $user->walletID}}"
                          name="walletID"></td>
                    </tr>
                    <tr>
                      <td>Your E-mail address:</td>
                      <td>
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <input type="text" name="email" value="{{old('email') ? old('email') : $user->email}}" class="form-control"
                          size="30"></td>
                    </tr>

                    <tr>
                      <td>&nbsp;</td>
                      <td><input type="submit" value="Change Account data" class="button"></td>
                    </tr>
                  </tbody>
                </table>
              </form>
            </div>
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