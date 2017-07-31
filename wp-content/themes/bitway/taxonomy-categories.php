<?php

 global $theme_option;
get_header();
$page_detail = get_post_meta(get_the_ID(),'_cmb_page_sub', true);
 ?>
<!-- subheader begin -->
<div id="subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <h1><?php echo single_cat_title( '', false ); ?></h1>    
                <?php if($page_detail) { ?><span><?php echo htmlspecialchars_decode($page_detail); ?></span><?php } ?>
                <?php inspira_breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <ul class="filters">
                    
                    <?php 

                      $categories = get_terms('categories');

                       foreach( (array)$categories as $categorie){

                        $cat_name = $categorie->name;

                        $cat_slug = $categorie->slug;

                        $cat_count = $categorie->count;

                      ?>
                      <li><a href="<?php echo home_url(); ?>/categories/<?php echo htmlspecialchars_decode( $cat_slug ); ?>"><?php echo htmlspecialchars_decode( $cat_name ); ?></a></li>
                    <?php } ?>
                </ul>

            </div>
        </div>
        <div class="row">
            <div id="gallery" class="gallery">
            <?php 

              while (have_posts()) : the_post(); 

              $cates = get_the_terms(get_the_ID(),'categories');

              $cate_name ='';

              $cate_slug = '';

                  foreach((array)$cates as $cate){

                  if(count($cates)>0){

                    $cate_name .= $cate->name.'<span>, </span> ' ;

                    $cate_slug .= $cate->slug .' ';     

                  } 

              }

            ?>  
                <div class="col-md-4 col-sm-6 item <?php echo esc_attr($cate_slug); ?>">
                    <div class="picframe">
                        <span class="overlay">
                            <span class="info-area">
                                <a class="img-icon-url" href="<?php the_permalink(); ?>"></a>
                                <a class="img-icon-zoom" href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" data-type="prettyPhoto[gallery]" title=""></a>
                            </span>
                            <span class="pf_text">
                                <a href="<?php the_permalink(); ?>" class="link-ser"><span class="project-name"><?php the_title(); ?></span></a> 
                                <span><?php echo htmlspecialchars_decode( $cate_name ); ?></span>
                            </span>
                        </span>
                        <?php $params = array( 'width' => 800, 'height' => 500 );
                        $image = bfi_thumb( wp_get_attachment_url(get_post_thumbnail_id()), $params ); ?>
                        <img src="<?php echo esc_url($image);?>" alt="">
                        
                    </div>
                </div>
            <?php endwhile;?>
            </div>
            <div class="pagination text-center" style="text-align: left; padding-left: 15px;">
                <ul>
                    <?php echo inspira_pagination(); ?>
                </ul>
            </div>
        </div>        
    </div>
</div>
<!-- content close -->
<?php get_footer(); ?>