@include('layouts.header')

<div class="header_medium two s__header_medium">
    <div class="container">

      <h3 class="bigtext"> HOW CAN WE ВЕ <span>HELP TODAY?</span></h3>
    </div>
  </div>
  <div class="clearfix"></div>



  <div class="c__section_holder_all">
    <div class="container">

    </div>
    <div class="one_full s__google_map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.400887471682!2d-0.08805808422941531!3d51.52420657963793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761caf6d8306e3%3A0xe76deac72576660b!2s47%20Tabernacle%20St%2C%20Shoreditch%2C%20London%20EC2A%204AA%2C%20UK!5e0!3m2!1sen!2sru!4v1579850793927!5m2!1sen!2sru"
        class="google-map two" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

      <small>
        <div class="s__google_map_a">
          <a
            href="https://www.google.com/maps?ll=51.524207,-0.085869&amp;z=16&amp;t=m&amp;hl=en&amp;gl=RU&amp;mapclient=embed&amp;q=47+Tabernacle+St+Shoreditch,+London+EC2A+4AA+UK">View
            Larger Map</a>
      </small>
    </div>
  </div>

  <div class="margin_top2"></div>
  <div class="margin_top2"></div>


  <script language=javascript>
    function checkform() {
      if (document.mainform.name.value == '') {
        alert("Please type your full name!");
        document.mainform.name.focus();
        return false;
      }
      if (document.mainform.email.value == '') {
        alert("Please enter your e-mail address!");
        document.mainform.email.focus();
        return false;
      }
      if (document.mainform.message.value == '') {
        alert("Please type your message!");
        document.mainform.message.focus();
        return false;
      }
      return true;
    }
  </script>
  <div class="container">
    <div class="two_third">
      @error('error')
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Oops!</strong> {{$message}}
        </div>
      @enderror
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Successful</strong> {{session('success')}}
        </div>
      @endif

      <form method=post name=mainform onsubmit="return checkform()" class="sky-form" action="/contact">
        @csrf
        <input type="hidden" name="form_id" value="15959853103153">
        <input type="hidden" name="form_token" value="0bcaddb85f94b0f50915176ea8525b78">
        <input type=hidden name=a value=support>
        <input type=hidden name=action value=send>


        <table cellspacing=0 cellpadding=2 border=0>
          <h2 class="uppercase"><strong>send us a message</strong></h2>
          <fieldset>
            <div class="row">
              <section class="col col-6">
                <label class="label">Your Name</label>
                @error('title')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="title" value="" size=30 class=inpts>
                </label>
              </section>
              <section class="col col-6">
                <label class="label">Your E-mail</label>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" value="" size=30 class=inpts>
                </label>
              </section>
            </div>
            <section>
              <label class="label">Message</label>
              @error('message')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea name='message' class=inpts cols=45 rows=4></textarea>
              </label>
            </section>
          </fieldset>
          <footer>
            <input type=submit value="Send" class="button">
          </footer>
        </table>
      </form>


    </div><!-- end section -->

    <div class="one_third last">

      <div class="address_info two">

        <h4 class="uppercase"><strong>Info</strong></h4>
        <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our
          website or one of the below instant messaging programs.</p>
        <br />
        <p>Please be patient while waiting for response. (24/7 Support!)</p>
        <br />
      </div><!-- end section -->

      <div class="address_info two">

        <h4 class="uppercase"><strong>Address Info</strong></h4>
        <ul>
          <li>
            <h5>bit-paycoin.com</h5>
            The Old Schoolhouse 75a Jacobs Wells Road, Clifton, Bristol, United Kingdom, BS8 1DJ <br />
            E-mail: <a href="mailto:admin@bit-paycoin.com">admin@bit-paycoin.com</a><br />
            Website: <a href="#">https://foc-access.com/</a>
          </li>
        </ul>
      </div><!-- end section -->
    </div>
  </div>
</div>
<div class="clearfix"></div>

<div class="section_holder9 two s__section_holder9_46rgfs">
  <div class="clints_section_topshape"></div>
  <div class="container">
    <h2 class="white">Dear user </h2>
    <p class="white">Before contacting technical support, you can study the "FAQ" section. Perhaps there is already
      an answer to your question.</p><br /><br />
    <a href="/faq" class="readmore_but7">Answers to frequently asked questions</a><br /><br />
  </div>
</div>
<!--end section 9-->

<div class="clearfix"></div>

<div>
  <div>
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