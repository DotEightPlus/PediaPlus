<?php
include("functions/init.php");

if(!isset($_SESSION['usemail'])) {

redirect("./opps");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia</title>
    <meta name="description" content="DotPedia | Home">
    <meta name="keywords" content="DotPedia, Pdf">
    <?php include("include/header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1 data-aos="fade-up" class="mb-5 font-weight-bold text-head">GET <span
                                    style="background: #FFE9E6; color: #ff0000; border-radius: 0px 20px 0px 20px;"
                                    class="typed-words"></span> <br />PDF CREDITS</h1>
                            <p style="margin-top: -40px;">An activation link has been sent to
                                <span class="font-weight-bold"><?php echo $_SESSION['usemail'] ?></span>
                            </p>

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
        strings: ["&nbsp;FREE 5&nbsp;"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 400,
        startDelay: 400,
        loop: false,
        showCursor: false
    });
    </script>

    <script src="js/main.js"></script>

    </body>

</html>