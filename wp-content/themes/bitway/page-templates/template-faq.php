<?php
global $theme_option;
/*
 * Template Name: FAQ
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<link rel='stylesheet' id='faq-css'  href='<?php bloginfo('template_url')?>/css/faq.css' type='text/css' media='all' />
<section style="background: url('<?php the_field('background_header'); ?>') no-repeat center;" class="top-page-box">
	<div class="table">
		<div class="cell">
			<h2 class="page-title-top text-center">
				<?php the_field('title_header'); ?>		
            </h2>
		</div>
	</div>
</section>
<main class="info-container clearfix">
	<div class="row">
		<div class="large-8 column">
			<h3 class="large-title" id="faq">Frequently Asked Questions</h3>
			<ul class="accordion quetion-nav" data-accordion>
                <?php
                    $args = array(
                                'post_type' => 'faq',
                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => 'faq_category',
                                                        'field' => 'slug',
                                                        'terms' => 'faq',
                                                    ),
                                    ),
                                'posts_per_page'=>10,
                                'paged'             => get_query_var('paged', get_query_var('page', 1)),
                            );
                    $wp_query = new WP_Query($args);
                    if ($wp_query->have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>
                <li class="accordion-navigation">
                    <a href="#<?php the_slug(); ?>" class="nav-link-title"><?php the_title(); ?><span class="icon"></span></a>
                    <div id="<?php the_slug(); ?>" class="content">
                        <p><?php the_content(); ?></p>
                    </div>
                </li>
                <?php endwhile; ?>
                <?php else :
                    echo __('<br>Data updating ...');
                endif;
                wp_reset_postdata();
                ?>
            </ul>												
        </div><!--large-8-->
		<div class="large-4 column">
			<div class="searcher-top-holder">
				<form action="http://bitway.dev/" method="get" id="searchform" class="searchform">
                    <input type="text" class="top-searcher" placeholder="Search" value="" name="s" id="s" />
                    <button class="search-button" type="submit"></button>
                </form>				
            </div>
			<div class="category--box">
				<header>
                    <h5 class="title_">FAQ Categories</h5>
				</header>
				<section>
					<ul class="unstyled">
                        <?php
                            $taxonomies = array('faq_category');
                            $args = array(
                                'orderby'           => 'name', 
                                'order'             => 'DESC',
                                'hide_empty'        => false, 
                                'hierarchical'      => true, 
                            ); 
                            $terms = get_terms($taxonomies, $args);
                        ?>
                        <?php foreach ($terms as $term) { ?>
                            <li>
                                <a class="<?php if ($cterm->term_id == $term->term_id) echo 'active'; ?>" href="#<?php echo $term->slug; ?>" title="<?php echo $term->name; ?>">
                                    <?php echo  $term->name; ?>
                                </a>
                            </li>
                        <?php } ?>
					</ul>
				</section>
			</div>
			<div class="subscriber--box text-center">
				<img src="<?php bloginfo('template_url')?>/images/subscriber-icon.png" alt=""/>
				<p class="par_">Subscribe to our mailing list</p>
				<a href="#" data-reveal-id="subscribe-box" class="button round tiny">Subscribe</a>
			</div>
        </div><!--large-4-->
    </div><!--row-->
</main>			
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/faq.js'></script>
<?php get_footer(); ?>