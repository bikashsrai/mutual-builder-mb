<?php 

get_header();?>
<!-- Slider Start -->
<div id="rs-slider" class="rs-slider rs-slider-style2 rs-slider-style3">
    <div class="bend niceties">
        <div id="nivoSlider" class="slides">
            <?php if ( have_rows( 'image_rep' ) ) : ?>
            <?php while ( have_rows( 'image_rep' ) ) :
		     the_row(); ?>

            <?php
		    $slider_image = get_sub_field( 'slider_image' );
		    if ( $slider_image ) : ?>
            <img src="<?php echo esc_url( $slider_image['url'] ); ?>"
                alt="<?php echo esc_attr( $slider_image['alt'] ); ?>" title="#slide-1" />
            <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <!-- Slide 1 -->
        <?php if ( have_rows( 'slider_info_rep' ) ) : ?>
        <?php while ( have_rows( 'slider_info_rep' ) ) :
		the_row(); ?>
        <div id="slide-1" class="slider-direction">
            <div class="container">
                <div class="content-part">

                    <?php if ( $sub_title = get_sub_field( 'sub_title' ) ) : ?>
                    <span class="sl-subtitle"> <?php echo esc_html( $sub_title ); ?></span>
                    <?php endif; ?>

                    <?php if ( $title_1 = get_sub_field( 'title_1' ) ) : ?>
                    <h1 class="sl-title"><?php echo esc_html( $title_1 ); ?></h1>
                    <?php endif; ?>

                    <?php if ( $title_2 = get_sub_field( 'title_2' ) ) : ?>
                    <h2 class="small-title2"><?php echo esc_html( $title_2 ); ?></h2>
                    <?php endif; ?>

                    <?php if ( $description = get_sub_field( 'description' ) ) : ?>
                    <p class="sl-desc"> <?php echo $description; ?> </p>
                    <?php endif; ?>

                    <?php
	            	$link = get_sub_field( 'link' );
		            if ( $link ) :
		        	$link_url = $link['url'];
			        $link_title = $link['title'];
			        $link_target = $link['target'] ? $link['target'] : '_self';
			        ?> <div class="slider-bottom">
                        <a class="readon more" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Slider End -->

<!-- About Start -->
<div id="rs-about" class="rs-about about-style1 bg5 pt-120 pb-120 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-part">
                    <?php
                    $image_about = get_field( 'image_about' );
                    if ( $image_about ) : ?>
                    <img src="<?php echo esc_url( $image_about['url'] ); ?>"
                        alt="<?php echo esc_attr( $image_about['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 pl-40 md-pl-15 pr-50 md-pr-15">
                <div class="sec-title">
                    <span class="sub-text sub-text2">
                        About Us
                    </span>
                    <h2 class="title pb-20">
                        <?php if ( $title_main = get_field( 'title_main' ) ) : ?>
                        <?php echo $title_main; ?>
                        <?php endif; ?>
                    </h2>
                    <p class="desc pb-20">
                        <?php if ( $description = get_field( 'description' ) ) : ?>
                        <?php echo $description; ?>
                        <?php endif; ?>
                    </p>
                    <h4 class="small-title pb-15">
                        <?php if ( $sub_title_about = get_field( 'sub_title_about' ) ) : ?>
                        <?php echo $sub_title_about; ?>
                        <?php endif; ?>
                    </h4>
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <ul class="check-lists2">
                                <?php if ( have_rows( 'check_list_1_rep' ) ) : ?>
                                <?php while ( have_rows( 'check_list_1_rep' ) ) :
		                            the_row(); ?>

                                <?php if ( $list = get_sub_field( 'list' ) ) : ?>
                                <li> <?php echo esc_html( $list ); ?></li>
                                <?php endif; ?>

                                <?php endwhile; ?>
                                <?php endif; ?>

                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <ul class="check-lists2">
                                <?php if ( have_rows( 'check_list_2_rep' ) ) : ?>
                                <?php while ( have_rows( 'check_list_2_rep' ) ) :
		                        the_row(); ?>

                                <?php if ( $list = get_sub_field( 'list' ) ) : ?>
                                <li> <?php echo esc_html( $list ); ?></li>
                                <?php endif; ?>

                                <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-part mt-28">
                        <?php
                            $link = get_field( 'about_link' );
                            if ( $link ) :
	                        $link_url = $link['url'];
	                            $link_title = $link['title'];
	                        $link_target = $link['target'] ? $link['target'] : '_self';
	                            ?>
                        <a class="readon more know" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Start -->
    <div id="rs-services" class="rs-services services-style1 pt-120 md-pt-70">
        <div class="container">
            <div class="sec-title text-center mb-50">
                <span class="sub-text sub-text2">
                    Latest Services
                </span>
                <h2 class="title">
                    <?php if ( $title = get_field( 'title' ) ) : ?>
                    <?php echo $title; ?>
                    <?php endif; ?>
                </h2>
            </div>
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
                data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
                data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2"
                data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3"
                data-md-device-nav="false" data-md-device-dots="true">


                <?php if ( have_rows( 'latest_services_rep' ) ) : ?>
                <?php while ( have_rows( 'latest_services_rep' ) ) :
		        the_row(); ?>

                <!-- start content -->
                <div class="services-slider">
                    <div class="services-img">
                        <a href="property-maintenance.html">
                            <?php
		        $image_icon = get_sub_field( 'image_icon' );
		        if ( $image_icon ) : ?>
                            <img src="<?php echo esc_url( $image_icon['url'] ); ?>"
                                alt="<?php echo esc_attr( $image_icon['alt'] ); ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="services-content">
                        <div class="services-titles">
                            <h4 class="title"><a href="property-maintenance.html">
                                    <?php if ( $title_service = get_sub_field( 'title_service' ) ) : ?>
                                    <?php echo esc_html( $title_service ); ?>
                                    <?php endif; ?></a>
                            </h4>
                        </div>
                        <p class="services-txt">
                            <?php if ( $description_services = get_sub_field( 'description_services' ) ) : ?>
                            <?php echo $description_services; ?>
                            <?php endif; ?>
                        </p>
                        <div class="services-btn btn-style2">
                            <?php
		                    $link = get_sub_field( 'link_file' );
		                    if ( $link ) :
			                $link_url = $link['url'];
			                $link_title = $link['title'];
			                $link_target = $link['target'] ? $link['target'] : '_self';
			                ?>
                            <a class="btn-text" href="<?php echo esc_url( $link_url ); ?>"
                                target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?><i
                                    class="fi fi-rr-arrow-small-right"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- end content  -->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Services Section End -->
</div>
<!-- About End -->

<!-- Counter Start -->
<div class="rs-counter counter-style1 counter-modify1 bg6 pt-120 pb-120 md-pt-70 md-pb-75">
    <div class="container">
        <div class="row y-middle">
            <div class="row">
                <!-- start loop -->
                <?php if ( have_rows( 'counter_repo' ) ) : ?>
                <?php while ( have_rows( 'counter_repo' ) ) :
		        the_row(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 md-mb-30">
                    <div class="rs-counter-list">
                        <div class="count-text">
                            <div class="count-number">
                                <span class="rs-count">
                                    <?php if ( $number_count = get_sub_field( 'number_count' ) ) : ?>
                                    <?php echo esc_html( $number_count ); ?>
                                    <?php endif; ?></span>
                                <span class="prefix">
                                    <?php if ( $prefix = get_sub_field( 'prefix' ) ) : ?>
                                    <?php echo esc_html( $prefix ); ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                            <span class="title"><?php if ( $title_count = get_sub_field( 'title_count' ) ) : ?>
                                <?php echo $title_count; ?>
                                <?php endif; ?></span>
                        </div>
                    </div>
                </div>
                <!-- end loop -->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->

<!-- Project Section Start -->
<div id="rs-project" class="rs-project project-style2">
    <div class="sec-title text-center mb-50">
        <span class="sub-text sub-text2">
            Latest Project
        </span>
        <h2 class="title">
            <?php if ( $title_project = get_field( 'title_project' ) ) : ?>
            <?php echo ( $title_project ); ?>
            <?php endif; ?>
        </h2>
    </div>
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
        data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false"
        data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false"
        data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false"
        data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="4"
        data-md-device-nav="false" data-md-device-dots="true">
        <?php if ( have_rows( 'project_rep' ) ) : ?>
        <?php while ( have_rows( 'project_rep' ) ) :
		the_row(); ?>
        <!-- start project -->
        <div class="project-item">
            <div class="project-img">
                <?php
		        $image_project = get_sub_field( 'image_project' );
		if ( $image_project ) : ?>
                <img src="<?php echo esc_url( $image_project['url'] ); ?>"
                    alt="<?php echo esc_attr( $image_project['alt'] ); ?>" />
                <?php endif; ?>

            </div>
            <div class="project-content">

                <div class="p-icon">
                    <?php
		        $link = get_sub_field( 'title_project' );
		            if ( $link ) :
		    	$link_url = $link['url'];
		    	$link_title = $link['title'];
		    	$link_target = $link['target'] ? $link['target'] : '_self';
		    	?><a href="projects-single.html"><i class="fi fi-rr-arrow-small-right"></i></a>
                    <?php endif; ?>
                </div>
                <div class="project-inner">
                    <span class="category">
                        <?php
		                $link = get_sub_field( 'title_project' );
		                if ( $link ) :
		            	$link_url = $link['url'];
		            	$link_title = $link['title'];
		            	$link_target = $link['target'] ? $link['target'] : '_self';
			            ?>
                        <a href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></span>
                    <?php endif; ?>
                    <?php
                      $link = get_sub_field( 'project_link_2' );
                     if ( $link ) :
	                 $link_url = $link['url'];
	                 $link_title = $link['title'];
	                 $link_target = $link['target'] ? $link['target'] : '_self';
	                ?>
                    <h3 class="title"> <a href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    </h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- end project -->
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<!-- Project Section End -->

<!-- Testimonial Section Start -->
<div id="rs-testimonial" class="rs-testimonial testimonial-style2 gray-bg2 pt-120 md-pt-80 md-pb-80 sm-pb-42">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 md-mb-50">
                <div class="testi-img">
                    <?php
                        $representive_image = get_field( 'representive_image' );
                        if ( $representive_image ) : ?>
                    <img src="<?php echo esc_url( $representive_image['url'] ); ?>"
                        alt="<?php echo esc_attr( $representive_image['alt'] ); ?>" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title mb-50">
                    <span class="sub-text sub-text2">
                        Testimonials
                    </span>
                    <h2 class="title">
                        Our clients reviews.
                    </h2>
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="30"
                    data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800"
                    data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false"
                    data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false"
                    data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false"
                    data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="1"
                    data-md-device-nav="false" data-md-device-dots="true">
                    <?php if ( have_rows( 'testimonial_rep' ) ) : ?>
                    <?php while ( have_rows( 'testimonial_rep' ) ) :
		            the_row(); ?>
                    <div class="testi-item">
                        <div class="item-content">
                            <span>
                                <?php
		                      $image_testi = get_sub_field( 'image_testi' );
		                     if ( $image_testi ) : ?>
                                <img src="<?php echo esc_url( $image_testi['url'] ); ?>"
                                    alt="<?php echo esc_attr( $image_testi['alt'] ); ?>" />
                                <?php endif; ?>
                            </span>
                            <p> <?php if ( $opinion_testi = get_sub_field( 'opinion_testi' ) ) : ?>
                                <?php echo $opinion_testi; ?>
                                <?php endif; ?></p>
                        </div>
                        <div class="testi-content">
                            <div class="image-wrap">

                                <?php
	            	             $image_two = get_sub_field( 'image_two' );
		                          if ( $image_two ) : ?>
                                <img src="<?php echo esc_url( $image_two['url'] ); ?>"
                                    alt="<?php echo esc_attr( $image_two['alt'] ); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="testi-information">
                                <div class="testi-name">
                                    <?php if ( $name_testi = get_sub_field( 'name_testi' ) ) : ?>
                                    <?php echo esc_html( $name_testi ); ?>
                                    <?php endif; ?>
                                </div>
                                <span class="testi-title">
                                    <?php if ( $post_testi = get_sub_field( 'post_testi' ) ) : ?>
                                    <?php echo esc_html( $post_testi ); ?>
                                    <?php endif; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Cta Start -->
<div class="rs-cta bg4 pt-116 pb-116 md-pt-76 md-pb-76">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-text-center md-mb-30">
                <div class="sec-title">
                    <span class="sub-text sub-text2 white-color">
                        Let’s Talk
                    </span>
                    <h2 class="title white-color">
                        Have any upcoming project?
                    </h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="btn-part text-right md-text-center">
                    <a class="readon more contact" href="contact.html">Request Services</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cta End -->

<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog blog-main-home blog-modify1 bg7 pt-120 pb-115 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-50">
            <span class="sub-text sub-text2">
                News & Blog
            </span>
            <h2 class="title">
                Our latest news post<br>
                and articles
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
            data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2"
            data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2"
            data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false"
            data-md-device-dots="false">
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/1.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">We really appreciate content about the
                            construction</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/2.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">Best practices construction law on
                            construction</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/3.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">Although many people may overlook the
                            need</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/4.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">Construction executive holds a very
                            special place</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/5.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">This is another massive sites with a
                            ton of information</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <div class="image-wrap">
                    <a href="blog-single.html"><img
                            src="<?php echo get_template_directory_uri().'/assets/images/blog/style1/6.jpg';?>"
                            alt=""></a>
                </div>
                <div class="blog-content">
                    <ul class="blog-meta">
                        <li class="date"><i class="fa fa-calendar-check-o"></i>26 April 2022</li>
                        <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                    </ul>
                    <h3 class="blog-title"><a href="blog-single.html">The construction business the owner
                            site is jam-packed</a></h3>
                    <p class="desc">The brand has responded by partnering with skincare experts on...</p>
                    <div class="blog-button blog-bnt2">
                        <a href="blog-single.html">
                            <span class="btn-text">
                                Read More
                            </span>
                            <i class="fi fi-rr-arrow-small-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Section End -->

<!-- Partner Start -->
<div class="rs-partner partner-main-home partner-modify1">
    <div class="container">
        <div class="partner-content-widget">
            <div class="rs-carousel owl-carousel" data-loop="true" data-items="6" data-margin="30" data-autoplay="true"
                data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false"
                data-nav="false" data-nav-speed="false" data-md-device="6" data-md-device-nav="false"
                data-md-device-dots="false" data-center-mode="false" data-ipad-device2="4" data-ipad-device-nav2="false"
                data-ipad-device-dots2="false" data-ipad-device="4" data-ipad-device-nav="false"
                data-ipad-device-dots="false" data-mobile-device="2" data-mobile-device-nav="false"
                data-mobile-device-dots="false">
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/1.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/1.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/2.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/2.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/3.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/3.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/4.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/4.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/5.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/5.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/6.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/6.png';?>"
                            title="" alt="">
                    </a>
                </div>
                <div class="logo-img">
                    <a href="https://devsdesign.net">
                        <img class="hovers-logos rs-grid-img"
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/7.png';?>"
                            title="" alt="">
                        <img class="mains-logos rs-grid-img "
                            src="<?php echo get_template_directory_uri().'/assets/images/partner/style1/7.png';?>"
                            title="" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner End -->

<!-- Contact Section Start -->
<div id="rs-contact" class="rs-contact contact-style1 bg3">
    <div class="row">
        <div class="col-lg-4 offset-2 con-left-6">
            <div class="contact-section">
                <div class="contact-wrap">
                    <div class="sec-title mb-45">
                        <span class="sub-text">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/shape-1.png';?>"
                                alt="Images">
                            Lets talk
                        </span>
                        <h2 class="title">
                            Have an upcoming project?
                        </h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" method="post" action="mailer.php">
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name"
                                        required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail"
                                        required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="website" name="website"
                                        placeholder="Your Website" required="">
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message"
                                        placeholder="Your Message Here" required=""></textarea>
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
            <div class="contact-box-item">
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/contact/style1/icons/1.png';?>"
                            alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">USA office</a></h4>
                        <p class="services-txt">55 Gerad Lane,<br> NY 11201, USA</p>
                    </div>
                </div>
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/contact/style1/icons/2.png';?>"
                            alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Email us</a></h4>
                        <p class="services-txt">
                            <a href="mailto:test@gamil.com">test@gamil.com</a><br>
                            <a href="mailto:test2@gamil.com">test2@gamil.com</a>
                        </p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/contact/style1/icons/3.png';?>"
                            alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Call us</a></h4>
                        <p class="services-txt">
                            <a href="tel:(+088)589-8745">(+088) 589-8745</a><br>
                            <a href="tel:(+088)222-9999">(+088) 222-9999</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 contact-right-img"></div>
    </div>
    <div class="contact-map">
        <?php if ( $google_map = get_field( 'google_map' ) ) : ?>
        <iframe src=" <?php echo $google_map; ?>"></iframe>
        <?php endif; ?>
    </div>
</div>
<!-- Contact Section End -->
</div>
<!-- Main content End -->

<!-- Footer Start -->
<?php get_footer();