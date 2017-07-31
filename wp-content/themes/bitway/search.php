
<?php
 global $theme_option;
get_header(); ?>
  

<!-- subheader begin -->
<div id="subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h1><?php printf( __( 'Search results for: %s', 'inspira' ), get_search_query() ); ?></h1> 
                <?php vgs_breadcrumbs(); ?>      
            </div>
        </div>
    </div>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if(have_posts()) : ?> 
                <ul class="blog-list">
                 <?php 
                  while (have_posts()) : the_post();
                  get_template_part( 'content', get_post_format() ) ;   // End the loop.
                  endwhile;
                   ?>      
                </ul>
                <?php else: ?>
                <h1><?php _e('Nothing Found Here!', 'inspira'); ?></h1>
                <?php endif; ?> 
                <div class="pagination text-center ">
                    <ul>
                        <?php echo vgs_pagination(); ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>
