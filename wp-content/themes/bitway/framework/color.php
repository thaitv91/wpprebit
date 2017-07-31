<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));
if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
global $theme_option; 
?>
/* Color Theme - Amethyst /Violet/

color - <?php echo esc_attr( $theme_option['main-color'] ); ?>

bg-footer - <?php echo esc_attr( $theme_option['background_footer'] ); ?>

bot-footer - <?php echo esc_attr( $theme_option['sub_footer'] ); ?>

/* 01 MAIN STYLES
****************************************************************************************************/

/**** Custom Background boxes ****/
.inspira-boxed-wrapper{background-image: url("<?php echo esc_url($theme_option['boxed_bg']['url']); ?>");}

/**** Custom color ****/
a, #mainmenu a:hover,
#mainmenu li:hover > ul,
.date-box .day,
.comments_number,
.slider_text h1,
.id-color,
.pricing-box h1,
.title span, .tbox b,
.feature-box:hover i.large,
.widget li a:hover,
.sidebar .widget > ul li a:hover,
.acc_head:hover,
.acc_active .acc_head,
.call-to-action h3 b,
.de_tab .de_nav li span.active,
.search-form:before, h3.single-title{
	color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;
}

i.large,
.feature-box-small-icon i,
#mainmenu li li a:hover,
.blog-list .date,
.date-box .month,
.blog-read .date,
.slider-info .text1,
#filters a.selected,
div.overlay, span.overlay,
#testimonial-full,
.widget_tag_cloud li a,
.btn-primary,
.bg-id-color, .rectangle-bounce div, #wp-calendar tbody td#today{
	background: <?php echo esc_attr( $theme_option['main-color'] ); ?>;
} 
.callbacks_nav,
.form-submit #submit
 {
  background-color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;
}
.filters a:hover,
.filters a.selected,
.search-form #s:focus,
#author:focus,
#email:focus,
#website:focus,
#comment:focus{
  border: 1px solid <?php echo esc_attr( $theme_option['main-color'] ); ?>;
}
.social-icon:hover{
  background-color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;
  color: #fff;
}
footer{
  background-color: <?php echo esc_attr( $theme_option['background_footer'] ); ?>;
}
.subfooter{
  background-color: <?php echo esc_attr( $theme_option['sub_footer'] ); ?>;
}
.images-preloader{
	background: <?php echo esc_attr( $theme_option['bg_color'] ); ?>;
}


/**** Custom Shop ****/
.woocommerce .woocommerce-breadcrumb a, .product_meta .posted_in a:hover {color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce .woocommerce-breadcrumb a:hover{color: #212121;}
.woocommerce #respond input#submit,.woocommerce a.button,
.woocommerce button.button,.woocommerce input.button{background-color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce p.stars a, .woocommerce ul.product_list_widget li span.amount,
.cart_totals.dotted_cart_total table td strong, .woocommerce div.product p.price,.woocommerce div.product span.price,
.woocommerce div.product p.price ins, .woocommerce div.product span.price ins, .woocommerce .star-rating span,
.woocommerce .star-rating:before, .woocommerce ul.cart_list li a:hover,.woocommerce ul.product_list_widget li a:hover{color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .added_to_cart.wc-forward, .woocommerce span.onsale, .woocommerce-page span.onsale,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range{background-color:<?php echo esc_attr( $theme_option['main-color'] ); ?>;}
p.product-title a:hover {color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;text-decoration: none;}
.woocommerce .quantity .plus:hover, .woocommerce .quantity .minus:hover, .woocommerce #content .quantity .plus:hover, 
.woocommerce #content .quantity .minus:hover, .woocommerce-page .quantity .plus:hover, 
.woocommerce-page .quantity .minus:hover, .woocommerce-page #content .quantity .plus:hover, 
.woocommerce-page #content .quantity .minus:hover {background: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{background: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce .woocommerce-message::before {color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}
.woocommerce .woocommerce-message {
  border-top-color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;
}
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a {color: <?php echo esc_attr( $theme_option['main-color'] ); ?>;}