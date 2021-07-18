<div class="col-md-8">

<div class="row mb-3 align-items-stretch">

    <?php
     $sql = "SELECT * FROM pdf WHERE `title` LIKE '%$txt%' AND `inst` LIKE '%$inst%' AND `dept` LIKE '%$dept%' AND `level` LIKE '%$level%' AND `fcg` LIKE '%$fcg%'";
     $rsl = query($sql);

     if(row_count($rsl) != '') {
     
     while($row = mysqli_fetch_array($rsl)) {
    
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