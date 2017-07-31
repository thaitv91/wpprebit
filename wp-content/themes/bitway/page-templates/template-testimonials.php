<?php
global $theme_option;
/*
 * Template Name: TESTIMONIALS
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<link rel='stylesheet' id='about-css'  href='<?php bloginfo('template_url')?>/css/about.css' type='text/css' media='all' />
<section style="background: url('<?php the_field('background_header'); ?>') no-repeat center;" class="cell-block section_s_01">
	<div class="table">
		<div class="cell">
			<h2 class="serv-page-title text-center">
				<?php the_field('title_header'); ?>					
			</h2>
		</div>
	</div>
</section>
<section class="cell-block section_s_02 testimonial-pager">
	<div class="row">
		<?php
	        $args = array(

	                    'post_type'         => 'testimonial',
	                    'orderby'           => 'date',
	                    'order'             => 'DESC',
	                    'paged'             => get_query_var( 'paged' ),
	                );    

	        $wp_query = new WP_Query($args);
        ?>
        <?php if ( $wp_query->have_posts() ) while ( $wp_query->have_posts() ) :$wp_query->the_post(); ?>
        <div class="large-12 column item-testi">
        	<div class="row">
        		<div class="bor-tes">
					<div class="large-4 column item-testi-left">
						<?php the_content(); ?>					
					</div>
					<div class="large-8 column item-testi-right">
						<?php the_field('testi_field'); ?>
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
			</div>
        </div>
        <hr>
        <?php endwhile; ?> 
	</div>
</section>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/about.js'></script>
<?php get_footer(); ?>