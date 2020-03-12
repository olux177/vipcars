<style>
  /* .footer-owl-carousel img{
    width: 120px !important;
    height: auto;
  } */
  .footer-owl-carousel button,
  .footer-owl-carousel .owl-dots{
    display:none;
  }
  /* .car-logo-image{
    height: 100px;
    position: absolute;
  } */
  
  .container {
    height: 200px;
    position: relative;
    margin: 0px;
  }

  .vertical-center {
    margin: 0 30px;
    position: absolute;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }
  
@media only screen and (min-width: 1700px) {
  .container {
    height: 350px;
  } 
}
  
@media only screen and (max-width: 700px) {
  .container {
    height: 200px;
  }
	/* .vertical-center {
    margin: 30px 20px;
    top: 50%;
  }   */
}
@media only screen and (max-width: 600px) {
  .container {
    height: 200px;
    margin: 0px 30px;
  }
	/* .vertical-center {
    margin: 70px 50px;
    top: 10%;
  } */
}
@media only screen and (max-width: 430px) {
  .container {
    height: 150px;
    margin: 0px 15px;
  }
	/* .vertical-center {
    margin: 40px 20px;
    top: 35%;
  } */
}
</style>
<div id="contacts" class="vc_row wpb_row vc_row-fluid om-container vc_row-full-width">
  
    <div class="footer-widgets">
        <div class="om-container">
          <div class="om-container__inner">
            <div class="om-columns">
              <div class="footer-widgets__column om-column om-full">
                <div id="text-2" class="footer-widget widget_text">
                  <div class="footer-widget-inner">			
                    <div class="textwidget">
                      <div style="text-align:center">
                        <h2>Contact us</h2>
                        <p>
                          <b>You have any questions or need additional information?</b><br />
                          Address: @include('partials.span_text',[
                            "text"=>$data['site_info']['address']
                          ])
                        </p>
                        <p>
                          <b style="font-size:200%">{{$data['site_info']['contact_info']['phone']}}</b>
                        </p>
                        <p>
                          <b style="font-size:200%">{{$data['site_info']['contact_info']['int']}}</b>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="wheelsberry_widget_cf7-2" class="footer-widget wheelsberry_widget_cf7">
                  <div class="footer-widget-inner">
                    <div style="max-width:640px;margin:0 auto">
                      <div role="form" class="wpcf7" id="wpcf7-f80-o2" lang="en-US" dir="ltr">
                      <div class="screen-reader-response"></div>
                      
                      <form action="/api/get_in_touch" method="post" class="form">
                        <div class="form-body">

                          <div>
                            <div class="info-field">
                              <div class="user-info">
                                <div class="reservation-form__field-inner">
                                  <div class="reservation-form__date-wrapper">
                                    <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" data-type="text" aria-required="true" aria-invalid="false" placeholder="Your name *" />
                                  </div>
                                </div>
                              </div>
                              
                              <div class="user-info">
                                <div class="reservation-form__field-inner">
                                  <div class="reservation-form__date-wrapper">
                                    <input type="email" name="email"  data-type="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email*" />
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="reservation-form__field-inner">
                              <div class="reservation-form__date-wrapper">
                                <textarea name="message" cols="40" rows="6" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" data-type="text" aria-required="true" aria-invalid="false" placeholder="Your message*" style="display:block"></textarea>
                              </div>
                            </div>
                          </div>
                                  
                          <div class="col-sm-6">
                            @if(env('GOOGLE_RECAPTCHA_KEY'))
                            <span for="ReCaptcha" style="display: contents;">Recaptcha:</span>
                                <div class="g-recaptcha"
                                      data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                </div>
                            @endif
                          </div>

                          <div class="reservation-form__line reservation-form__required-notice error-form" >
                            <div class="reservation-form__field-inner">
                              <div class="reservation-form__required-notice-box">Please fill in all required fields.</div>
                            </div>
                          </div>

                          <p class="submit">
                            <input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit" />
                          </p>
                        </div>
                        
                        <div class="form-success-message" id="form-success-message">
                            <p>Thank you for your contacting us.</p>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
  
      <div>
      <div class="vc_om-logos wpb_content_element vc_om-logos-layout-full vc_om-logos-grayscale" style="background-color: #fff; padding: 0 0 20px;margin: 0;">
      <div class="vc_om-logos-inner">
        <div class="vc_om-logos-container">
          <div class="footer-owl-carousel owl-carousel">
            @foreach ($data['car_logos'] as $logo)
              <div class=" item">

                <div class="container">
                  <div class="vertical-center">
                      <img height="100%" src="{{$logo['image']}}" 
                      alt="{{$logo['name']}} Logo" 
                      title="{{$logo['name']}} Logo"/>
                  </div>
                </div>

              </div>
            @endforeach
            
          </div>
        </div>
        </div>
      </div>
      </div>
      
      </div>