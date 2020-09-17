@include('layouts.header',['title'=>'Login'])

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



           <form method="post" name="mainform" onsubmit="return checkform()" class="form-user form-login"><input
               type="hidden" name="form_id" value="16001228387156"><input type="hidden" name="form_token"
               value="e67a757cca51746687c601c4dbc1e0b7">
             <input type=hidden name=a value='do_login'>
             <input type=hidden name=follow value=''>
             <input type=hidden name=follow_id value=''>
             <div class="form-user__title">
               <h2>Login into account</h2>
             </div>
             <label class="form-user__label">
               <span class="label-title">Login</span>
               <!-- /.label-title -->
               <input type="text" class="form-user__input" name="username" value='' autofocus>
             </label>
             <label class="form-user__label">
               <span class="label-title">Password</span>
               <!-- /.label-title -->
               <input type="password" class="form-user__input" name="password" value="">
             </label>
             <div class="form-user__link">Forgot your password? <a href="{{ route('password.reset') }}">Click
                 here</a></div>
             <div class="form-user__btn">
               <button type="submit" class="btn btn-orange"><span>Sign in</span></button>
             </div>
             <!-- /.form-user__btn -->
           </form>
         </div>
         <!-- /.container -->

@include('layouts.footer')