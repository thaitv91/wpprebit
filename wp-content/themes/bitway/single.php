<?php
 global $theme_option;
get_header();
?>
<link rel='stylesheet' id='faq-css'  href='<?php bloginfo('template_url')?>/css/blog.css' type='text/css' media='all' />
<section class="gallery-box top-page-box">
    <div class="table">
        <div class="cell">
            <h2 class="page-title-top text-center">
                BLOG
            </h2>
        </div>
    </div>
</section>
<main class="blog-container clearfix">
    <div class="row">
        <div class="row">
            <div class="large-8 column">
                <div class="blog-post_">
                    <header class="post-header">
                    <a class="post-title large-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <p>
                            <span class="col wt_name"><time><?php echo get_the_time(); ?></time>, <?php echo get_the_date(); ?>, by <a href="" title="Posts by Peter J. Creedon" rel="author">Peter J. Creedon</a></span>
                            <span class="col">
                                Categories:
                                <?php 
                                    $category = get_the_category(); 
                                    if($category[0]){
                                    echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
                                    }
                                ?>
                            </span>
                        </p>
                    </header>
                    <?php the_post_thumbnail('acs img-responsive post_image'); ?>
                    <?php the_content(); ?>
                </div>
            </div><!--large-8-->
            <div class="large-4 column">
                <div class="category--box">
                    <div class="conteinor">
                        <header>
                            <h5 class="title_">Latest Posts</h5>
                        </header>
                        <section>
                            <ul class="unstyled">
                                <?php
                                    $args = array( 
                                        'posts_per_page' => 10, 
                                        'category_name' => 'blog',
                                    );
                                    $myposts = get_posts( $args );
                                    foreach ( $myposts as $key => $post ) : setup_postdata( $post ); 
                                ?>
                                <li class="post-line">
                                    <span class="time"><time><?php echo get_the_time(); ?></time>, <?php echo get_the_date(); ?></span>
                                    <a href="<?php the_permalink(); ?>" class="post-name"><?php the_title(); ?></a>
                                </li>
                                <?php endforeach; 
                                wp_reset_postdata();?>                              
                            </ul>
                        </section>
                    </div>
                    <div class="conteinor">
                        <header>
                            <h5 class="title_">Tags</h5>
                        </header>
                        <section>
                            <ul class="unstyled tags-list">
                                <?php
                                    $tags = get_tags( array('name_like' => "a", 'order' => 'ASC') );
                                    foreach ( (array) $tags as $tag ) {
                                    echo '<li><a rel="tag">' . $tag->name . ' </a></li>';
                                    }
                                ?>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="subscriber--box text-center">
                    <img src="<?php bloginfo('template_url')?>/images/subscriber-icon.png" alt=""/>
                    <p class="par_">Subscribe to our mailing list</p>
                    <a href="#" data-reveal-id="subscribe-box" class="button round tiny">Subscribe</a>
                </div>                    
            </div><!--large-4-->
        </div>
    </div> 
</main>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<?php get_footer(); ?>



  