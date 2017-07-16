<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootsnav.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/color.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/nivo-slider.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
          rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>

<!--  Top bar area Starts  -->

<section id="top-bar-area">
    <div class="container">
        <div class="top-bar-area-left">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-envelope-open"
                                   aria-hidden="true"></i><span><?php echo do_shortcode('[cms-block id="47" title="header_email"]') ?></span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone"
                                   aria-hidden="true"></i><span><?php echo do_shortcode('[cms-block id="46" title="header_ph"]') ?></span></a>
                </li>
            </ul>
        </div>
        <div class="top-bar-area-right">
            <ul>
                <li>
                    <?php if (is_user_logged_in()) {
                        global $current_user;
                        $current_user->user_login;
                        echo '<a href=""> Hi !&nbsp;' . $current_user->user_login . '</a>';
                    } else { ?>
                        <a href="<?php echo site_url(); ?>/register">Register for free</a>
                    <?php } ?>

                    <?php if (is_user_logged_in()) { ?>
                        <a href="<?php echo wp_logout_url(home_url()) ?>">Logout</i></a>
                    <?php } else { ?>
                        <a href="<?php echo site_url(); ?>/register">login</i></a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>

</section>

<!--  Top bar area ends  -->

<!--  Menu area Starts  -->

<section id="menu-area">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">
            <!-- Start Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <?php if (get_theme_mod('themeslug_logo')) : ?>
                    <a href='<?php echo esc_url(home_url('/')); ?>' class="navbar-brand"
                       title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>' rel='home'><img
                            src='<?php echo esc_url(get_theme_mod('themeslug_logo')); ?>'
                            class="img-responsive"
                            alt='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'></a>
                <?php else : ?>
                    <hgroup>
                        <h1 class='site-title'><a href='<?php echo esc_url(home_url('/')); ?>'
                                                  title='<?php echo esc_attr(get_bloginfo('name', 'display')); ?>'
                                                  rel='home'><?php bloginfo('name'); ?></a></h1>
                        <h2 class='site-description'><?php bloginfo('description'); ?></h2>
                    </hgroup>
                <?php endif; ?>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">


                <?php
                global $wpdb;
                wp_nav_menu(array(
                    'menu' => 'main',
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                    'walker' => new wp_bootstrap_navwalker()
                ));
                ?>

<!--                <ul class="nav navbar-nav navbar-right">-->
<!--                    <li><a href="--><?php //echo site_url(); ?><!--">Home</a></li>-->
<!--                    <li><a href="--><?php //echo site_url(); ?><!--/about-us">About Us</a></li>-->
<!---->
<!---->
<!--                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#">Gallery</a>-->
<!--                        <ul class="dropdown-menu animated">-->
<!--                            <li><a href="#">Title-one</a></li>-->
<!--                            <li><a href="#">Title-two</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li><a href="#">Demo DVD</a></li>-->
<!--                    <li><a href="#">Contact Us</a></li>-->
<!--                    <li><a href="#">Booking Enquiry</a></li>-->
<!--                </ul>-->
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->


</section>

<!--  Menu area ends  -->
