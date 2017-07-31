<?php
global $theme_option;
/*
 * Template Name: CONTACT
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<link rel='stylesheet' id='contact-css'  href='<?php bloginfo('template_url')?>/css/contact.css' type='text/css' media='all' />
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
			<div class="contact--box">
				<div class="row">
					<div class="large-8 medium-6 column">
						<h3 class="large-title">Contact Information</h3>
						
						<p class="text-grey par_">If you have any questions regarding PreBit, please use the contact form below. A PreBit representative will get back to you as soon as possible.</p>
<p class="text-grey par_">You can register to become PreBit Representative in your region by sending an email to support@pre-bit.org. As a Representative, you will earn 10% - 20.5% from your referrals immediately. You don't even need an active deposit to receive affiliate commission. However, the Representative program is not open to everybody. For you to become a Representative of PreBit, you need to have the ability to promote and support our project in your region through various means, like online/offline presentations, meetings with clients, a personal blog, etc. However, note that we never support SPAM nor any form of illegal promotion of our project.</p>
						<ul class="unstyled basic-list">
							<li class="text-grey"><img src="<?php bloginfo('template_url')?>/images/c-email.png" alt=""/><a href="mailto:support@bitway.org">support@pre-bit.org</a></li>
							<li class="text-grey"><img src="<?php bloginfo('template_url')?>/images/c-address.png" alt=""/>5 Matthew, Liverpool, M1 6BB, UK </li>
						</ul>
						<div class="msg-form_ bb_">
							<div class="form-item-holder">
								 <?php 
									$page_data = get_page( 16 );
									echo apply_filters('the_content', $page_data->post_content);
								?>
							</div>
						</div>
					</div><!--large-8-->
					<div class="large-4 medium-6 column">
						<div class="top-sub-contact-right">
							<h3>Get in touch</h3>
							<p>We’re here and ready to help 24×7. There are lots of ways that you can get in touch, so choose what suits you.</p>
							
						</div>
						<div class="subscriber--box text-center">
							<img src="<?php bloginfo('template_url')?>/images/subscriber-icon.png" alt=""/>
							<p class="par_">Subscribe to our mailing list</p>
							<a href="#" class="button round tiny" data-reveal-id="subscribe-box">Subscribe</a>
						</div>							
					</div><!--large-4-->
				</div>
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