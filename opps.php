<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PediaPlus</title>
<?php include("include/header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5"><span class="typed-words"></span><br/>Access to this resource is denied</h1>
                 <button data-aos="fade-up" data-aos-delay="100" style="color: #ea728c;" onclick="goBack();" class="btn btn-pill btn-dark">< Go Back</button>
            
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>  



    <div class="block-quick-info-2">
      <div class="container">
        <div class="block-quick-info-2-inner">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-facebook mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Facebook</strong>
                  <span class="excerpt"><a href="https://m.me/pediaplus">Click here</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-phone mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Need Help</strong>
                  <span class="excerpt"><a href="tel: +2348103171902">+234 810 317 1902</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
              <div class="d-flex quick-info-2">
                <span class="icon icon-envelope mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">Send us a message</strong>
                  <span class="excerpt"><a href="mailto: pdf@pediaplus.com.ng">pdf@pediaplus.com.ng</a></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 mb-3 mb-lg-0">
               <div class="d-flex quick-info-2">
                <span class="icon icon-whatsapp mr-3"></span>
                <div class="text">
                  <strong class="d-block heading">WhatsApp us</strong>
                  <span class="excerpt"><a href="https://wa.me/2348103171902?text=Hello%2c%20I`m%20_____%0AI%20need%20help%20with%20PediaPlus" target="_blank">Click here</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Uh oh!"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script>

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
function goBack() {
    window.history.back()
}
</script>
  </body>
</html>