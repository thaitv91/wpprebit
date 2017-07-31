<?php 
global $theme_option;
$link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true);

?>	
	


<li class="animated" data-animation="fadeInLeft">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="date-box"><span class="day"><?php the_time('d'); ?></span> <span class="month"><?php the_time('M'); ?></span> </div>
  <div class="post-content">
      <div class="post-image">          
         <iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>
      </div>
      <div class="post-text post-video">
          <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php echo vgs_excerpt(); ?>
      </div>
  </div>
   <div class="post-meta">
    <span>
      <i class="fa fa-user"></i><?php _e('By:','vgs') ?><?php the_author_posts_link(); ?>
    </span> 
    <?php if(has_tag()) { ?>
    <span>
      <i class="fa fa-tag"></i><?php the_tags('', ', ' ); ?>
    </span> 
    <?php } ?>
    <span>
      <i class="fa fa-comment"></i><span class="comments_number"><?php comments_number( __('0 comment', 'vgs'), __('1 comment', 'vgs'), __('% comments', 'vgs') ); ?></span>
    </span>
    <span>
      <i class="fa fa-arrow-right"></i><a href="<?php the_permalink(); ?>"><?php echo esc_attr($theme_option['read_more']); ?></a>
    </span> 
  </div>
</div>  
</li>