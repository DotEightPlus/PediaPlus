<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
      <meta charset="UTF-8">
    <meta name="description" content="PediaPlus">
    <meta name="keywords" content="PediaPlus, Pdf">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="theme-color" content="#ea728c">

    <!-- Title Page-->
    <title>PediaPlus | Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="manifest" href="manifest.json">

    <link type="image/x-icon" rel="shortcut icon" href="images/logo.png">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="https://PediaPlus.com.ng">
                    <h3 style="color: #ea728c">PediaPlus<sup style="font-size: 12px"><i class="fa fa-plus"></i></sup></h3>
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    
                    <h4 class="name"><?php username(); ?></h4>
                    <a href="./profile">@<?php user(); ?></a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="./">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="./pdf">
                                <i class="fas fa-copy"></i>Download PDF(s)
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                       <li class="has-sub">
                            <a class="js-arrow" href="./archive">
                                <i class="fas fa-shopping-basket"></i>Archive
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="./donate">
                                <i class="fas fa-upload"></i>Donate PDF(s)
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="./credit">
                                <i class="fas fa-trophy"></i>Buy PDF Credit(s)
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="./.profile">
                                <i class="fas fa-desktop"></i>Profile
                                <span class="arrow">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
                <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <h3 style="color: #ffff">PediaPlus<sup style="font-size: 12px"><i class="fa fa-plus"></i></sup></h3>
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-button-item has-noti js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>
                                    <div class="notifi-dropdown js-dropdown">
                                        <div class="notifi__title">
                                            <p>You have 3 Notifications</p>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c1 img-cir img-40">
                                                <i class="zmdi zmdi-email-open"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a email notification</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c2 img-cir img-40">
                                                <i class="zmdi zmdi-account-box"></i>
                                            </div>
                                            <div class="content">
                                                <p>Your account has been blocked</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__item">
                                            <div class="bg-c3 img-cir img-40">
                                                <i class="zmdi zmdi-file-text"></i>
                                            </div>
                                            <div class="content">
                                                <p>You got a new file</p>
                                                <span class="date">April 12, 2018 06:50</span>
                                            </div>
                                        </div>
                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>




            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="images/icon/logo-white.png" alt="PediaPlus" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                                           
                    <h4 class="name"><?php username(); ?></h4>
                    <a href="./profile">@<?php user(); ?></a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">
                                <a class="js-arrow" href="./">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="arrow">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                               
                            </li>
                            <li>
                                <a href="./pdf">
                                    <i class="fas fa-copy"></i>Download PDF(s)</a>
                               <span class="arrow">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                            </li>
                            <li>
                                <a href="./archive">
                                    <i class="fas fa-shopping-basket"></i>Archive</a>
                                    <span class="arrow">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="./donate">
                                    <i class="fas fa-upload"></i>Donate PDF(s)
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="./credit">
                                    <i class="fas fa-trophy"></i>Buy PDF Credit(s)
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                
                            </li>
                            <li class="has-sub">
                                <a class="js-arrow" href="./profile">
                                    <i class="fas fa-desktop"></i>Profile
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>