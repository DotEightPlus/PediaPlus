    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="site-section-heading text-center font-secondary">PediaPlus Business</h2>
            <p><a href="./ads" class="d-inline-flex align-items-center block-service-1-more"><span>Click here to visit our Ads Center</span></a></p>
          </div>
        </div>
        <div class="row">

          <div class="col-12">

            <div class="owl-carousel-2 owl-carousel">

              <div class="d-block block-testimony mx-auto text-center">
                <div class="person w-25 mx-auto mb-4">
                  <img src="images/book.svg" alt="Image" class="img-fluid rounded-circle w-50 mx-auto">
                </div>
                <div>
                  <h2 class="h5 mb-4">We Promote Business</h2>
                  <blockquote>Let`s promote your business on PediaPlus. <br/>
                     <p><a href="ads/./" class="d-inline-flex align-items-center block-service-1-more"><span>Click here to visit our Ads Center</span></a></p>
                  </blockquote>
                </div>
              </div>

              <div class="d-block block-testimony mx-auto text-center">
                <video width="100%" height="240" controls>
              <source src="dashboard/ads/upload/end.webm" type="video/mp4">
            <p>Your browser does not support the video tag</p>
            </video>
           <p><a href="ads/./" class="d-inline-flex align-items-center block-service-1-more"><span>Click here to visit our Ads Center</span></a></p>
              </div>


            </div>
          </div>
          

        </div>
      </div>
    </div>

    <div class="mt-5 block-cta-1 primary-overlay" style="background-image: url('images/bg_4.jpg')">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="mb-3 mt-0 text-white">Free 5 PDF Credits for First Commers</h2>
            <p class="mb-0 text-white lead"></p>
          </div>
          <div class="col-lg-4">
            <p class="mb-0"><a href="./signup" class="btn btn-outline-white text-white btn-md btn-pill px-5 font-weight-bold btn-block">Create an Account Now</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
            <h2 class="footer-heading mb-4">About us</h2>
            <p>PediaPlus is a service from DotEightPlus. Committed and developed towards providing lectures PDFs and making every student lecture hustle and stress free.</p>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Other Services</h2>
                <ul class="list-unstyled">
                  <li><a href="https://AttendPlus.com.ng" target="_blank">AttendPlus</a></li>
                  <li><a href="https://switch.com.ng" target="_blank">Switch NG</a></li>
                  <li><a href="https://varsitykonnect.com.ng" target="_blank">Varsity Konnect</a></li>
                  <li><a href="https://voteme.com.ng" target="_blank">VoteMe</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="dashboard/./pdf">Download PDFs</a></li>
                  <li><a href="dashboard/./credit">Buy PDF Credits</a></li>
                  <li><a href="dashboard/./donate">Donate PDF</a></li>
                  <li><a href="./ads">Ads Center</a></li>
                </ul>
              </div>
              <div class="col-md-6 mb-5 mb-lg-0 col-lg-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="https://m.me/PediaPlus" target="_blank" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="https://wa.me/2348103171902?text=Hello%2c%20I`m%20_____%0AI%20need%20help%20with%20PediaPlus" target="_blank" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
                <a href="https://instagram.com/pediaplus" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" target="_blank" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">Subscribe to our Newsletter</h2>
            <p>We promise we won`t spam</p>
            <form action="#" method="post" class="subscription">
              <div class="input-group mb-3  d-flex align-items-stretch">
                <input type="text" class="form-control bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2" required>
                <button class="btn btn-primary text-white" type="submit" id="button-addon2">Send</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-12 text-md-center text-left">
            <p>
           &copy; PediaPlus <script>document.write(new Date().getFullYear());</script> from  <a href="https://doteightplus.com" target="_blank" >DotEightPlus.</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
      <script>
  if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
      }).catch(function(err) {
        console.log("No it didn't. This happened: ", err)
      });
  }
</script>
<script src="service-worker.js">
        // Service worker for Progressive Web App
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js', {
            scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
        }).then(function(registration) {
            // Registration was successful
            console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
            // registration failed :(
            console.log('ServiceWorker registration failed: ', err);
        });
    }
</script>
<script>
  var div = document.createElement('div');
  div.className = 'fb-customerchat';
  div.setAttribute('page_id', '115455323505629');
  div.setAttribute('ref', '');
  document.body.appendChild(div);
  window.fbMessengerPlugins = window.fbMessengerPlugins || {
    init: function () {
      FB.init({
        appId            : '1678638095724206',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v3.3'
      });
    }, callable: []
  };
  window.fbAsyncInit = window.fbAsyncInit || function () {
    window.fbMessengerPlugins.callable.forEach(function (item) { item(); });
    window.fbMessengerPlugins.init();
  };
  setTimeout(function () {
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) { return; }
      js = d.createElement(s);
      js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  }, 0);
</script>