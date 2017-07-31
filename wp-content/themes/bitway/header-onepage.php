<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8) ]><!-->

<html <?php language_attributes(); ?>>

<!--<![endif]-->

<?php global $theme_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

	<!-- Page Title 
	================================================== -->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicons
	================================================== -->
    <?php if($theme_option['favicon']['url'] !=''){ ?>
    <link rel="icon" href="<?php echo esc_url($theme_option['favicon']['url']); ?>" type="image/x-icon">    
    <?php } ?>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if($theme_option['preload_opt'] != '0') { ?>
<div class="images-preloader">
    <div class="rectangle-bounce">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
</div>
<?php } ?>
<?php if($theme_option['version_type'] == 'boxed'){ echo '<div class="inspira-boxed-wrapper"><div class="inspira-boxed-container"><div class="inspira-boxed-inner">';} ?>
<div id="wrapper">
<!-- header begin -->
<header class="site-header">
    <div class="info">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 info-text">
                    <?php if($theme_option['contact']) { ?>
                    <strong><?php _e('Phone:','inspira') ?></strong>                     
                    <?php echo htmlspecialchars_decode($theme_option['contact']); ?>
                    <?php if($theme_option['contact'] && $theme_option['email']) { ?><span class="separator"></span><?php } ?>
                    <?php } ?>
                    <?php if($theme_option['email']) { ?>
                    <strong><?php _e('Email:','inspira') ?></strong>    
                    <a href="mailto:<?php echo esc_attr($theme_option['email']); ?>" target="_blank"><?php echo esc_attr($theme_option['email']); ?></a>
                    <?php } ?>
                </div>
                <div class="col-sm-6 text-right">
                    <div class="social-icons">
                        <?php if($theme_option['facebook']) { ?>
                        <a target="_blank" href="<?php echo esc_url($theme_option['facebook']); ?>" data-dummy="facebook" class="social-icon sb-icon-facebook"><i class="fa fa-facebook fa-lg"></i></a>
                        <?php } ?>

                        <?php if($theme_option['twitter']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['twitter']); ?>" data-dummy="twitter" class="social-icon sb-icon-twitter"><i class="fa fa-twitter fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['github']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['github']); ?>" data-dummy="github" class="social-icon sb-icon-github"><i class="fa fa-github fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['dribbble']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['dribbble']); ?>" data-dummy="dribbble" class="social-icon sb-icon-dribbble"><i class="fa fa-dribbble fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['linkedin']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['linkedin']); ?>" data-dummy="linkedin" class="social-icon sb-icon-linkedin"><i class="fa fa-linkedin fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['vimeo']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['vimeo']); ?>" data-dummy="vimeo" class="social-icon sb-icon-vimeo"><i class="fa fa-vimeo-square fa-lg"></i></a>

                        <?php } ?>
                        
                        <?php if($theme_option['instagram']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['instagram']); ?>" data-dummy="instagram" class="social-icon sb-icon-instagram"><i class="fa fa-instagram fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['youtube']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['youtube']); ?>" data-dummy="youtube" class="social-icon sb-icon-youtube"><i class="fa fa-youtube fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['skype']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['skype']); ?>" data-dummy="skype" class="social-icon sb-icon-skype"><i class="fa fa-skype fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['google']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['google']); ?>" data-dummy="google" class="social-icon sb-icon-google"><i class="fa fa-google-plus fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['behance']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['behance']); ?>" data-dummy="behance" class="social-icon sb-icon-behance"><i class="fa fa-behance fa-lg"></i></a>

                        <?php } ?>

                        <?php if($theme_option['rss']) { ?>

                        <a target="_blank" href="<?php echo esc_url($theme_option['rss']); ?>" data-dummy="rss" class="social-icon sb-icon-rss"><i class="fa fa-rss fa-lg"></i></a>

                        <?php } ?>                          

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="menu-top">

        <div class="container">

            <div id="logo">

                <div class="inner">

                    <a href="<?php echo esc_url( home_url() ); ?>">

                        <img src="<?php echo esc_url( $theme_option['logo']['url'] ); ?>" alt=""></a>

                </div>

            </div>



            <!-- mainmenu begin -->

                <?php

                    $onepagemenu = array(

                    'theme_location'  => 'onepage',

                    'menu'            => '',

                    'container'       => '',

                    'container_class' => '',

                    'container_id'    => '',

                    'menu_class'      => 'slimmenu',

                    'menu_id'         => 'mainmenu',

                    'echo'            => true,

                    'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',

                    'walker'          => new wp_bootstrap_navwalker(),

                    'before'          => '',

                    'after'           => '',

                    'link_before'     => '',

                    'link_after'      => '',

                    'items_wrap'      => '<ul data-breakpoint="800" id="%1$s" class="%2$s">%3$s</ul>',

                    'depth'           => 0,

                );

                if ( has_nav_menu( 'onepage' ) ) {

                    wp_nav_menu( $onepagemenu );

                }

            ?>

            <!-- mainmenu close -->



        </div>

    </div>

</header>

<!-- header close -->