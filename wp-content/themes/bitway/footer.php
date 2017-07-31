<?php
/**
 * The template for displaying the footer
 */
 global $theme_option; 
?>
 <footer class="footer_">
        <div class="row">
            <ul class="bread-list clearfix">
                <li>PreBit @ 2017</li>
                <li><a href="#" title="">TERMS</a></li>
                <li><a href="<?php echo esc_url( home_url( '' ) ); ?>/faq" title="">FAQ</a></li>
                <li><a href="<?php echo esc_url( home_url( '' ) ); ?>/contact-us" title="">CONTACT US</a></li>
                <li><a href="<?php echo esc_url( home_url( '' ) ); ?>/blog" title="">BLOG</a></li>
            </ul>
            <ul class="social-line clearfix">
                <li><a target="_blank" class="icon icon-rss-2" href="<?php echo esc_url($theme_option['rss']); ?>"></a></li>
                <li><a target="_blank" class="icon icon-gplus-3" href="<?php echo esc_url($theme_option['google']); ?>"></a></li>
                <li><a target="_blank" class="icon icon-facebook" href="<?php echo esc_url($theme_option['facebook']); ?>"></a></li>
                <li><a target="_blank" class="icon icon-twitter" href="<?php echo esc_url($theme_option['twitter']); ?>"></a></li>
                <li><a target="_blank" class="icon icon-instagram-2" href="<?php echo esc_url($theme_option['instagram']); ?>"></a></li>
                <li><a target="_blank" class="icon icon-linkedin" href="<?php echo esc_url($theme_option['linkedin']); ?>"></a></li>
            </ul>
        </div>
        <div class="row text-line">
            <div class="large-6 column">
                <p>
                    <?php echo htmlspecialchars_decode($theme_option['footer_text']); ?>
                </p>
            </div>
            <div class="large-6 column">
                <img src="<?php bloginfo('template_url')?>/images/i-ssl.png" alt=""/>
                <img src="<?php bloginfo('template_url')?>/images/i-ddos.png" alt=""/>
                <img src="<?php bloginfo('template_url')?>/images/i-hack.png" alt=""/>
            </div>
        </div>
    </footer>
   

<?php wp_footer(); ?>
</body>
</html>