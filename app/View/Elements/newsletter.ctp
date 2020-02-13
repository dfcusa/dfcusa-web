<section class="newsletter">
  <div class="container">    
    <div class="newsletter-content">
      <div class="row align-items-center">
        <div class="col-md-4">
            <div class="newsletter-image"><img src="/dfcusa-web/app/webroot/img/ico_bigearth.svg" alt="/dfcusa-web/app/webroot/img" class="/dfcusa-web/app/webroot/img-fluid"></div>
        </div>
        <div class="col-md-8 text-dark text-center text-md-left py-4">
          <h2 class="h4 text-secondary">Change Starts with You</h2>
          <p class="my-4">Sign up to receive our <strong>newsletter</strong> and other free resources.</p>
          <div class="newsletter-form mx-auto mx-md-0">
            <div class="bg-success p-3 text-white success-box" style="display: none">Thanks for signing up!</div>
              <div class="input-group newsletter-signup">
                <input class="form-control"
                       type="text"
                       name="EMAIL"
                       id="email" 
                       placeholder="Enter your e-mail address">
                <div class="input-group-append">
                  <div class="btn btn-secondary send-newsletter" onclick="javascript:submitNewsletter();">Sign-up</div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
  function submitNewsletter() {
    gaEvent('newsletter');
    $.ajaxSetup({
      contentType: 'application/json'
    });

    var data = {
      'fields': [ {
        'name': 'email',
        'value': $('#email').val()
      } ]
    }
    
    $.post('https://api.hsforms.com/submissions/v3/integration/submit/6395720/4f577ebe-3e12-4f45-9440-c12935043e1b', JSON.stringify(data), function(data) {
      $('.success-box').show();
      $('.newsletter-signup').hide();
    });
  }
</script>


