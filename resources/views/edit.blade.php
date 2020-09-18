@include('layouts.auth.header', ['title'=> 'Profile Update'])

    <section class="main2 main-page-account">
      <div>
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <h2 class="title" style="    margin-left: 25px;">
                <span>Edit <b>account</b></span>
                <small>Dashboard</small>

              </h2>
              <div style="float:right;">
                <a href="https://capital-finance.uk/?a=deposit" class="btn btn-blue with-icon">Make deposit</a>
                <a href="https://capital-finance.uk/?a=withdraw" class="btn btn-green with-icon">withdraw</a>
              </div>
              <div class="clearfix"></div>
              <br>
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

                <form action="{{ route('update') }}" method="post" onsubmit="return checkform()" name="editform">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="form_id" value="16002353761673">
                    <input type="hidden" name="form_token" value="a813dea43bd209c5a576dc3a31d222f6">
                    <input type="hidden" name="a" value="edit_account">
                    <input type="hidden" name="action" value="edit_account">
                    <input type="hidden" name="say" value="">

                <div class="row">
                  <div class="col-md-12">

                  </div>
                  <div class="col-md-12">
                    <div class="box-over-table-form white">
                      <p></p>
                      <p></p>
                      <table cellspacing="0" cellpadding="2" border="0" class="table table-form">
                        <tbody>
                          <tr>
                            <td>
                              <label for="name"><span>Account <b>Name</b></span>
                                <p><i class="icon-user"></i>
                                <input type="text" placeholder="Account name" name="" class="inpts" size="30" value="{{ old('full_name') ?? $user->full_name }}">
                                </p>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label for="name"><span>Registration <b>Date</b></span>
                                <p><i class="icon-user"></i>
                                    <input type="text" placeholder=" 07:14:09 AM" class="inpts" size="30" readonly value="{{ date('M-d-Y H:i:sa', strtotime($user->created_at)) }}">
                                </p>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label for="name"><span>Your <b>Full Name</b></span>
                                <p><i class="icon-user"></i>
                                    <input type="text" name="full_name" class="inpts" value="{{ old('full_name') ?? $user->full_name }}">
                                    @error('full_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </label>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <label for="name"><span>Enter <b>Password</b></span>
                                <p><i class="icon-key"></i>
                                    <input type="password" name="password" value="" class="inpts" size="30" autocomplete="off">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>

                              </label></td>
                          </tr>
                          <tr>
                            <td>
                              <label for="name"><span>Your <b>Bitcoin Wallet Address</b></span>
                                <p><i class="icon-wallet"></i>
                                    <input type="text" class="inpts" size="30" name="walletID"
                                    value="{{ $user->walletID }}">
                                    @error('walletID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <label for="name"><span>Your <b>E-mail Address</b></span>
                                <p><i class="icon-mail"></i>
                                    <input type="text" name="email" class="inpts" value="{{ $user->email }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                              </label>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                      <div class="submit">
                        <input type="submit" value="Change Account data" class="sbmt">
                      </div>
                      <div class="clearfix"></div>
                      <br>

                    </div>

                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@include('layouts.auth.footer')