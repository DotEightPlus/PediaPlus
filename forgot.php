<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PediaPlus | Forgot Password</title>
<?php include("include/header.php"); ?>
<?php include("functions/init.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5">Forgot Password?<br/><span class="typed-words"></span></h1>
              </div>
              <p data-aos="fade-up" data-aos-delay="100"><a style="background: black;" href="./dotcloud" class="btn btn-pill">Sign in with your DotCloud Account</a></p>
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
                  <span class="excerpt"><a href="https://m.me/pediaplus">Let`s Connect</a></span>
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
                  <strong class="d-block heading">WhatsApp</strong>
                  <span class="excerpt"><a href="https://wa.me/2348103171902?text=Hello%2c%20I`m%20_____%0AI%20need%20help%20with%20PediaPlus" target="_blank">Chat us up</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5"  data-aos="fade">

            

            <form method="post" name="Formforgot" onsubmit="return validateForm()" class="p-5 bg-white" style="margin-top: -130px;">
             

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="emailer">Email</label>
                  <input type="email" id="emailer" name="emailer" class="form-control" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="button" value="Reset Password" id="forgot" class="btn btn-pill btn-primary btn-md text-white">
                </div><br/><br/><br/>
                 <p data-aos="fade-up" data-aos-delay="100"><a style="background: black;" href="./dotcloud" class="btn btn-pill">Sign in with your DotCloud Account</a></p>
              </div>

  
            </form>
          </div>
         
        </div>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="forgotModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: rgba(234, 114, 140, 0.9); color: white;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"></div>
                </div>
            </div>
        </div>
    </div> 

<?php include("include/footer.php"); ?>
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

  <script src="ajax.js"></script>

  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["We can help"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script> 

  

  </body>
</html>