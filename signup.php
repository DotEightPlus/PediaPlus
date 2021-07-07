<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia | Signup</title>
    <meta name="description" content="DotPedia | Signup">
    <meta name="keywords" content="DotPedia, Create a free account">
    <?php include("include/header.php"); ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_4.jpg);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1 data-aos="fade-up" class="mb-5"><span
                                    style="color: #fff; border-radius: 0px 20px 0px 20px;" class="typed-words"></span>
                            </h1>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="block-quick-info-2">
        <div class="container">
            <div class="block-quick-info-2-inner">
                <div class="col-md-12">
                    <form action="#">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" class="form-control" placeholder="Input Your Full Name">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Create a username</label>
                                <input type="text" id="usname" class="form-control" placeholder="Create your username">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control"
                                    placeholder="Input your email address">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Telephone</label>
                                <input type="number" id="email" class="form-control"
                                    placeholder="Input your email address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">Institution</label>
                                <input type="number" id="tel" class="form-control"
                                    placeholder="Input your telephone number">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="fname">Create a password</label>
                                <input type="password" id="pword" class="form-control" placeholder="Create a password">
                            </div>
                            <div class="col-md-6">
                                <label for="lname">Confirm Password</label>
                                <input type="password" id="cpword" class="form-control"
                                    placeholder="Re-type your password here">
                            </div>
                        </div>

                        <div class="form-group row">

                            <button data-aos="fade-up" data-aos-delay="100" class="btn btn-primary btn-pill float-left"
                                id="nxtSign" value="Create Free Account">Create A Free Account</button>

                        </div>

                    </form>
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

    <script src="ajax.js"></script>

    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/rangeslider.min.js"></script>


    <script src="js/typed.js"></script>
    <script>
    var typed = new Typed('.typed-words', {
        strings: ["Let's Get You Started"],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 400,
        startDelay: 400,
        loop: false,
        showCursor: false
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
            if (!myWindow) {
                document.getElementById("msg").innerHTML = "'myWindow' has never been opned!";
            } else {
                if (myWindow.closed) {
                    location.replace("https://pediaplus.com.ng/apireq?");
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