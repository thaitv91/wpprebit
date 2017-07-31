<?php 
global $theme_option;
?>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <div class="blog-post_">
      <header class="post-header">
          <a class="post-title large-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <p>
                  <span class="col wt_name"><time><?php echo get_the_time(); ?></time>, <?php echo get_the_date(); ?>, by <a href="#" title="<?php the_author(); ?>" rel="author"><?php the_author(); ?></a></span>
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
      <p class="par_">
          <?php
              echo wp_trim_words( get_the_content(), 40, '...' );
          ?>
      </p>
      <footer class="post-footer">
          <a href="<?php the_permalink(); ?>" class="more_link">Read more</a>                        
      </footer>
  </div><!--blog-post-->
</div>  
