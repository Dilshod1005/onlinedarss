<?php

/** @var yii\web\View $this */
/** @var yii\web\View $model */
/** @var yii\web\View $mod */
use yii\helpers\Url;

$this->title = 'My Yii Application';

?>



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

<!-- School Category Courses -->
<section id="our-courses" class="our-courses pt90 pt650-992">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="#our-courses">
                    <div class="mouse_scroll">
                        <div class="icon"><span class="flaticon-download-arrow"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Via School Categories Courses</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/1.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Design</h5>
                            <p>Over 800 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/2.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Business</h5>
                            <p>Over 1,400 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/3.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Software Development</h5>
                            <p>Over 350 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/4.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Web Development</h5>
                            <p>Over 640 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/5.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Photography</h5>
                            <p>Over 740 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/6.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Audio + Music</h5>
                            <p>Over 120 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/7.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Marketing</h5>
                            <p>Over 200 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box" style="background-image: url(<?=Url::base()?>/images/courses/8.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>3D + Animation</h5>
                            <p>Over 900 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <div class="courses_all_btn text-center">
                    <a class="btn btn-transparent" href="#">View All Courses</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divider -->
<section class="divider_home1 bg-img2 parallax" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="divider-one">
                    <p class="color-white">STARTING ONLINE LEARNING</p>
                    <h1 class="color-white text-uppercase">Enhance your skIlls wIth best OnlIne courses</h1>
                    <a class="btn btn-transparent divider-btn" href="#">Get Started Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Courses -->
<section id="top-courses" class="top-courses pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Browse Our Top Courses</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="options" class="alpha-pag full">
                    <div class="option-isotop">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <?php foreach ($model as $row) :?>
                                <li class="list-inline-item"><a href="#business" data-option-value=".business"><?=$row->name;?></a></li>
                            <?php endforeach;?>

                        </ul>
                    </div>
                </div><!-- FILTER BUTTONS -->
                <div class="emply-text-sec">
                    <div class="row" id="masonry_abc">
                        <?php foreach ($mod as $mode) :?>
                            <div class="col-md-6 col-lg-4 col-xl-3 business design">
                                <div class="top_courses">
                                    <div class="thumb">
                                        <img class="img-whp" src="<?=Url::base()?>/images/courses/t1.jpg" alt="t1.jpg">
                                        <div class="overlay">
                                            <div class="tag">Best Seller</div>
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="<?=Url::to(['courses/detail','name'=>$mode->name])?>">Preview Course</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p><?=$mode->teacher?></p>
                                            <h5><?=$mode->name?></h5>
                                            <ul class="tc_review">
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">(6)</a></li>
                                            </ul>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left">
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                            <div class="tc_price float-right"><?=$mode->sum?> so'm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Testimonials -->
<section id="our-testimonials" class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">What People Say</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="testimonialsec">
                    <ul class="tes-nav">
                        <li>
                            <img class="img-fluid" src="<?=Url::base()?>/images/testimonial/1.jpg" alt="1.jpg"/>
                        </li>
                        <li>
                            <img class="img-fluid" src="<?=Url::base()?>/images/testimonial/2.jpg" alt="2.jpg"/>
                        </li>
                        <li>
                            <img class="img-fluid" src="<?=Url::base()?>/images/testimonial/3.jpg" alt="3.jpg"/>
                        </li>
                        <li>
                            <img class="img-fluid" src="<?=Url::base()?>/images/testimonial/4.jpg" alt="4.jpg"/>
                        </li>
                    </ul>
                    <ul class="tes-for">
                        <li>
                            <div class="testimonial_item">
                                <div class="details">
                                    <h5>Ali Tufan</h5>
                                    <span class="small text-thm">Client</span>
                                    <p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial_item">
                                <div class="details">
                                    <h5>Ali Tufan</h5>
                                    <span class="small text-thm">Client</span>
                                    <p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial_item">
                                <div class="details">
                                    <h5>Ali Tufan</h5>
                                    <span class="small text-thm">Client</span>
                                    <p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial_item">
                                <div class="details">
                                    <h5>Ali Tufan</h5>
                                    <span class="small text-thm">Client</span>
                                    <p>Customization is very easy with this theme. Clean and quality design and full support for any kind of request! Great theme!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog -->
<section class="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Latest News And Events</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="blog_slider_home1">
                    <div class="item">
                        <div class="blog_post one">
                            <div class="thumb">
                                <div class="post_title">Events</div>
                                <img class="img-fluid w100" src="<?=Url::base()?>/images/blog/1.jpg" alt="1.jpg">
                                <a class="post_date" href="#"><span>28 <br> March</span></a>
                            </div>
                            <div class="details">
                                <div class="post_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                    </ul>
                                </div>
                                <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post one">
                            <div class="thumb">
                                <div class="post_title">Events</div>
                                <img class="img-fluid w100" src="<?=Url::base()?>/images/blog/1a.jpg" alt="1a.jpg">
                                <a class="post_date" href="#"><span>28 <br> March</span></a>
                            </div>
                            <div class="details">
                                <div class="post_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                    </ul>
                                </div>
                                <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog_post one">
                            <div class="thumb">
                                <div class="post_title">Events</div>
                                <img class="img-fluid w100" src="<?=Url::base()?>/images/blog/1b.jpg" alt="1b.jpg">
                                <a class="post_date" href="#"><span>28 <br> March</span></a>
                            </div>
                            <div class="details">
                                <div class="post_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                                    </ul>
                                </div>
                                <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="blog_post">
                    <div class="thumb">
                        <img class="img-fluid w100" src="<?=Url::base()?>/images/blog/2.jpg" alt="2.jpg">
                        <a class="post_date" href="#">July 21, 2019</a>
                    </div>
                    <div class="details">
                        <h5>Marketing</h5>
                        <h4>A Solution Built for Teachers</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="blog_post">
                    <div class="thumb">
                        <img class="img-fluid w100" src="<?=Url::base()?>/images/blog/3.jpg" alt="3.jpg">
                        <a class="post_date" href="#">July 21, 2019</a>
                    </div>
                    <div class="details">
                        <h5>Business</h5>
                        <h4>An Overworked Newspaper Editor</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt50">
            <div class="col-lg-12">
                <div class="read_more_home text-center">
                    <h4>Like what you see? <a href="#">See more posts<span class="flaticon-right-arrow pl10"></span></a></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular Job Categories -->
<section class="home1-divider2 parallax" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7">
                <div class="app_grid">
                    <h1 class="mt0">Download & Enjoy</h1>
                    <p>Access your courses anywhere, anytime & prepare<br> with practice tests.</p>
                    <button class="apple_btn btn-transparent">
							<span class="icon">
								<span class="flaticon-apple"></span>
							</span>
                        <span class="title">App Store</span>
                        <span class="subtitle">Available now on the</span>
                    </button>
                    <button class="play_store_btn btn-transparent">
							<span class="icon">
								<span class="flaticon-google-play"></span>
							</span>
                        <span class="title">Google Play</span>
                        <span class="subtitle">Get in on</span>
                    </button>
                </div>
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="phone_img">
                    <img class="img-fluid" src="<?=Url::base()?>/images/resource/phone_home.png" alt="phone_home.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Partners -->
<section id="our-partners" class="our-partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Need To Train Your Team?</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?=Url::base()?>/images/partners/1.png" alt="1.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?=Url::base()?>/images/partners/2.png" alt="2.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?=Url::base()?>/images/partners/3.png" alt="3.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?=Url::base()?>/images/partners/4.png" alt="4.png">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg">
                <div class="our_partner">
                    <img class="img-fluid" src="<?=Url::base()?>/images/partners/5.png" alt="5.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Newslatters -->
<section id="our-newslatters" class="our-newslatters">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Get Newsletter</h3>
                    <p>Your download should start automatically, if not Click here. Should I give up, huh?.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="footer_apps_widget_home1">
                    <form class="form-inline mailchimp_form">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button type="submit" class="btn btn-lg btn-thm dbxshad">Get it now <span class="flaticon-right-arrow-1"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>