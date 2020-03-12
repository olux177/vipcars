
<div class="reservation reservation--full" id="reservation">
    <div class="reservation-form">
      <div class="om-container">
        <div class="om-container__inner">
          <div class="reservation-form__inner">
            <div class="reservation-form__titles">
              <h2 class="reservation-form__title">Save 70% On Luxury Car Rental Rates!</h2>
            </div>
            <br/>
            <br/>
            
 
            <form id="reservation-form-step-1" class="form" action="api/get_quote">
              <div class="form-body">
              <div id="UserInfo" class="user_info">                
                <div class="reservation-form__line reservation-form__car">                  
                  <div class="reservation-form__field-inner">
                    <select class="reservation-form__car-select" id="reservation-form__car-select" name="car-model">
                      <option></option>
                      @foreach ($data['carsslider'] as $key=>$item)
                        <option value="{{$key}}">{{$item['make']}} {{$item['model']}}</option>
                      @endforeach                                                
                    </select>
                    <div class="reservation-form__car-select-label" id="reservation-form__car-select-label" style="margin-left: -15px;">Choose a car</div>
                  </div>
                </div>
                <div class=" reservation-form__date">
                  <div class="reservation-form__field-inner">
                    <label for="reservation-form__pick-up-date-input" class="reservation-form__label reservation-form__pick-up-date-label ">Name</label>
                    <div class="reservation-form__date-wrapper">
                      <input type="text" data-type="text" name="name" placeholder="Full Name" class="reservation-form__pick-up-date-input hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy">
                    </div>
                  </div>
                </div>
                <div class=" reservation-form__date">
                  <div class="reservation-form__field-inner">
                    <label for="reservation-form__pick-up-date-input" class="reservation-form__label reservation-form__pick-up-date-label ">Email</label>
                    <div class="reservation-form__date-wrapper">
                      <input type="text" data-type="email" name="email" placeholder="Email Address" class="reservation-form__pick-up-date-input hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy">
                    </div>
                  </div>
                </div>
                <div class=" reservation-form__date">
                  <div class="reservation-form__field-inner">
                    <label for="reservation-form__pick-up-date-input" class="reservation-form__label reservation-form__pick-up-date-label ">Phone</label>
                    <div class="reservation-form__date-wrapper">
                      <input type="text" data-type="number" name="phone" placeholder="Phone Number" class="reservation-form__pick-up-date-input phone-number hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy">
                    </div>
                  </div>
                </div>
              </div>
              <div class="reservation-form__more">
                <div style="display:inline-block">
                <div class="reservation-form__line reservation-form__set reservation-form__pick-up quote">
                  <div class="reservation-form__pick-up-location reservation-form__location">
                    <div class="reservation-form__field-inner">
                      <label for="reservation-form__pick-up-location-select" class="reservation-form__label reservation-form__pick-up-location-label reservation-form__location-label">Pick-up</label>
                      <div class="reservation-form__date-wrapper">
                        <input type="text" data-type="text" name="pick-up-location" placeholder="Choose a location" class="reservation-form__pick-up-date-input hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy">
                      </div>
                    {{-- <input type="text" name="pick-up-location" placeholder="Pick Up Location" class="reservation-form__pick-up-date-input hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy"> --}}
                    </div>
                  </div>
                  <div class="reservation-form__pick-up-date reservation-form__date">
                    <div class="reservation-form__field-inner">
                      <label for="reservation-form__pick-up-date-input" class="reservation-form__label reservation-form__pick-up-date-label reservation-form__date-label">Pick-up</label>
                      <div class="reservation-form__date-wrapper">
                        <input type="text" data-type="date" name="pick-up-date" placeholder="Choose a date" class="reservation-form__pick-up-date-input pick-date" id="pick-up-date-input"  autocomplete="off" data-date-format="MM dd, yy">
                      </div>
                    </div>
                  </div>
                  <div class="reservation-form__pick-up-time reservation-form__time">
                    <div class="reservation-form__field-inner">
                      <select name="pick-up-time" class="reservation-form__pick-up-time-select" id="reservation-form__pick-up-time-select">
                        <option value="12:00 am">12:00 am</option><option value="12:15 am">12:15 am</option><option value="12:30 am">12:30 am</option><option value="12:45 am">12:45 am</option><option value="1:00 am">1:00 am</option><option value="1:15 am">1:15 am</option><option value="1:30 am">1:30 am</option><option value="1:45 am">1:45 am</option><option value="2:00 am">2:00 am</option><option value="2:15 am">2:15 am</option><option value="2:30 am">2:30 am</option><option value="2:45 am">2:45 am</option><option value="3:00 am">3:00 am</option><option value="3:15 am">3:15 am</option><option value="3:30 am">3:30 am</option><option value="3:45 am">3:45 am</option><option value="4:00 am">4:00 am</option><option value="4:15 am">4:15 am</option><option value="4:30 am">4:30 am</option><option value="4:45 am">4:45 am</option><option value="5:00 am">5:00 am</option><option value="5:15 am">5:15 am</option><option value="5:30 am">5:30 am</option><option value="5:45 am">5:45 am</option><option value="6:00 am">6:00 am</option><option value="6:15 am">6:15 am</option><option value="6:30 am">6:30 am</option><option value="6:45 am">6:45 am</option><option value="7:00 am">7:00 am</option><option value="7:15 am">7:15 am</option><option value="7:30 am">7:30 am</option><option value="7:45 am">7:45 am</option><option value="8:00 am">8:00 am</option><option value="8:15 am">8:15 am</option><option value="8:30 am">8:30 am</option><option value="8:45 am">8:45 am</option><option value="9:00 am">9:00 am</option><option value="9:15 am">9:15 am</option><option value="9:30 am">9:30 am</option><option value="9:45 am">9:45 am</option><option value="10:00 am">10:00 am</option><option value="10:15 am">10:15 am</option><option value="10:30 am">10:30 am</option><option value="10:45 am">10:45 am</option><option value="11:00 am">11:00 am</option><option value="11:15 am">11:15 am</option><option value="11:30 am">11:30 am</option><option value="11:45 am">11:45 am</option><option value="12:00 pm" selected="selected">12:00 pm</option><option value="12:15 pm">12:15 pm</option><option value="12:30 pm">12:30 pm</option><option value="12:45 pm">12:45 pm</option><option value="1:00 pm">1:00 pm</option><option value="1:15 pm">1:15 pm</option><option value="1:30 pm">1:30 pm</option><option value="1:45 pm">1:45 pm</option><option value="2:00 pm">2:00 pm</option><option value="2:15 pm">2:15 pm</option><option value="2:30 pm">2:30 pm</option><option value="2:45 pm">2:45 pm</option><option value="3:00 pm">3:00 pm</option><option value="3:15 pm">3:15 pm</option><option value="3:30 pm">3:30 pm</option><option value="3:45 pm">3:45 pm</option><option value="4:00 pm">4:00 pm</option><option value="4:15 pm">4:15 pm</option><option value="4:30 pm">4:30 pm</option><option value="4:45 pm">4:45 pm</option><option value="5:00 pm">5:00 pm</option><option value="5:15 pm">5:15 pm</option><option value="5:30 pm">5:30 pm</option><option value="5:45 pm">5:45 pm</option><option value="6:00 pm">6:00 pm</option><option value="6:15 pm">6:15 pm</option><option value="6:30 pm">6:30 pm</option><option value="6:45 pm">6:45 pm</option><option value="7:00 pm">7:00 pm</option><option value="7:15 pm">7:15 pm</option><option value="7:30 pm">7:30 pm</option><option value="7:45 pm">7:45 pm</option><option value="8:00 pm">8:00 pm</option><option value="8:15 pm">8:15 pm</option><option value="8:30 pm">8:30 pm</option><option value="8:45 pm">8:45 pm</option><option value="9:00 pm">9:00 pm</option><option value="9:15 pm">9:15 pm</option><option value="9:30 pm">9:30 pm</option><option value="9:45 pm">9:45 pm</option><option value="10:00 pm">10:00 pm</option><option value="10:15 pm">10:15 pm</option><option value="10:30 pm">10:30 pm</option><option value="10:45 pm">10:45 pm</option><option value="11:00 pm">11:00 pm</option><option value="11:15 pm">11:15 pm</option><option value="11:30 pm">11:30 pm</option><option value="11:45 pm">11:45 pm</option>													</select>
                    </div>
                  </div>
                </div>
                <div class="reservation-form__line reservation-form__set reservation-form__drop-off quote">
                  <div class="reservation-form__drop-off-location reservation-form__location">
                    <div class="reservation-form__field-inner">
                      <label for="reservation-form__drop-off-location-select" class="reservation-form__label reservation-form__drop-off-location-label reservation-form__location-label">Drop-off</label>
                      
                      <div class="reservation-form__date-wrapper">
                          <input type="text"  data-type="text" name="drop-off-location" placeholder="Choose a location" class="reservation-form__pick-up-date-input hasDatepicker" id="reservation-form__pick-up-date-input" data-date-format="MM dd, yy">
                        </div>
                    </div>
                  </div>
                  <div class="reservation-form__drop-off-date reservation-form__date">
                    <div class="reservation-form__field-inner">
                      <label for="reservation-form__drop-off-date-input" class="reservation-form__label reservation-form__drop-off-date-label reservation-form__date-label">Drop-off</label>
                      <div class="reservation-form__date-wrapper">
                        <input type="text" data-type="date" name="drop-off-date" placeholder="Choose a date" class="reservation-form__drop-off-date-input pick-date" id="drop-off-date-input" autocomplete="off" data-date-format="MM dd, yy">
                      </div>
                    </div>
                  </div>
                  <div class="reservation-form__drop-off-time reservation-form__time">
                    <div class="reservation-form__field-inner">
                      <select name="drop-off-time" class="reservation-form__drop-off-time-select" id="reservation-form__drop-off-time-select">
                        <option value="12:00 am">12:00 am</option><option value="12:15 am">12:15 am</option><option value="12:30 am">12:30 am</option><option value="12:45 am">12:45 am</option><option value="1:00 am">1:00 am</option><option value="1:15 am">1:15 am</option><option value="1:30 am">1:30 am</option><option value="1:45 am">1:45 am</option><option value="2:00 am">2:00 am</option><option value="2:15 am">2:15 am</option><option value="2:30 am">2:30 am</option><option value="2:45 am">2:45 am</option><option value="3:00 am">3:00 am</option><option value="3:15 am">3:15 am</option><option value="3:30 am">3:30 am</option><option value="3:45 am">3:45 am</option><option value="4:00 am">4:00 am</option><option value="4:15 am">4:15 am</option><option value="4:30 am">4:30 am</option><option value="4:45 am">4:45 am</option><option value="5:00 am">5:00 am</option><option value="5:15 am">5:15 am</option><option value="5:30 am">5:30 am</option><option value="5:45 am">5:45 am</option><option value="6:00 am">6:00 am</option><option value="6:15 am">6:15 am</option><option value="6:30 am">6:30 am</option><option value="6:45 am">6:45 am</option><option value="7:00 am">7:00 am</option><option value="7:15 am">7:15 am</option><option value="7:30 am">7:30 am</option><option value="7:45 am">7:45 am</option><option value="8:00 am">8:00 am</option><option value="8:15 am">8:15 am</option><option value="8:30 am">8:30 am</option><option value="8:45 am">8:45 am</option><option value="9:00 am">9:00 am</option><option value="9:15 am">9:15 am</option><option value="9:30 am">9:30 am</option><option value="9:45 am">9:45 am</option><option value="10:00 am">10:00 am</option><option value="10:15 am">10:15 am</option><option value="10:30 am">10:30 am</option><option value="10:45 am">10:45 am</option><option value="11:00 am">11:00 am</option><option value="11:15 am">11:15 am</option><option value="11:30 am">11:30 am</option><option value="11:45 am">11:45 am</option><option value="12:00 pm" selected="selected">12:00 pm</option><option value="12:15 pm">12:15 pm</option><option value="12:30 pm">12:30 pm</option><option value="12:45 pm">12:45 pm</option><option value="1:00 pm">1:00 pm</option><option value="1:15 pm">1:15 pm</option><option value="1:30 pm">1:30 pm</option><option value="1:45 pm">1:45 pm</option><option value="2:00 pm">2:00 pm</option><option value="2:15 pm">2:15 pm</option><option value="2:30 pm">2:30 pm</option><option value="2:45 pm">2:45 pm</option><option value="3:00 pm">3:00 pm</option><option value="3:15 pm">3:15 pm</option><option value="3:30 pm">3:30 pm</option><option value="3:45 pm">3:45 pm</option><option value="4:00 pm">4:00 pm</option><option value="4:15 pm">4:15 pm</option><option value="4:30 pm">4:30 pm</option><option value="4:45 pm">4:45 pm</option><option value="5:00 pm">5:00 pm</option><option value="5:15 pm">5:15 pm</option><option value="5:30 pm">5:30 pm</option><option value="5:45 pm">5:45 pm</option><option value="6:00 pm">6:00 pm</option><option value="6:15 pm">6:15 pm</option><option value="6:30 pm">6:30 pm</option><option value="6:45 pm">6:45 pm</option><option value="7:00 pm">7:00 pm</option><option value="7:15 pm">7:15 pm</option><option value="7:30 pm">7:30 pm</option><option value="7:45 pm">7:45 pm</option><option value="8:00 pm">8:00 pm</option><option value="8:15 pm">8:15 pm</option><option value="8:30 pm">8:30 pm</option><option value="8:45 pm">8:45 pm</option><option value="9:00 pm">9:00 pm</option><option value="9:15 pm">9:15 pm</option><option value="9:30 pm">9:30 pm</option><option value="9:45 pm">9:45 pm</option><option value="10:00 pm">10:00 pm</option><option value="10:15 pm">10:15 pm</option><option value="10:30 pm">10:30 pm</option><option value="10:45 pm">10:45 pm</option><option value="11:00 pm">11:00 pm</option><option value="11:15 pm">11:15 pm</option><option value="11:30 pm">11:30 pm</option><option value="11:45 pm">11:45 pm</option>													</select>
                    </div>
                  </div>
                </div>
                </div>
                <div class="reservation-form__line reservation-form__required-notice error-form" >
                  <div class="reservation-form__field-inner">
                    <div class="reservation-form__required-notice-box">Please fill in all required fields.</div>
                  </div>
                </div>
                <div class="reservation-form__line reservation-form__submit submit-quote">
                  <div class="reservation-form__field-inner">
                    <input type="submit" style="background-color: #333333" class="reservation-form__submit-button" id="reservation-form__submit-button" value="Get Instant Quote">
                    
                    <img src="data:image/svg+xml;utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 48 48%22 width=%2228%22 height=%2228%22%3E
%3Ccircle class=%22path%22 cx=%2224%22 cy=%2224%22 r=%2220%22 fill=%22none%22 stroke=%22%23fff%22 stroke-width=%224%22%3E
%3Canimate attributeName=%22stroke-dasharray%22 attributeType=%22XML%22 from=%221,200%22 to=%2289,200%22 values=%221,200; 89,200; 89,200%22 keyTimes=%220; 0.5; 1%22 dur=%221.5s%22 repeatCount=%22indefinite%22 /%3E
%3Canimate attributeName=%22stroke-dashoffset%22 attributeType=%22XML%22 from=%220%22 to=%22-124%22 values=%220; -35; -124%22 keyTimes=%220; 0.5; 1%22 dur=%221.5s%22 repeatCount=%22indefinite%22 /%3E
%3CanimateTransform attributeName=%22transform%22 attributeType=%22XML%22 type=%22rotate%22 from=%220 24 24%22 to=%22360 24 24%22 dur=%223s%22 repeatCount=%22indefinite%22/%3E
%3C/circle%3E
%3C/svg%3E" class="ajax-loading" alt="">
                  </div>
                </div>
              </div>
              </div>
              <div class="form-success-message" id="form-success-message">
                <p>Thank you for your booking. Our manager will reach you out within 24 hours to figure out all details and confirm your reservation.</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="your-booking" id="your-booking">
      <div class="om-container">
        <div class="om-container__inner">
          <div class="your-booking__titles">
            <h2 class="your-booking__title">Your Booking</h2>
            <div class="h-subtitle your-booking__subtitle">Please, check your booking</div>
          </div>
        </div>
        <div class="your-booking__details">
                      </div>
        <div class="your-booking__personal">
          <div class="content-pane">
            <div class="om-container__inner">
              <h4 class="your-booking__personal-title">Personal Information</h4>
              <div role="form" class="wpcf7" id="wpcf7-f4-o1" dir="ltr" lang="en-US">
<div class="screen-reader-response"></div>
<form action="/wheelsberry/#wpcf7-f4-o1" method="post" class="wpcf7-form demo" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4">
<input type="hidden" name="_wpcf7_version" value="4.5.1">
<input type="hidden" name="_wpcf7_locale" value="en_US">
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-o1">
<input type="hidden" name="_wpnonce" value="c630ad5d43">
</div>
<div class="wpcf7-form-elements"><p class="one-third">
<label>First Name <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your first name"></span>
</p>
<p class="one-third">
<label>Last Name <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your last name"></span>
</p>
<p class="one-third">
<label>Age <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap age"><input type="number" name="age" value="21" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number" min="1" max="150" aria-invalid="false"></span>
</p>
<p class="one-half">
<label>Phone Number <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your phone number"></span>
</p>
<p class="one-half">
<label>Email <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Enter your email address"></span>
</p>
<p>
<label>Address <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap address"><input type="text" name="address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your address"></span>
</p>
<p class="one-third">
<label>City <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your city"></span>
</p>
<p class="one-third">
<label>Country <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap country"><input type="text" name="country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your country"></span>
</p>
<p class="one-third">
<label>Zip Code <span class="wpcf7-form-required-label">*</span></label><br>
<span class="wpcf7-form-control-wrap zip-code"><input type="text" name="zip-code" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Enter your zip code"></span>
</p>
<p class="submit"><input type="submit" value="Book Now" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="data:image/svg+xml;utf8,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 48 48%22 width=%2228%22 height=%2228%22%3E
%3Ccircle class=%22path%22 cx=%2224%22 cy=%2224%22 r=%2220%22 fill=%22none%22 stroke=%22%23a8a8a8%22 stroke-width=%224%22%3E
%3Canimate attributeName=%22stroke-dasharray%22 attributeType=%22XML%22 from=%221,200%22 to=%2289,200%22 values=%221,200; 89,200; 89,200%22 keyTimes=%220; 0.5; 1%22 dur=%221.5s%22 repeatCount=%22indefinite%22 /%3E
%3Canimate attributeName=%22stroke-dashoffset%22 attributeType=%22XML%22 from=%220%22 to=%22-124%22 values=%220; -35; -124%22 keyTimes=%220; 0.5; 1%22 dur=%221.5s%22 repeatCount=%22indefinite%22 /%3E
%3CanimateTransform attributeName=%22transform%22 attributeType=%22XML%22 type=%22rotate%22 from=%220 24 24%22 to=%22360 24 24%22 dur=%223s%22 repeatCount=%22indefinite%22/%3E
%3C/circle%3E
%3C/svg%3E" alt="Sending ..." style="visibility: hidden;"></p>
</div><div class="wpcf7-response-output wpcf7-display-none"></div><input type="hidden" name="extra-options"><input type="hidden" name="car-model"><input type="hidden" name="pick-up-location"><input type="hidden" name="pick-up-date"><input type="hidden" name="pick-up-time"><input type="hidden" name="drop-off-location"><input type="hidden" name="drop-off-date"><input type="hidden" name="drop-off-time"></form></div>								</div>
          </div>
        </div>
      </div>
    </div>
  </div>