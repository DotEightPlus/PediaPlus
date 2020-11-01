<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PediaPlus | Sign in</title>
<?php
 include("include/header.php");
 include("functions/init.php");

 if (isset($_SESSION[''])) {
   
 }

  ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10">
            
             <div class="row justify-content-center mb-4">
              <div class="col-md-10 text-center">
                <h1 data-aos="fade-up" class="mb-5"><span style="color: white;" class="typed-words"></span></h1>
                   <p data-aos="fade-up" data-aos-delay="100"><a style="background: black;" href="#" onclick="openWin()" class="btn btn-pill">Sign in with your DotAccount</a></p>

                </div>
            </div>

          </div>
        </div>
      </div>
    </div>  

   
    <div id="msg" hidden></div>
   
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
            strings: ["Welcome Back"],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: false,
            showCursor: true
            });
            </script>

  <script src="js/main.js"></script> 

  <script type="text/javascript">
  var myWindow;

   function openWin() {
    myWindow = window.open("https://dotaccount.doteightinc.com/apiput", "myWindow", "width=900, height=1000");
    console.log(document.title)

   } 

   window.onload = function() {

    function checkWin() {
    if(!myWindow) {
      document.getElementById("msg").innerHTML = "'myWindow' has never been opned!";
    } else {
      if(myWindow.closed){
        location.replace("https://pediaplus.com.ng/apireq");
        document.getElementById("msg").innerHTML = "'myWindow' has  been closed!";
      } else {

        document.getElementById("msg").innerHTML = "'myWindow' has not been closed!";
      }
    }
   }

  
  setInterval(checkWin, 1000);



  }
   </script>


  </body>
</html>