<footer>
  <div class="sub-footer sub-footer--full">
    <div class="om-container">
      <div class="om-container__inner">
        <div class="sub-footer__inner">
          <div class="sub-footer-text">
            <p>&copy; 
              {{$data['site_info']['name']}}. ALL RIGHTS RESERVED<br />
              {{$data['site_info']['author']}}
            </p>
          </div>
          <div class="footer-social-icons">
            <a href="#blank" class="om-social-icon social-icon-facebook" title="Facebook" target="_blank"><i class="omfi omfi-facebook"></i></a>
            <a href="#blank" class="om-social-icon social-icon-instagram" title="Instagram" target="_blank"><i class="omfi omfi-instagram"></i></a>
            <a href="#blank" class="om-social-icon social-icon-skype" title="Skype" target="_blank"><i class="omfi omfi-skype"></i></a>
            <a href="#blank" class="om-social-icon social-icon-twitter" title="Twitter" target="_blank"><i class="omfi omfi-twitter"></i></a>
          </div>
        </div>
          @include('partials.footer_logo')
      </div>
    </div>
  </div>

</footer>