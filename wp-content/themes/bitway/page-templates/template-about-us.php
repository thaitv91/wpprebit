<?php
global $theme_option;
/*
 * Template Name: ABOUT US
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<link rel='stylesheet' id='about-css'  href='<?php bloginfo('template_url')?>/css/about.css' type='text/css' media='all' />
<section style="background: url('<?php the_field('background_header'); ?>') no-repeat center;" class="cell-block section_s_01">
	<div class="table">
		<div class="cell">
			<h2 class="serv-page-title text-center">
				<?php the_field('title_header'); ?>					
			</h2>
		</div>
	</div>
</section>
<section class="cell-block section_s_02">
	<div class="row">
		<h3 class="large-title text-center">About PreBit</h3>
		<div class="large-4 large-push-8 column">
			<div class="icon-holder on-right ">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="190px" height="142px" viewBox="0 0 190 142" enable-background="new 0 0 190 142" xml:space="preserve">
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M77.458,28.047L53.834,42.116L41.38,64.346
						c0,0,12.537,10.821,19.203-2.013l5.35-9.594c0,0,3.9,8.761,17.233,3.927l18.75,18.555"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M63.58,114.417c2.703,2.634,7.029,2.579,9.663-0.124
						c2.634-2.703,2.609-7.115-0.093-9.749l0,0c2.702,2.634,7.029,2.579,9.663-0.124c2.634-2.703,2.579-7.029-0.124-9.663l0.061,0.07
						c2.702,2.634,7.029,2.579,9.663-0.124c2.634-2.703,2.609-7.115-0.093-9.749l0,0c2.702,2.634,7.029,2.579,9.663-0.124
						c2.634-2.703,2.579-7.029-0.124-9.663"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M42.507,71.472c2.667,2.137,2.79,6.413,0.276,9.55
						l-3.01,3.755c-2.514,3.137-6.714,3.948-9.381,1.811l0,0c-2.667-2.137-2.79-6.413-0.276-9.55l3.01-3.755
						C35.64,70.145,39.84,69.335,42.507,71.472L42.507,71.472z"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M54.281,77.258
						c2.667,2.137,2.491,6.785-0.391,10.382l-3.45,4.305c-2.882,3.596-7.381,4.779-10.047,2.642l0,0
						c-2.667-2.137-2.491-6.785,0.391-10.382l3.45-4.305C47.116,76.304,51.614,75.121,54.281,77.258L54.281,77.258z"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M60.937,89.182c2.667,2.137,2.886,6.293,0.49,9.283
						l-2.868,3.579c-2.396,2.99-6.5,3.681-9.167,1.544l0,0c-2.667-2.137-2.886-6.293-0.49-9.283l2.868-3.579
						C54.167,87.736,58.271,87.045,60.937,89.182L60.937,89.182z"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M63.58,115.396l3.299-4.245
						c2.214-2.762,1.892-6.697-0.719-8.79l0,0c-2.611-2.093-6.522-1.55-8.736,1.212l-2.65,3.306L63.58,115.396z"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M30.375,76.194c0,0-14.938-8.934-2.719-21.272
						l1.087-1.095l25.891-26.075L31,4.333l-19.625,19.75c0,0-22.155,23.258,2.828,45.138L20.917,62l6.74-7.078"/>
					<circle fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" cx="14.203" cy="54.263" r="5.16"/>
					<circle fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" cx="117.09" cy="54.263" r="5.16"/>
					<line fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" x1="53.529" y1="28.865" x2="64.789" y2="35.592"/>
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M101.575,76.194c0,0,14.938-8.934,2.719-21.272
						l-1.087-1.095L77.316,27.752L100.95,4.333l19.625,19.75c0,0,22.155,23.258-2.828,45.138L111.033,62l-6.74-7.078"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M187.167,98.903v30.43c0,5.523-4.477,10-10,10
						H121.93c-5.523,0-10-4.477-10-10v-30.43v-10h75.237V98.903z"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M142.75,115.333h-20.82c-5.523,0-10-4.477-10-10"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M187.167,105.333c0,5.523-4.477,10-10,10h-21"/>
					<rect x="143" y="112.167" fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" width="13.167" height="7"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M129.565,88.833v-4.612c0-5.523,4.477-10,10-10
						h20.769c5.523,0,10,4.477,10,10v4.612"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M134.984,88.903v-3.095
						c0-3.133,2.54-5.673,5.673-5.673h17.565c3.133,0,5.673,2.54,5.673,5.673v3.09"/>
				</svg>					
			</div>
		</div>
		<div class="large-8 large-pull-4 column">
			<h5 class="topic-header">Who We Are</h5>
			<p class="text_">PreBit is a community of likeminded individuals who take control of their financial freedom and help others do the same. At PreBit, we aim to take traditional principles of wealth and turn them upside down. Members don’t have to rely on conventional banks and corporations that don’t exist for members’ benefit. Instead, participants come together, pooling funds for the increased wealth of all.
</p>
		</div>
	</div><!--row-->
</section>
<section class="cell-block section_s_03">
	<div class="row">
		<div class="large-4 column">
			<div class="icon-holder on-left">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="135px" height="150px" viewBox="0 0 135 150" enable-background="new 0 0 135 150" xml:space="preserve">
					<path fill="none" stroke="#4FBDCB" stroke-width="2" stroke-miterlimit="10" d="M118.538,48.857l-0.082,31.893l-8.602,23.708
						c0,0-0.731,2.089,1.113,2.917s3.059-0.131,3.43-0.974l3.859-9.023v9.393c0,0,0.005,0.042,0.015,0.101
						c0.001,0.155,0.075,1.504,2.383,1.524c0.023,0,0.038-0.005,0.061-0.005c0.022,0,0.038,0.005,0.061,0.005
						c2.309-0.02,2.382-1.369,2.383-1.524c0.01-0.06,0.015-0.101,0.015-0.101v-9.393l3.859,9.023c0.371,0.844,1.586,1.802,3.43,0.974
						s1.113-2.917,1.113-2.917l-8.367-23.875l-0.312-34.667"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M96.647,85.104c0,0-11.622,27.864-32.622,28.531l0,0
						c-21-0.667-32-28.167-32-28.167c22.542-13.542,21.272-22.981,21.272-22.981s2.346,13.954,41.096,10.829"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M51,117.667H30.75
						c0,0-3.5-39.097,6.25-46.736c0,0,28.403-23.156,55.417-0.089c6.333,5.408,5.972,46.825,5.972,46.825h-20.25"/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M36.032,71.842
						c0,0-0.99-17.182,10.177-22.182c0,0,17.887-9.718,36.791-0.244c10.464,5.245,9.647,22.117,9.647,22.117"/>
					<polyline fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="36.032,71.842
						3.996,46.284 64.336,2.667 123.167,45.309 93.667,70.931 "/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M51.483,110v11.716
						c0,0-30.269,5.713-37.001,24.606h101.001c-6.732-18.894-37.001-24.606-37.001-24.606l-0.016-12.881"/>
					<line fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="40.25" y1="125.5" x2="56.667" y2="146.322"/>
					<line fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="89.667" y1="125.5" x2="73.25" y2="146.322"/>
					<line fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="24.38" y1="133.477" x2="34.75" y2="146.322"/>
					<line fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="104.75" y1="133.477" x2="94.38" y2="146.322"/>
					<line fill="none" stroke="#F85F82" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="52.91" y1="141.558" x2="76.583" y2="141.558"/>
				</svg>
			</div>
		</div>
		<div class="large-8 column">
			<h5 class="topic-header text-left">Our Principles</h5>
			<p class="text_ text-left">Our guiding principles have led us to create a community that is reliable and long-lasting. We seek out members who nod in agreement as they read these beliefs:</br>
We believe that it should be easy to share wealth, give help, and get help from your community. We believe that those who give to others can benefit financially and personally. A strong community like PreBit will make it easier for members to provide and receive help.</p>
		</div>
	</div><!--row-->
</section>
<section class="cell-block section_s_04">
	<div class="row">
		<div class="large-4 large-push-8 column">
			<div class="icon-holder on-right ">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="138px" height="160px" viewBox="0 0 138 160" enable-background="new 0 0 138 160" xml:space="preserve">
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M50.249,97.489"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M28.645,117.943v38.007
						c0,0.729-0.591,1.32-1.32,1.32h-14.08c-0.729,0-1.32-0.591-1.32-1.32v-37.896"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="19.995" y1="157.27" x2="19.995" y2="122.33"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M20.285,91.936"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M20.285,95.181"/>
					<circle fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="20.342" cy="79.75" r="9.417"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.5,125.672V97.167
						c0-1.105,0.895-2,2-2h26.833c1.105,0,2,0.895,2,2v28.469"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="20.342" y1="95.181" x2="20.342" y2="99.181"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="20.285" y1="102.5" x2="20.285" y2="113.439"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M77.645,117.943v38.007
						c0,0.729-0.591,1.32-1.32,1.32h-14.08c-0.729,0-1.32-0.591-1.32-1.32v-37.896"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="68.995" y1="157.27" x2="68.995" y2="122.33"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M69.285,91.936"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M69.285,95.181"/>
					<circle fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="69.342" cy="79.75" r="9.417"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M53.5,125.672V97.167
						c0-1.105,0.895-2,2-2h26.833c1.105,0,2,0.895,2,2v28.469"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="69.342" y1="95.181" x2="69.342" y2="99.181"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="69.285" y1="102.5" x2="69.285" y2="113.439"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M126.645,117.943v38.007
						c0,0.729-0.591,1.32-1.32,1.32h-14.08c-0.729,0-1.32-0.591-1.32-1.32v-37.896"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="117.995" y1="157.27" x2="117.995" y2="122.33"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M118.285,91.936"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M118.285,95.181"/>
					<circle fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="118.342" cy="79.75" r="9.417"/>
					<path fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M102.5,125.672V97.167
						c0-1.105,0.895-2,2-2h26.833c1.105,0,2,0.895,2,2v28.469"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="118.342" y1="95.181" x2="118.342" y2="99.181"/>
					<line fill="none" stroke="#42B5C2" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="118.285" y1="102.5" x2="118.285" y2="113.439"/>
					<polyline fill="none" stroke="#FDB177" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="19.917,64.706
						19.917,54.447 117.917,54.447 117.917,64.706 "/>
					<line fill="none" stroke="#FDB177" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="69.285" y1="64.706" x2="69.342" y2="47.922"/>
					<polyline fill="none" stroke="#F85F82" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="54.395,21.81
						54.395,39.667 84.175,39.667 84.175,21.81 "/>
					<polyline fill="none" stroke="#F85F82" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="89.603,21.81
						69.285,3.189 48.968,21.81 "/>
					<path fill="none" stroke="#F85F82" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M60.101,20.005
						c-0.198-0.216,9.184-8.395,9.184-8.395l5.761,4.198"/>
				</svg>					
			</div>
		</div>
		<div class="large-8 large-pull-4 column">
			<h5 class="topic-header">Why Choose PreBit?</h5>
			<p class="text_">We strive to set ourselves apart from other platforms with our extensive list of benefits and participant bonuses. You get more freedom as a PreBit participant. We don’t tell you how to use your money or give advice—we’re just a secure platform for you to participate with other people in the community. The sharing algorithm utilized on our platform ensures that aid is distributed fairly among participants. The more you participate in the community, the more
you can benefit from it. The features at PreBit make it easy to see where your money is going, how it is being used, and how it is working for you.</p>
		</div>
	</div><!--row-->
</section>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/about.js'></script>
<?php get_footer(); ?>