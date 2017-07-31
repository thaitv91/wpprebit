<?php
 global $theme_option;
 get_header(); ?>

	<!-- subheader begin -->
	<div id="subheader">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">                
	                <h1><?php the_title(); ?></h1>               
	                <?php inspira_breadcrumbs(); ?> 
	            </div>
	        </div>
	    </div>
	</div>
	<!-- subheader close -->
	<div id="content">
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
	
<?php get_footer(); ?>