@include('layouts.header', ['title'=>'Support'])

    <div class="container">
        <section class="section-page section-separate">


          <div class="section-title">
            <h2>Support</h2>
          </div>
          <div class="section-text">
          </div>
          <div class="contact-section-top clearfix">
            <ul class="support-list">
              <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
                <a href="tel:" class="support-item__link phone--icon">
                  <span class="support-item__title">Phone</span>
                  <span class="support-item__value">Coming soon</span>
                </a>
              </li>
              <li class="support-item wow bounceInLeft" data-wow-delay="0.2s">
                <a href="mailto:admin@Profit-miners.com" class="support-item__link email--icon">
                  <span class="support-item__title">Email</span>
                  <span class="support-item__value">admin@Profit-miners.com</span>
                </a>
              </li>
            </ul>
            <div class="map wow fadeInRight" data-wow-delay="0.6s">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.419521879213!2d-0.08650810145267253!3d51.52386476089281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761caf108258d5%3A0xe98bf33422b1e012!2zMzcgVGFiZXJuYWNsZSBTdCwgTG9uZG9uIEVDMkEsINCS0LXQu9C40LrQvtCx0YDQuNGC0LDQvdC40Y8!5e0!3m2!1sru!2s!4v1512301375736"
                width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!-- /.map -->
          </div>
          <!-- /.contact-section-top -->
          <div class="contact-section-bottom">
            <div class="section-title">
              <h2>Send message</h2>
            </div>
            <div class="section-text">
            </div>


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


            <form method=post name=mainform onsubmit="return checkform()" class="form-contacts"><input type="hidden"
                name="form_id" value="16001228504624"><input type="hidden" name="form_token"
                value="24a94de0e41df13dfc1aa3d0915bcd4e">
              <input type=hidden name=a value=support>
              <input type=hidden name=action value=send>

              <fieldset class="form-contacts__fieldset clearfix">
                <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.2s">
                  <input type="text" class="form-contacts__input" name="name" placeholder="Your name" value=""
                    autofocus />
                </label>
                <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.4s">
                  <input type="email" class="form-contacts__input" name="email" placeholder="Your email" value="">
                </label>
              </fieldset>
              <label class="form-contacts__label wow fadeInUp" data-wow-delay="0.6s">
                <textarea name="message" class="form-contacts__textarea" placeholder="Message"></textarea>
              </label>
              <div class="form-contacts__btn wow fadeInUp" data-wow-delay="1s">
                <button type="submit" class="btn btn-orange"><span>Send</span></button>
              </div>
              <!-- /.form-contacts__btn -->
            </form>
          </div>
          <!-- /.contact-section-bottom -->
        </section>
      </div>
      <!-- /.container -->

@include('layouts.footer')