<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>ANTHIA Accounting</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Certified Public Accountant and Certified Intuit Quickbooks ProAdvisor for Not for Profit and for Small Business">
    <meta name="keywords" content="">
    <meta name="author" content="taptip">
    <!-- social media meta tags -->
    <?php global $wp; $current_url = home_url(add_query_arg(array(),$wp->request)); ?>
    <meta property="fb:app_id"        content="1104404903019145"/>
    <meta property="og:url"           content="<?php echo esc_url( $current_url );?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="ANTHIA Accounting" />
    <meta property="og:description"   content="Certified Public Accountant and Certified Intuit Quickbooks ProAdvisor for Not for Profit and for Small Business" />
    <meta property="og:image"         content="http://anthia.aberia.us/wp-content/uploads/2017/03/sitepreview.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <?php if ( is_front_page() ) { ?>
        <nav class="navbar navbar-default navbar-fixed-top">
        <?php } else { ?>
        <nav class="navbar navbar-default navbar-static-top top-nav-collapse">
        <?php } ?>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo/aalogo1-white.png" height="66px" width="66px" class="img-responsive" alt="logo" ></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul id="header-links" class="nav navbar-nav">
                            <?php if( is_front_page() ) { ?>
                            <li class="active"><a href="#owl-hero" class="page-scroll">Home</a></li>
                            <li><a href="#what-i-do" class="page-scroll">What I Do</a></li>
                            <li><a href="#services" class="page-scroll">Services</a></li>
                            <li><a href="#location" class="page-scroll">Location</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/about' ) );?>" >About</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact-us' ) );?>" >Contact Us</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/blog' ) );?>" >Blog</a></li>
                            <?php } else { ?>
                            <li><a href="<?php echo esc_url( home_url( ) );?>">Home</a></li>
                            <li><a href="<?php echo esc_url( home_url( ) );?>#what-i-do">What I Do</a></li>
                            <li><a href="<?php echo esc_url( home_url( ) );?>#services">Services</a></li>
                            <li><a href="<?php echo esc_url( home_url( ) );?>#location">Location</a></li>
                                <?php if( is_page('about') ) { ?>
                            <li class="active"><a href="#">About</a></li>
                                <?php } else { ?>
                            <li><a href="<?php echo  esc_url( home_url( '/about' ) );?>">About</a></li>
                                <?php } ?>
                                <?php if( is_page('contact-us') ) { ?>
                            <li class="active"><a href="#">Contact Us</a></li>
                                <?php } else { ?>
                            <li><a href="<?php echo  esc_url( home_url( '/contact-us' ) );?>">Contact Us</a></li>
                                <?php } ?>
                                <?php if( is_page('blog') ) { ?>
                            <li class="active"><a href="#">Blog</a></li>
                                <?php } else { ?>
                            <li><a href="<?php echo  esc_url( home_url( '/blog' ) );?>">Blog</a></li>
                                <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="social-media hidden-md hidden-sm hidden-xs">
                        <ul class="nav navbar-nav">
                            <li><a href="#" class="share-fb"><i class="fa fa-facebook "></i></a></li>
                            <li><a class="share-twitter" target=_blank href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode($current_url); ?>&text=Check This&via=AAAcounting" ><i class="fa fa-twitter"></i></a></li>
                            <li><a class="share-google" href="https://plus.google.com/share?url=<?php echo rawurlencode($current_url); ?>"><i class="fa fa-google-plus-square "></i></a></li>
                            <li><a class="share-linkedin" href="https://www.linkedin.com/cws/share?url=<?php echo rawurlencode($current_url); ?>"><i class="fa fa-linkedin "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php if( is_front_page() ) { ?>
        <div id="owl-hero" class="owl-carousel owl-theme">
            <div class="item" 
                style="
                background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php bloginfo('template_directory'); ?>/img/sliders/accounting.jpg');
                /*background-image: url(img/sliders/accounting.jpg);
                opacity: 0.8;*/
                "

                >
                <div class="caption">
                    <h1><span>ANTHIA</span> <diffspacing style="letter-spacing: 0.09em">Accounting</diffspacing></h1>
                    <h6>Certified Public Accountant and Certified Intuit Quickbooks ProAdvisor for Not for Profit and for Small Business</h6>
                    <h1></h1>
                    <a class="btn btn-transparent page-scroll" href="#what-i-do">Learn More</a>
                    <!-- <a class="btn btn-light" href="#">Learn More</a> -->
                </div>
            </div>
        </div>
        <?php } ?>
           <!--  <div class="item" style="background-image: url(img/sliders/Slide2.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Creative <span>Design</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div>
            <div class="item" style="background-image: url(img/sliders/Slide3.jpg)">
                <div class="caption">
                    <h6>Branding / Design / Creativty</h6>
                    <h1>Clean <span>Code</span></h1>
                    <a class="btn btn-transparent" href="#">Learn More</a><a class="btn btn-light" href="#">Buy Now</a>
                </div>
            </div> -->
    </section>