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
    <link rel='stylesheet' id='global-css'  href='<?php bloginfo('template_url')?>/css/global.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='home-css'  href='<?php bloginfo('template_url')?>/css/home.css' type='text/css' media='all' />
	<!-- Favicons
	================================================== -->
	<?php if($theme_option['favicon']['url'] !=''){ ?>
    <link rel="icon" href="<?php echo esc_url($theme_option['favicon']['url']); ?>" type="image/x-icon">    
    <?php } ?>
	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php if($theme_option['preload_opt'] != '0') { ?>
    <div class="preloader-wrap">
        <div class="grabber">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <div class="line4"></div>
        </div>
    </div>
    <?php } ?>
    <div class="page-wrap">
        <!-- Form Login Popup -->
        <div id="sign-in-modal" class="reveal-modal sign_in_" data-reveal aria-hidden="true" role="dialog">
            <a class="close-reveal-modal" aria-label="Close"><img src="<?php bloginfo('template_url')?>/images/close-cion.png" alt=""/></a>
            <h4 class="modal-header text-center">Login</h4>
            <p class="blue-text text-center sub-header">You are now being redirected to your Account Access Online held at our Broker Dealer, TradePMR.</p>
            <p class="text-grey text-center">If you have any questions or problems accessing your account,</p>
            <p class="text-grey text-center">call our Account Access Online Support Representative</p>
            <p class="text-grey text-center">( 24 hour - 7 days ) at:</p>
            <p class="blue-text phone-text text-center">877 488 3748</p>
            <a class="button round" href="#" target="_blank">Take Me To Login</a>
        </div>
        <!-- Form Login Popup -->        
        <header class="header_ on--top sticky">
            <div class="row">
                <nav class="top-bar" data-topbar role="navigation">
                    <ul class="title-area">
                        <li class="name">
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <img src="<?php echo esc_url($theme_option['logo']['url']); ?>" alt="">
                            </a>
                        </li>
                        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
                    </ul>        
                    <section class="top-bar-section clearfix">
                        <?php
                            $primarymenu = array(
                            'theme_location'  => 'primary',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'right bot-nav',
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
                            if ( has_nav_menu( 'primary' ) ) {
                                wp_nav_menu( $primarymenu );
                            }
                        ?>

                        <!-- Left Nav Section -->
                        <ul class="right top-nav">
                            <li class="active"><a href="http://system.pre-bit.org/login">login</a></li>
                            <li><a href="http://system.pre-bit.org/register" id="sign-up-button">sign up</a></li>
                        </ul>
                    </section>
                </nav>
            </div>
        </header>
