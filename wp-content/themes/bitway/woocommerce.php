 <?php global $wp_query; ?>
<?php get_header(); ?>
	<?php if(is_single()){ ?>
		<!-- subheader begin -->
		<div id="subheader">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">                
		                <h1>
		                  <?php the_title(); ?> 		                  
		                </h1>               
		                <?php woocommerce_breadcrumb(); ?>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- subheader close -->
	<?php } ?>

	
	<?php if(is_single()){ ?>
	<section id="content">
	<div class="container">
		<div class="single-post-wrapper col-lg-9 col-md-9 col-sm-12 clearfix">
		<div class="single_shop_sidebar">
	<?php } ?>
	<?php 
	if ( is_singular( 'product' ) ) {
		 woocommerce_content();
		  }else{
		   //For ANY product archive.
		   //Product taxonomy, product search or /shop landing
			woocommerce_get_template( 'archive-product.php' );
		  }
	?>
	<?php if(is_single()){ ?>
		</div>
		</div>
		 <div id="sidebar" class="col-lg-3 col-md-3 col-sm-12 clearfix">
			<?php get_sidebar('shop'); ?>
		 </div>
		 </div><!-- end container -->
		</section><!-- end section-single -->
	<?php } ?>
		

<?php get_footer(); ?>