<?php include("functions/init.php"); 
if(isset($_SESSION['login'])) {

    unset($_SESSION['login']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia | Signup</title>
    <meta name="description" content="DotPedia | Signup">
    <meta name="keywords" content="DotPedia, Create a free account">
    <meta property="og:title" content="DotPedia | Signup" />
    <meta property="og:image" content="images/ico.png" />
    <meta property="og:url" content="https://dotpedia.com.ng/signup" />
    <meta property="og:site_name" content="DotPedia from DotEightPlus" />
    <meta property="og:description" content="Read, Earn, Share" />
    <?php include("include/header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1 data-aos="fade-up" class="mb-5 font-weight-bold text-head"><span
                                    style="color: #fff; border-radius: 0px 20px 0px 20px;" class="typed-words"></span>
                            </h1>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div style="background:  #FFE9E6" class="block-quick-info-2">
        <div class="container">
            <div class="block-quick-info-2-inner">
                <div class="col-md-12">
                    <form>
                        <div class="row form-group">
                            <div class="col-md-6 mt-4">
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Input Your Full Name">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="lname">Create a username</label>
                                <input type="text" id="usname" class="form-control" placeholder="Create your username">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mt-4">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control"
                                    placeholder="Input your email address">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="email">Telephone</label>
                                <input type="number" id="tel" class="form-control"
                                    placeholder="Input your telephone number">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12 mt-4">
                                <label for="subject">Institution</label>
                                <input type="text" id="inst" class="form-control"
                                    placeholder="Input your institution name">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mt-4">
                                <label for="pword">Create a password</label>
                                <input type="password" id="pword" class="form-control" placeholder="Create a password">
                            </div>
                            <div class="col-md-6 mt-4">
                                <label for="cpword">Confirm Password</label>
                                <input type="password" id="cpword" class="form-control"
                                    placeholder="Re-type your password here">
                            </div>
                        </div>


                        <div class="mt-5">
                            <p class="text-center font-weight-bold"><a style="color: #ff0000; cursor: pointer;"
                                    id="sub">Signup </a>&nbsp; |
                                &nbsp;<a href="./signin" style="color: #000;"> Have an
                                    Account?</a></p>
                        </div>




                    </form>
                </div>
            </div>
        </div>




    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div style="background: #FFE9E6; color: #ff0000; border-radius: 0px 40px 0px 40px;" class="modal-content">
                <div class="modal-body">
                    <div id="msg" class="text-center"></div>
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

    <script src="ajax.js"></script>

    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/rangeslider.min.js"></script>


    <script src="js/typed.js"></script>
    <script>
    var typed = new Typed('.typed-words', {
        strings: ["Let's Get Started"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 400,
        startDelay: 400,
        loop: false,
        showCursor: true
    });
    </script>

    <script src="js/main.js"></script>
    </body>

</html>