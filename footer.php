<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mutalbuilders
 */

?>

<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer footer-main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 pr-20 md-pr-15 md-mb-20">
                    <div class="footer-logo mb-51 md-mb-30">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri().'/assets/images/logo-white.png';?>" alt=""></a>
                    </div>
                    <div class="textwidget">
                        <p class="pb-20">Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor
                            in cididunt ut labore.</p>
                        <p class="pb-25"><strong>Opening Hours</strong> : Monday – Sat: 9am to 6pm</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="fi fi-rr-map-marker-home"></i>
                            <div class="desc">
                                Ta-134/A, Gulshan Badda Link<br>
                                Rd, Dhaka
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)15569569365">(+880)155 69569 365</a><br>
                                <a href="tel:(+880)15569569366">(+880)155 69569 366</a>
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <div class="desc">
                                <a href="mailto:support@devsdesign.com">support@devsdesign.com</a><br>
                                <a href="mailto:infoname@gmail.com">infoname@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 md-mb-10">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="general-construction.html">General Construction</a></li>
                        <li><a href="property-maintenance.html">Property Maintenance</a></li>
                        <li><a href="project-managment.html">Project Managment</a></li>
                        <li><a href="virtual-design-build.html">Virtual Design & Build</a></li>
                        <li><a href="preconstruction.html">Preconstruction</a></li>
                        <li><a href="design-build.html">Design Build</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="widget-desc">Tetur adipiscing elit, sed do eiusmod tempor in cididunt ut labore.</p>
                    <p>
                        <input type="email" name="email" placeholder="Your Email Address" required="">
                        <input type="submit" value="Subscribe Now">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <ul class="copy-right-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center">
                        <p>© 2022 Konstruk. Designed By <a href="https://devsdesign.net" target="blank">Devsdesign</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->


<?php wp_footer(); ?>

</body>

</html>