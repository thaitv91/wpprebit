<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
global $theme_option; 
?>
<link rel='stylesheet' id='global-css'  href='<?php bloginfo('template_url')?>/css/global.min.css' type='text/css' media='all' />
<div class="page-wrap text-center">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php bloginfo('template_url')?>/images/logo.png" class="logo" alt="">
</a>

<div class="table">
	<div class="cell">
		<h1>404</h1>

		<p>Sorry, the page you are looking for does not exist. <br>
			Please continue to our <a href="<?php echo esc_url( home_url( '/' ) ); ?>">home page</a></p>
	</div>
</div>
	</div>
<style type="text/css" media="screen">
	.page-wrap {
    	background: url(<?php bloginfo('template_url')?>/images/error-page.jpg) no-repeat center/cover !important;
	}
	.table {
	width: 100%;
}

.table .cell {
	height: 100vh;
}



.footer_,
.page-wrap:after {
	min-height: 0 !important;
}

.logo {
	position: absolute;
	top: 60px;
	margin-left: -110px;
}

h1 {
	font-size: 1.875rem;
	line-height: 1;
	margin-top: 0;
	margin-bottom: 1.875rem;
	font-family: 'oswaldbold';
	color: #fff;
}

p {
	color: #fff;
	font-size: 1.25rem;
}

@media only screen and (min-width:40.0625em) {

h1 {
	font-size: 5rem;
}

}

@media only screen and (min-width:64.0625em) {

h1 {
	font-size: 9.375rem;
}

p {
	font-size: 3.125rem;
}

}


</style>
<?php wp_footer(); ?>
