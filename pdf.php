<?php include("functions/init.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia | Dowload PDF's</title>
    <meta name="description" content="DotPedia | Download PDF's">
    <meta name="keywords" content="DotPedia, Download Pdf">
    <?php include("include/header.php"); ?>
    <div class="site-blocks-cover overlay" style="background-image: url(images/3.png);" data-aos="fade"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10">

                    <div class="row justify-content-center mb-4">
                        <div class="col-md-10 text-center">
                            <h1 data-aos="fade-up" class="mb-5 font-weight-bold text-head"><span
                                    style="background: #FFE9E6; color: #ff0000; border-radius: 0px 20px 0px 20px;"
                                    class="typed-words"></span> PDF's</h1>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>





    <div class="site-section">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <?php 
                    $sql = "SELECT * FROM pdf";
                    $rsl = query($sql);
                    
                    while($row = mysqli_fetch_array($rsl)) {
                   ?>
                    <div class="row mb-3 align-items-stretch">
                        <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <div class="h-entry-inner">
                                    <a href="blog-single.html"><img src="images/pdff.png" alt="<?php ?>"
                                            class="img-fluid"></a>
                                    <h2 class="font-size-regular"><a href="blog-single.html"><?php ?></a></h2>
                                    <div class="meta mb-4">Uploaded by <a
                                            href="./profile?user=<?php echo $row['upld'] ?>">
                                            <?php echo $row['upld'] ?>
                                        </a> <span class="mx-2">&bullet;</span> <?php echo $row['level'] ?>
                                        <span class="mx-2">&bullet;</span> <?php echo $row['dept'] ?>

                                    </div>


                                    <!--<p>The content of this PDF was uploaded for
                                        <b><?php echo $row['fcg'] ?></b>. Department of
                                        <b><?php echo $row['dept'] ?></b>
                                    </p> -->

                                    <div class="col-md-12 ">
                                        <a href="./logout"><input
                                                style="width: 100%; background: #FFE9E6; color: #ff0000;" type="submit"
                                                value="Preview/Download" class="btn btn-pill btn-md "></a><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                </div>

                <div class="col-md-3 ml-auto">
                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Search</h3>
                        <form action="#" method="post">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                            </div>
                        </form>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Popular Posts</h3>
                        <ul class="list-unstyled post-lists">
                            <li class="mb-2"><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li class="mb-2"><a href="#">Quaerat rerum voluptatibus veritatis</a></li>
                            <li class="mb-2"><a href="#">Maiores sapiente veritatis reprehenderit</a></li>
                            <li class="mb-2"><a href="#">Natus eligendi nobis</a></li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Recent Comments</h3>
                        <ul class="list-unstyled post-lists">
                            <li class="mb-2"><a href="#">Hannah</a> <em>in</em> <a href="#">Lorem ipsum dolor
                                    sit
                                    amet</a></li>
                            <li class="mb-2"><a href="#">Roger</a> <em>in</em> <a href="#">Quaerat rerum
                                    voluptatibus
                                    veritatis</a></li>
                            <li class="mb-2"><a href="#">Hannah</a> <em>in</em> <a href="#">Maiores sapiente
                                    veritatis
                                    reprehenderit</a></li>
                            <li class="mb-2"><a href="#">Kim</a> <em>in</em> <a href="#">Natus eligendi
                                    nobis</a></li>
                        </ul>
                    </div>

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

    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/rangeslider.min.js"></script>


    <script src="js/typed.js"></script>
    <script>
    var typed = new Typed('.typed-words', {
        strings: ["&nbsp;GET&nbsp;", "&nbsp;SHARE&nbsp;", "&nbsp;SAVE&nbsp;  "],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 400,
        startDelay: 400,
        loop: true,
        showCursor: false
    });
    </script>

    <script src="js/main.js"></script>

    </body>

</html>