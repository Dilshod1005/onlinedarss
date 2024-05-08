<?php
use yii\helpers\Url;
use common\components\MenuWidgets;

?>

<div class="wrapper">
<!--    <div class="preloader"></div>-->
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
                <a href="#" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid" src="<?=Url::base()?>/images/header-logo.png" alt="header-logo.png">
                    <img class="logo2 img-fluid" src="<?=Url::base()?>/images/header-logo2.png" alt="header-logo2.png">
                    <span>edumy</span>
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li>
                        <a href="<?=Url::to(['site/index'])?>"><span class="title">Bosh sahifa</span></a>
                        <!-- Level Two-->

                    </li>
                    <li>
                        <a href="#" class="title" style="background-color: #0a0a0a;color: #ffffff;   padding: 13px 30px; margin-top: 17px; line-height: normal;    -webkit-box-align: center;    -webkit-border-radius: 50px;">Yo'nalishlar  </a>
                        <!-- Level Two-->
                        <ul>
                               <?php
                               $m=new MenuWidgets();
                                $m->menu();
                               ?>
                        </ul>
                    </li>
                    <li class="list-inline-item dn-1440" style="margin: 15px">
                        <div class="ht_search_widget">
                            <div class="header_search_widget">
                                <form class="form-inline mailchimp_form" action="/course/all">
                                    <input type="text" required class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2"
                                           name="title"  placeholder="Kurslarni qidirish" style="width: 200px">
                                    <button type="submit" class="btn btn-primary mb-2"><span
                                                class="flaticon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </li>
<!--                    <li class="list-inline-item list_s">-->
<!--                        <div class="search_overlay">-->
<!--                            <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">-->
<!--                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </li>-->
                    <li class="last">
                        <a href="page-contact.html"><span class="title">Kurslar</span></a>
                    </li>
                    <li class="last">
                        <a href="page-contact.html"><span class="title">Bog'lanish</span></a>
                    </li>
                    <li class="last">
                        <a href="page-contact.html"><span class="title">Yordam</span></a>
                    </li>
                    <li><a href="/login?return_url=%2Findex" role="modal-remote"><span class="flaticon-user"></span> Kirish</a></li>
                    <li><a href="<?=Url::to(['site/signup'])?>" role="modal-remote"><span class="flaticon-edit"></span> Ro'yxatdan o'tish</a></li>
                </ul>
              <!-- Button trigger modal -->
            </nav>
        </div>
    </header>
    <!-- Modal -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2">
                    <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
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
                <?php
                $menu=new MenuWidgets();
                $menu->menu();
                ?>
            </ul>
        </nav>
    </div>
