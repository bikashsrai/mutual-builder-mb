<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mutalbuilders
 */

?>

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title> Construction 2 - Konstruk - Construction & Building HTML Template</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
        <!-- Bootstrap v4.4.1 css -->

        <?php wp_head();?>
    </head>

    <body class="defult-home">

        <div class="offwrap"></div>

        <!--Preloader start here-->
        <div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="assets/images/fav.png"
                            alt="Konstruk - Construction & Building Html Template "></div>
                </div>
            </div>
        </div>
        <!--Preloader area end here-->

        <!-- Main content Start -->
        <div class="main-content">

            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="rs-header" class="rs-header header-style1">
                    <!-- Middle Header Area End -->
                    <div class="middle-header hidden-md">
                        <div class="container">
                            <div class="row-table">
                                <div class="col-cell header-logo">
                                    <div class="logo-part">
                                        <a href="index.html"><img
                                                src="<?php echo get_template_directory_uri().'/assets/images/logo.png';?>"
                                                alt=""></a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-contact-info">
                                        <div class="contact-part">
                                            <div class="info-icon">
                                                <i class="fi fi-rr-map-marker-home"></i>
                                            </div>
                                            <div class="contact-info">
                                                <div class="info-title">
                                                    Contact us
                                                </div>
                                                <div class="info-des">
                                                    31 New Street, NY, USA
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-part">
                                            <div class="info-icon">
                                                <i class="fi fi-rr-envelope-plus"></i>
                                            </div>
                                            <div class="contact-info">
                                                <div class="info-title">
                                                    Email us
                                                </div>
                                                <div class="info-des">
                                                    <a href="mailto:support@devsdesign.net">
                                                        support@devsdesign.net
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact-part margin-no">
                                            <div class="info-icon">
                                                <i class="fi fi-rr-phone-call"></i>
                                            </div>
                                            <div class="contact-info">
                                                <div class="info-title">
                                                    Free Call
                                                </div>
                                                <div class="info-des">
                                                    <a href="tel:(+0885)-23456789"> (+0885) - 2345 6789</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Middle Header Area End -->

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row-table">
                                <div class="col-cell header-logo">
                                    <div class="logo-area">
                                        <a href="index.html">
                                            <img class="sticky-logo"
                                                src="<?php echo get_template_directory_uri().'/assets/images/logo-dark.png';?>"
                                                alt="logo">
                                            <img class="normal-logo"
                                                src="<?php echo get_template_directory_uri().'/assets/images/logo-dark.png';?>"
                                                alt="logo">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu hidden-md">
                                                <ul class="nav-menu onepage-menu">
                                                    <li class="current-menu-item"><a href="#rs-header">Home</a></li>
                                                    <li><a href="#rs-about">About</a> </li>
                                                    <li><a href="#rs-services">Services</a> </li>
                                                    <li><a href="#rs-project">Projects</a> </li>
                                                    <li><a href="#rs-blog">Blog</a> </li>
                                                    <li><a href="#rs-contact">Contact</a> </li>
                                                </ul> <!-- //.nav-menu -->
                                            </nav>
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                                <div class="col-cell">
                                    <div class="expand-btn-inner">
                                        <ul>
                                            <li class="toolbar-sl-share">
                                                <ul class="clearfix">
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </li>
                                            <li class="search-parent">
                                                <a class="hidden-xs rs-search" href="#">
                                                    <i class="fi fi-rr-search"></i>
                                                </a>
                                                <div class="sticky_form">
                                                    <form role="search" class="bs-search search-form" method="get">
                                                        <div class="search-wrap">
                                                            <label class="screen-reader-text active">
                                                                Search for: </label>
                                                            <input type="search" placeholder="Searching..." name="s"
                                                                class="search-input" value="">
                                                            <button type="submit" value="Search"><i
                                                                    class="fi fi-rr-search"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <li class="btn-quote"><a class="quote-button" href="#">Get A Quote<i
                                                        class="fi fi-rr-arrow-small-right"></i></a></li>
                                            <li class="humburger">
                                                <a id="nav-expander" class="nav-expander bar" href="#">
                                                    <div class="bar">
                                                        <span class="dot1"></span>
                                                        <span class="dot2"></span>
                                                        <span class="dot3"></span>
                                                        <span class="dot4"></span>
                                                        <span class="dot5"></span>
                                                        <span class="dot6"></span>
                                                        <span class="dot7"></span>
                                                        <span class="dot8"></span>
                                                        <span class="dot9"></span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End -->

                    <!-- Canvas Mobile Menu start -->
                    <nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
                        <div class="close-btn">
                            <a id="nav-close2" class="nav-close">
                                <div class="line">
                                    <span class="line1"></span>
                                    <span class="line2"></span>
                                </div>
                            </a>
                        </div>
                        <ul class="nav-menu">
                            <li class="menu-item-has-children current-menu-item">
                                <a href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="#">Multipages</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Main Home</a></li>
                                            <li class="active"><a href="index2.html">Construction 2</a></li>
                                            <li><a href="index3.html">Construction 3</a></li>
                                            <li><a href="index4.html">Roofing</a></li>
                                            <li><a href="index5.html">Industry</a></li>
                                            <li><a href="index6.html">Plumber</a></li>
                                            <li><a href="index7.html">Logistics</a></li>
                                            <li><a href="index8.html">Carpenter</a></li>
                                            <li><a href="index9.html">Architecture</a></li>
                                            <li><a href="index10.html">Energy</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Onepages</a>
                                        <ul class="sub-menu">
                                            <li><a href="onepage1.html">Onepage Main</a></li>
                                            <li><a href="onepage2.html">Onepage Construction 2</a></li>
                                            <li><a href="onepage3.html">Onepage Construction 3</a></li>
                                            <li><a href="onepage4.html">Onepage Roofing</a></li>
                                            <li><a href="onepage5.html">Onepage Industry</a></li>
                                            <li><a href="onepage6.html">Onepage Plumber</a></li>
                                            <li><a href="onepage7.html">Onepage Logistics</a></li>
                                            <li><a href="onepage8.html">Onepage Carpenter</a></li>
                                            <li><a href="onepage9.html">Onepage Architecture</a></li>
                                            <li><a href="onepage10.html">Onepage Energy</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="services.html">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services-style1.html">Services Style 1</a></li>
                                    <li><a href="services-style2.html">Services Style 2</a></li>
                                    <li class="last-item menu-item-has-children">
                                        <a href="#">Service Single</a>
                                        <ul class="sub-menu">
                                            <li><a href="general-construction.html">General Construction</a></li>
                                            <li><a href="property-maintenance.html">Property Maintenance</a></li>
                                            <li><a href="preconstruction.html">Preconstruction</a></li>
                                            <li><a href="virtual-design-build.html">Virtual Design & Build</a></li>
                                            <li><a href="project-managment.html">Project Managment</a></li>
                                            <li><a href="design-build.html">Design Build</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li class="last-item menu-item-has-children">
                                        <a href="#">Team</a>
                                        <ul class="sub-menu">
                                            <li><a href="team-style1.html">Team Style 1</a></li>
                                            <li><a href="team-style2.html">Team Style 2</a></li>
                                            <li><a href="team-style3.html">Team Style 3</a></li>
                                            <li><a href="team-style4.html">Team Style 4</a></li>
                                            <li><a href="team-style5.html">Team Style 5</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="last-item menu-item-has-children">
                                        <a href="#">Projects</a>
                                        <ul class="sub-menu">
                                            <li><a href="projects-style1.html">Projects Style 1</a></li>
                                            <li><a href="projects-style2.html">Projects Style 2</a></li>
                                            <li><a href="projects-style3.html">Projects Style 3</a></li>
                                            <li><a href="projects-style4.html">Projects Style 4</a></li>
                                            <li><a href="projects-style5.html">Projects Style 5</a></li>
                                            <li><a href="projects-filter-style1.html">Projects Filter Style 1</a></li>
                                            <li><a href="projects-filter-style2.html">Projects Filter Style 2</a></li>
                                            <li><a href="projects-single.html">Projects Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="last-item menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul> <!-- //.nav-menu -->
                        <!-- //.nav-menu -->

                        <!-- //.nav-menu -->
                        <div class="canvas-contact">
                            <div class="address-area">
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="fi fi-rr-map-marker-home"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Contact</h4>
                                        <em>31 New Street, NY, USA</em>
                                    </div>
                                </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="fi fi-rr-envelope-plus"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Email</h4>
                                        <em><a href="mailto:info@konstruk.com">Info@konstruk.com</a></em>
                                    </div>
                                </div>
                                <div class="address-list">
                                    <div class="info-icon">
                                        <i class="fi fi-rr-phone-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4 class="title">Free Call</h4>
                                        <em>+019988772</em>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Canvas Menu end -->
                </header>
                <!--Header End-->
            </div>
            <!--Full width header End-->