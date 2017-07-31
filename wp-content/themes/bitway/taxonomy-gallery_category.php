<?php
global $theme_option;
get_header(); ?>
<link rel='stylesheet' id='faq-css'  href='<?php bloginfo('template_url')?>/css/lightbox.min.css' type='text/css' media='all' />
<section class="gallery-box top-page-box">
	<div class="table">
		<div class="cell">
			<h2 class="page-title-top text-center">
				GALLERY		
            </h2>
		</div>
	</div>
</section>
<main class="info-container gallery-page clearfix">
	<div class="row">
        <div class="large-3 column">
            <div class="top-sub-contact-right">
                <h3 class="large-title2">Gallery</h3>
                <?php $cterm = get_queried_object(('term'),object); ?>
                
                <?php
                    $taxonomies = array('gallery_category');
                    $args = array(
                        'orderby'           => 'name', 
                        'order'             => 'DESC',
                        'hide_empty'        => false, 
                        'hierarchical'      => true, 
                    ); 
                    $terms = get_terms($taxonomies, $args);
                    // $cterm->term_id = 7;
                ?>
                <ul class="list-unstyled">
                    <?php foreach ($terms as $term) { ?>
                        <li class="item-category">                            
                            <a class="<?php if ($cterm->term_id == $term->term_id) echo 'active'; ?>" href="<?php echo get_term_link($term); ?>" title="<?php echo $term->name; ?>">
                                <?php echo  $term->name; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--large-4-->
		<div class="large-9 column gallery-right">
            <h3><?php echo $cterm->name; ?></h3>
            <?php
                $args = array(
                            'post_type' => 'gallery',
                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'gallery_category',
                                                    'field' => 'slug',
                                                    'terms' => $cterm->name,
                                                ),
                                ),
                            'posts_per_page'=>10,
                            'paged'             => get_query_var('paged', get_query_var('page', 1)),
                        );
                $wp_query = new WP_Query($args);
                if ($wp_query->have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>
            <?php
                $posts1 = get_field('gallery_images');
                $posts2 = get_field('gallery_video');
            ?>
            <div class="large-4 column item-show-gallery">
                <?php if( $posts1 ): ?>           
                 <a class="images-thumbp" href="<?php the_field('gallery_images'); ?>" data-lightbox="example-2" data-title="<?php the_title(); ?>"><img class="<?php the_slug(); ?>" src="<?php the_field('gallery_images'); ?>" alt="image-1"/></a>                
                <?php else: ?>
                    <iframe width="100%" height="230" src="<?php the_field('gallery_video'); ?>" frameborder="0" allowfullscreen></iframe>
                <?php endif?>
            </div>
            <?php endwhile; ?>
            <?php else :
                echo __('<br>Data updating ...');
            endif;
            wp_reset_postdata();
            ?>
        </div><!--large-8-->
		
    </div><!--row-->
</main>			
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/lightbox-plus-jquery.min.js'></script>
<?php get_footer(); ?>