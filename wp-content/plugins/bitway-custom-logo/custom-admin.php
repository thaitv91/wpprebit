<?php
/**
 * Plugin Name: BitWay Customize Admin Screen
 * Plugin URI: https://www.pre-bit.org
 * Description: Custom Admin Logo
 * Version: 1.0
 * Author: Phuc Dev
 * Author URI: https://www.pre-bit.org
 */
function tp_custom_logo() { ?>
    <style type="text/css">
 
        body {
            background-image: url(<?php echo plugins_url('images/error-page.jpg', __FILE__); ?>) !important;
 
        }
        .wp-core-ui .button-primary {
            background: #31b36b !important;
            border: none !important;
            text-shadow: none !important;
            box-shadow: none !important;
 
        }
        .login form {
            box-shadow: none !important;
            padding: 26px 24px !important;
        }
        .login #backtoblog a, .login #nav a{
        	color: #fff !important;
        }
        #login h1 a {
            background-image: url(<?php echo plugins_url('images/logo.png', __FILE__); ?>);
            background-size: 280px 80px;
            width: 280px;
            height: 80px;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'tp_custom_logo');