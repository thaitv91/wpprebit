<?php
/**
 * Template Name: Shop
 */
 global $theme_option;
 $page_detail = get_post_meta(get_the_ID(),'_cmb_page_sub', true);
get_header(); ?>

<!-- subheader begin -->
<div id="subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1><?php the_title(); ?></h1>
               
                <?php if($page_detail) { ?><span><?php echo htmlspecialchars_decode($page_detail); ?></span><?php } ?>
                <?php inspira_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<!-- subheader close -->
<div id="content" class="sbar">
    <div class="container">
        <div class="row">
        <?php if (have_posts()){ ?>
            
            <div class="col-md-9">   
                <?php while (have_posts()) : the_post()?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

            <div class="col-md-3">
                <?php get_sidebar('shop');?>
            </div>
            
            <?php }else {
                 _e('Page Canvas For Page Builder', 'inspira'); 
        }?>
        </div>
    </div>
</div>

<?php get_footer(); ?>