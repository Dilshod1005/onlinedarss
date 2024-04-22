<?php

/** @var \yii\web\View $this */
/** @var string $content */
use frontend\assets\AppAsset;
use yii\helpers\Url;
use app\models\Category;
use app\models\CategoryChild;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="<?= Yii::$app->language ?>">

<!-- Mirrored from grandetest.com/theme/edumy-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jan 2020 07:24:42 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
    <meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <!-- Title -->
    <title>Edumy - LMS Online Education Course & School HTML Template</title>
    <!-- Favicon -->
    <link href="<?=Url::base()?>/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="<?=Url::base()?>/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="<?=Url::home()?>" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                    <img class="logo2 img-fluid" src="<?=Url::base()?>/images/header-logo2.png" alt="header-logo2.png">
                    <span>edumy</span>
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal" style="text-transform: lowercase">
                    <li>
                        <a href="#"><span class="title" >Yo'nalishlar</span></a>
                        <!-- Level Two-->
                        <ul>
                            <li>
                            <?php
                            $model=Category::find()
                                ->asArray()
                                ->where(['status'=>'10'])
                                ->all();


                            foreach($model as $k=>$v){
                                    echo '<a href="#">'.$v['name'].'</a>';
                                $mod=CategoryChild::find()
                                    ->asArray()
                                    ->where(['category_id'=>$v['id']])
                                    ->all();
                                echo '<ul>';
                                foreach ($mod as $a=>$row){
                                    echo '<li>';
                                    echo  ' <a href="page-course-v1.html">'.$row['name'].'</a>';
                                    echo '</li>';
                                }
                                echo '</ul>';
                            }

                            ?>
                            </li>
<!--                            <li>-->
<!--                                <a href="#">Courses List</a>-->
<!--                                <ul>-->
<!--                                    <li><a href="page-course-v1.html">Courses v1</a></li>-->
<!--                                    <li><a href="page-course-v2.html">Courses v2</a></li>-->
<!--                                    <li><a href="page-course-v3.html">Courses v3</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->

                        </ul>
                    </li>
                    <li class="list-inline-item list_s" style="margin-top: 15px">
                        <div class="search_overlay">
                            <div class="header_search_widget">
                                <form class="form-inline mailchimp_form" action="/course/all">
                                    <input type="text" required class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2"
                                           name="title"  placeholder="Kurslarni qidirish" style="width: 200px">
                                    <button type="submit" id="mk-search-trigger mk-fullscreen-trigger" class="btn btn-primary mb-2"><span id="search-button" class="flaticon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><span class="title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKurslar</span></a>

                    </li>
                    <li>
                        <a href="#"><span class="title">Bog'lanish</span></a>

                    </li>
                    <li>
                        <a href="#"><span class="title">Yordam</span></a>

                    </li>
                    <li>
                        <a href="#"><span class="title" ><span class="flaticon-user"></span> Kirish</span></a>

                    </li>
                    <li>
                        <a href="#"><span class="title"><span class="flaticon-edit"></span> Ro'yhatdan o'tish</span></a>

                    </li>
                </ul>

            </nav>
        </div>
    </header>
    <!-- Modal -->
    <div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="login_form">
                            <form action="#">
                                <div class="heading">
                                    <h3 class="text-center">Login to your account</h3>
                                    <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                    <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                    <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                                <hr>
                                <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="sign_up_form">
                            <div class="heading">
                                <h3 class="text-center">Create New Account</h3>
                                <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                            </div>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                    <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                                </div>
                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                                <hr>
                                <div class="row mt40">
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                    </div>
                                    <div class="col-lg">
                                        <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search Button Bacground Overlay -->
    <div class="search_overlay dn-992">
        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
            <div id="mk-fullscreen-search-wrapper">
                <form method="get" id="mk-fullscreen-searchform">
                    <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
                    <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2">
                    <img class="nav_logo_img img-fluid float-left mt20" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                    <span>edumy</span>
                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item">
                        <div class="search_overlay">
                            <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                            </a>
                            <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                                <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                                <div id="mk-fullscreen-search-wrapper2">
                                    <form method="get" id="mk-fullscreen-searchform2">
                                        <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                        <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item"><a href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>

                </li>
                <li><span>Courses</span>
                    <ul>
                        <li><span>Courses List</span>
                            <ul>
                                <li><a href="page-course-v1.html">Courses v1</a></li>
                                <li><a href="page-course-v2.html">Courses v2</a></li>
                                <li><a href="page-course-v3.html">Courses v3</a></li>
                            </ul>
                        </li>
                        <li><span>Courses Single</span>
                            <ul>
                                <li><a href="page-course-single-v1.html">Single V1</a></li>
                                <li><a href="page-course-single-v2.html">Single V2</a></li>
                                <li><a href="page-course-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><a href="page-instructors.html">Instructors</a></li>
                        <li><a href="page-instructors-single.html">Instructor Single</a></li>
                    </ul>
                </li>
                <li><span>Events</span>
                    <ul>
                        <li><a href="page-event.html">Event List</a></li>
                        <li><a href="page-event-single.html">Event Single</a></li>
                    </ul>
                </li>
                <li><span>Pages</span>
                    <ul>
                        <li><span>Shop Pages</span>
                            <ul>
                                <li><a href="page-shop.html">Shop</a></li>
                                <li><a href="page-shop-single.html">Shop Single</a></li>
                                <li><a href="page-shop-cart.html">Cart</a></li>
                                <li><a href="page-shop-checkout.html">Checkout</a></li>
                                <li><a href="page-shop-order.html">Order</a></li>
                            </ul>
                        </li>
                        <li><span>User Admin</span>
                            <ul>
                                <li><a href="page-dashboard.html">Dashboard</a></li>
                                <li><a href="page-my-courses.html">My Courses</a></li>
                                <li><a href="page-my-order.html">My Order</a></li>
                                <li><a href="page-my-message.html">My Message</a></li>
                                <li><a href="page-my-review.html">My Review</a></li>
                                <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                <li><a href="page-my-listing.html">My Listing</a></li>
                                <li><a href="page-my-setting.html">My Setting</a></li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-login.html">LogIn</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-pricing.html">Membership</a></li>
                        <li><a href="page-error.html">404 Page</a></li>
                        <li><a href="page-terms.html">Terms and Conditions</a></li>
                        <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li><span>Blog</span>
                    <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-list.html">Blog List 3</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>
                <li><a href="page-contact.html">Contact</a></li>
                <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
                <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
            </ul>
        </nav>
    </div>

    <!-- 2nd Home Slider -->
    <div class="home1-mainslider">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper">
                        <div class="banner-style-one owl-theme owl-carousel">
                            <div class="slide slide-one" style="background-image: url(<?=Url::base()?>/images/home/1.jpg); height: 95vh;">
                                <div class="container">
                                    <div class="row home-content">
                                        <div class="col-lg-12 text-center p0">
                                            <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
                                            <p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
                                            <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-one" style="background-image: url(<?=Url::base()?>/images/home/2.jpg);height: 95vh;">
                                <div class="container">
                                    <div class="row home-content">
                                        <div class="col-lg-12 text-center p0">
                                            <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
                                            <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
                                            <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slide slide-one" style="background-image: url(<?=Url::base()?>/images/home/3.jpg);height: 95vh;">
                                <div class="container">
                                    <div class="row home-content">
                                        <div class="col-lg-12 text-center p0">
                                            <h3 class="banner-title">Find the Best Courses</h3>
                                            <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
                                            <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
                            <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
                        </div><!-- /.carousel-btn-block banner-carousel-btn -->
                    </div><!-- /.main-banner-wrapper -->
                </div>
            </div>
        </div>
        <div class="container home_iconbox_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="home_icon_box">
                                <div class="icon"><img src="<?=Url::base()?>/images/home/hicon1.png" alt="hicon1.png"></div>
                                <p>Learn From The Experts</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="home_icon_box">
                                <div class="icon mt15"><img src="<?=Url::base()?>/images/home/hicon2.png" alt="hicon2.png"></div>
                                <p>Book Library & Store</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="home_icon_box">
                                <div class="icon"><img src="<?=Url::base()?>/images/home/hicon3.png" alt="hicon3.png"></div>
                                <p>Worldwide Recognize</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="home_icon_box">
                                <div class="icon"><img src="<?=Url::base()?>/images/home/hicon4.png" alt="hicon4.png"></div>
                                <p>Best Industry Leaders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?=$content;?>
    <!-- Our Footer -->
    <section class="footer_one">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
                    <div class="footer_contact_widget">
                        <h4>CONTACT</h4>
                        <p>329 Queensberry Street, North Melbourne </p>
                        <p>VIC 3051, Australia.</p>
                        <p>123 456 7890</p>
                        <p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9be8eeebebf4e9efdbfeffeef6e2b5f8f4f6">[email&#160;protected]</a></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                    <div class="footer_company_widget">
                        <h4>COMPANY</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="#">Become a Teacher</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                    <div class="footer_program_widget">
                        <h4>PROGRAMS</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Nanodegree Plus</a></li>
                            <li><a href="#">Veterans</a></li>
                            <li><a href="#">Georgia</a></li>
                            <li><a href="#">Self-Driving Car</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
                    <div class="footer_support_widget">
                        <h4>SUPPORT</h4>
                        <ul class="list-unstyled">
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Forums</a></li>
                            <li><a href="#">Language Packs</a></li>
                            <li><a href="#">Release Status</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-md-3 col-lg-3">
                    <div class="footer_apps_widget">
                        <h4>MOBILE</h4>
                        <div class="app_grid">
                            <button class="apple_btn btn-dark">
								<span class="icon">
									<span class="flaticon-apple"></span>
								</span>
                                <span class="title">App Store</span>
                                <span class="subtitle">Available now on the</span>
                            </button>
                            <button class="play_store_btn btn-dark">
								<span class="icon">
									<span class="flaticon-google-play"></span>
								</span>
                                <span class="title">Google Play</span>
                                <span class="subtitle">Get in on</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Middle Area -->
    <section class="footer_middle_area p0">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 col-lg-3 col-xl-2 pb15 pt15">
                    <div class="logo-widget home1">
                        <img class="img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                        <span>EDUMY</span>
                    </div>
                </div>
                <div class="col-sm-8 col-md-5 col-lg-6 col-xl-6 pb25 pt25 brdr_left_right">
                    <div class="footer_menu_widget">
                        <ul>
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                            <li class="list-inline-item"><a href="#">Terms</a></li>
                            <li class="list-inline-item"><a href="#">Sitemap</a></li>
                            <li class="list-inline-item"><a href="#">Purchase</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-4 pb15 pt15">
                    <div class="footer_social_widget mt15">
                        <ul>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer Bottom Area -->
    <section class="footer_bottom_area pt25 pb25">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="copyright-widget text-center">
                        <p>Copyright Edumy © 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();