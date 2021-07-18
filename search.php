<?php include("functions/init.php");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia | Dowload PDF's</title>
    <meta name="description" content="DotPedia | Download PDF's">
    <meta name="keywords" content="DotPedia, Download Pdf">
    <meta property="og:title" content="DotPedia" />
    <meta property="og:image" content="images/ico.png" />
    <meta property="og:url" content="https://dotpedia.com.ng" />
    <meta property="og:site_name" content="DotPedia from DotEightPlus" />
    <meta property="og:description" content="Read, Earn, Share" />
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

    <div class="block-quick-info-2">
        <div class="container">
            <div class="block-quick-info-2-inner">
                <div class="row">

                    <form class="form-contact contact_form col-lg-12" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">

                            <div class="col-sm-12">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Search PDF
                                        .:</b></label>
                                <div class="form-group">

                                    <input type="text" name="srctxt" id="srctxt" class="form-control"
                                        placeholder="Search PDF and click on apply...">

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Institution
                                        .:</b></label>
                                <div class="form-group">
                                    <select class="form-control" id="inst">
                                        <?php
                                    $gt = "SELECT * FROM pdf WHERE `approve` = 'Yes' GROUP BY `inst`";
                                    $rt = query($gt);
                                    
                                    $rw = mysqli_fetch_array($rt);
                                    
                                    echo '<option id="inst" name="inst">'.$rw['inst'].'</option>';
                                    ?>


                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label><b style="color: #ff0000; font-size: 18px;"
                                        class="font-weight-bold">Faculty/College
                                        .:</b></label>
                                <div class="form-group">
                                    <select name="fcg" id="fcg" class="form-control" required>

                                        <?php
                                    $gt = "SELECT * FROM pdf WHERE `approve` = 'Yes' GROUP BY `fcg`";
                                    $rt = query($gt);
                                    
                                    $rw = mysqli_fetch_array($rt);
                                    
                                    echo '<option id="fcg" name="fcg">'.$rw['fcg'].'</option>';
                                    ?>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Department
                                        .:</b></label>
                                <div class="form-group">
                                    <select name="dept" id="dept" class="form-control" required>
                                        <?php
                                    $gt = "SELECT * FROM pdf WHERE `approve` = 'Yes' GROUP BY `dept`";
                                    $rt = query($gt);
                                    
                                    $rw = mysqli_fetch_array($rt);
                                    
                                    echo '<option id="inst" name="inst">'.$rw['dept'].'</option>';
                                    ?>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-2">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Level
                                        .:</b></label>
                                <div class="form-group">
                                    <select id="toi" class="form-control" required>
                                        <?php
                                    $gt = "SELECT * FROM pdf WHERE `approve` = 'Yes' GROUP BY `level`";
                                    $rt = query($gt);
                                    
                                    $rw = mysqli_fetch_array($rt);
                                    
                                    echo '<option id="inst" name="inst">'.$rw['level'].'</option>';
                                    ?>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-2">

                                <div class="form-group">
                                    <div class="col-md-12 mt-4">
                                        <button id="filter" style="width: 100%; background: #FFE9E6; color: #ff0000;"
                                            type="button" class="btn btn-md ">APPLY</button><br />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>




    <div class="site-section">
        <div class="container">

            <div class="row">





                <div class="col-md-8">

                    <div class="row mb-3 align-items-stretch">

                        <?php
                        $ssl = "SELECT * FROM pdf WHERE `approve` = 'Yes'";
                        $rls = query($ssl);

                        while($row = mysqli_fetch_array($rls)) {
                        
                        ?>
                        <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">

                            <div class="h-entry">
                                <div class="h-entry-inner">
                                    <a href="blog-single.html"><img src="images/pdff.png" alt="" class="img-fluid"></a>
                                    <h2 style="color: #ff0000" class="font-size-regular font-weight-bold">
                                        <?php echo $row['title']; ?>
                                    </h2>
                                    <div style="color: #000" class="meta mb-4">Uploaded by <a
                                            href="./<?php echo $row['upld'] ?>"><?php echo $row['upld'] ?>


                                        </a>
                                        <span class="mx-2">&bullet;</span> <?php echo $row['level'] ?><br />
                                        <span class="mx-2">&bullet;</span> <?php echo $row['dept'] ?>
                                        <span class="mx-2">&bullet;</span> <?php echo $row['dwnld'] ?>
                                        Downloads
                                        <br /><br />
                                        <span class="mx-2"><a target="_blank" data-media="images/ico.png"
                                                href="https://twitter.com/home?status=https://dotpedia.com.ng/preview/<?php echo $row['title'] ?>"><i
                                                    class="icon-twitter"></i></a></span>
                                        <span class="mx-2"><a target="_blank" data-media="images/ico.png"
                                                href="https://facebook.com/sharer.php?u=https://dotpedia.com.ng/preview/<?php echo $row['title'] ?>"><i
                                                    class="icon-facebook"></i></a></span>
                                        <span class="mx-2"><a target="_blank" data-action="share/whatsapp/share"
                                                data-media="images/ico.png"
                                                href="https://api.whatsapp.com/send?text=https://teensyouths.com.ng/preview/<?php echo $row['title'] ?>"><i
                                                    class="icon-whatsapp"></i></a></span>
                                    </div>



                                    <div class="col-md-12 ">
                                        <a href="./preview/ccxc"><input
                                                style="width: 100%; background: #FFE9E6; color: #ff0000;" type="submit"
                                                value="Preview/Download" class="btn btn-pill btn-md "></a><br />
                                    </div>
                                </div>
                            </div>

                        </div>



                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="col-md-3 ml-auto">


                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Latest PDF(s)</h3>
                        <ul class="list-unstyled post-lists">
                            <?php 
                         $sql = "SELECT * FROM pdf WHERE `approve` = 'Yes' ORDER BY id desc LIMIT 5";
                         $rsl = query($sql);
                         
                         while($row = mysqli_fetch_array($rsl)) {
                        ?>
                            <li class="mb-2"><a
                                    href="./preview/<?php echo $row['filer'] ?>"><?php echo $row['title'] ?></a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <h3 class="h5 text-black mb-3">Top Downloaded</h3>
                        <ul class="list-unstyled post-lists">
                            <?php 
                         $sql = "SELECT * FROM pdf WHERE `dwnld` BETWEEN 5 AND 1000000000000000 AND `approve` = 'Yes' LIMIT 5";
                         $rsl = query($sql);
                         
                         while($row = mysqli_fetch_array($rsl)) {
                        ?>
                            <li class="mb-2"><a
                                    href="./preview/<?php echo $row['filer'] ?>"><?php echo $row['title'] ?></a>
                            </li>
                            <?php
                            }
                            ?>
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

    <script src="ajax.js"></script>

    </body>

</html>