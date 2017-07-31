
<?php
 global $theme_option;
 
get_header(); ?>
  

<!-- subheader begin -->
<div id="subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h1><?php printf( __( 'All posts by: %s', 'vgs' ), get_the_author() ); ?></h1>               
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
                <ul class="blog-list">
                 <?php 
                  while (have_posts()) : the_post();
                  get_template_part( 'content', get_post_format() ) ;   // End the loop.
                  endwhile;
                   ?>      
                </ul>

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
