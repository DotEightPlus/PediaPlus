<?php include("functions/init.php");
if(!isset($_POST['res'])) {

    redirect("./pdfs");
} else {

    $data = clean(escape($_POST['res']));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DotPedia | Search PDF</title>
    <meta name="description" content="DotPedia | Search PDF's">
    <meta name="keywords" content="DotPedia, Search Pdf">
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

                            <div class="col-sm-3">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Institution
                                        .:</b></label>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option id="loc" name="loc">Abubakar Tafawa Balewa University, Bauchi</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-2">
                                <label><b style="color: #ff0000; font-size: 18px;"
                                        class="font-weight-bold">Faculty/College
                                        .:</b></label>
                                <div class="form-group">
                                    <select name="aprmt" id="aprmt" class="form-control" required>
                                        <option id="apt">Self-Contain</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Department
                                        .:</b></label>
                                <div class="form-group">
                                    <select name="water" id="water" class="form-control" required>
                                        <option id="water">Borehole</option>
                                        <option id="water">Well</option>
                                        <option id="water">Public Water</option>
                                        <option id="water">None</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-2">
                                <label><b style="color: #ff0000; font-size: 18px;" class="font-weight-bold">Level
                                        .:</b></label>
                                <div class="form-group">
                                    <select id="toi" class="form-control" required>
                                        <option id="toi">Pit Toilet</option>
                                        <option id="toi">Water Closet</option>
                                        <option id="toi">Public Toilet</option>
                                        <option id="toi">None</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-2">

                                <div class="form-group">
                                    <div class="col-md-12 mt-4">
                                        <a href="./logout"><input
                                                style="width: 100%; background: #FFE9E6; color: #ff0000;" type="submit"
                                                value="APPLY" class="btn btn-md "></a><br />
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
            <div class="mb-5">
                <h3 class="h5 text-black mb-3">Search</h3>
                <form action="./search" method="post">
                    <div class="form-group d-flex">
                        <input type="text" name="res" value="<?php echo $data ?>" class="form-control"
                            placeholder="Search PDF and hit enter...">
                    </div>
                </form>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <?php 
                    $sql = "SELECT * FROM pdf WHERE `title` LIKE '%$data%'";
                    $rsl = query($sql);

                    if(row_count($rsl) != '') {
                    
                    while($row = mysqli_fetch_array($rsl)) {
                   ?>
                    <div class="row mb-3 align-items-stretch">
                        <div class="col-md-4 col-lg-4 mb-4 mb-lg-4">
                            <div class="h-entry">
                                <div class="h-entry-inner">
                                    <a href="blog-single.html"><img src="images/pdff.png" alt="<?php ?>"
                                            class="img-fluid"></a>
                                    <h2 style="color: #ff0000" class="font-size-regular font-weight-bold">
                                        <?php echo $row['title'] ?>
                                    </h2>
                                    <div style="color: #000" class="meta mb-4">Uploaded by <a
                                            href="./<?php echo $row['upld'] ?>">
                                            <?php echo $row['upld']; 
                                            
                                            //verification tick
                                            $uul = $row['upld'];
                                            $ssl = "SELECT * FROM signup WHERE `usname` = '$uul'";
                                            $rsl = query($ssl);

                                            $tick = mysqli_fetch_array($rsl);

                                            if($tick['vrf'] == 'Yes') {
                                                
                                                echo ' <i style="color: #ff0000" class="icon-check-circle"></i>';
                                                
                                            } else {

                                                echo '';
                                            }
                                            
                                            ?>
                                        </a>
                                        <span class="mx-2">&bullet;</span> <?php echo $row['level'] ?>
                                        <span class="mx-2">&bullet;</span> <?php echo $row['dept'] ?>
                                        <span class="mx-2">&bullet;</span> <?php echo number_format($row['dwnld']) ?>
                                        Downloads
                                    </div>



                                    <div class="col-md-12 ">
                                        <a href="./preview/<?php echo $row['filer'] ?>"><input
                                                style="width: 100%; background: #FFE9E6; color: #ff0000;" type="submit"
                                                value="Preview/Download" class="btn btn-pill btn-md "></a><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                 } else {

                        echo '
                        
                        <div style="color: #000" class="meta mb-4">Uploaded by
                    Downloads
                </div>


                ';
                }
                ?>
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
        strings: ["&nbsp;SEARCH&nbsp;", "&nbsp;GET&nbsp;", "&nbsp;FIND&nbsp;  "],
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