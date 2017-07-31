<?php 
global $pre_text;
$pre_text = 'OT ';

add_shortcode('sec_1', 'sec1_func');
function sec1_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btn'		=> 	'',
		'link'		=> 	'',
	), $atts));

	ob_start(); ?>

	<section class="section section_01" id="section1">
	    <div class="table">
	        <div class="cell text-center">
	            <h2 class="item xlarge-title text-center"><strong>Are you ready to take your finances to the next level?</strong></h2>
	            <h1 class="item page-title text-center"></h1>
	            <div class="item item-box">
	            <p class=" small-title text-center">No matter age and assets, you deserve financial advice</p>
	            <p class=" small-title text-center">dedicated to helping you reach your goals</p>
	            <p class=" small-title text-center">Book a free 1 hour Financial Kickstarter with a CFP®</p>
	        </div>
	            <a class="button round item" href="#" id="sign-up-button">Schedule Free Consultation</a>
	        </div>
	    </div>
	</section>         

	<?php

    return ob_get_clean();
}

add_shortcode('sec_2', 'sec2_func');
function sec2_func($atts, $content = null){
	extract(shortcode_atts(array(
		'btn'		=> 	'',
		'link'		=> 	'',
	), $atts));

	ob_start(); ?>

	<section class="section section_02" id="section2">
	    <div class="row large-collapse">
	        <h3 class="large-title text-center">The help and guidance you need to live for today and plan for tomorrow</h3>
	        <div class="large-6 large-push-3 column">
	            <div class="svg-icon">
	                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
	                     width="375px" height="375px" viewBox="0 0 375 375" enable-background="new 0 0 375 375" xml:space="preserve">
	                <circle display="none" opacity="0.5" fill="#1F2B5B" enable-background="new    " cx="248.667" cy="249.667" r="196.333"/>
	                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.5" cy="188.5" r="135.5"/>
	                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.5" cy="186.833" r="155.167"/>
	                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.167" cy="187.833" r="176.167"/>
	                <path fill="#FFFFFF" d="M147.133,222.27v-70.41c0-5.989,0.391-11.426,1.172-16.309s2.164-9.537,4.15-13.965
	                    c1.985-4.427,4.541-8.154,7.666-11.182s7.112-5.42,11.963-7.178c4.85-1.758,10.465-2.637,16.846-2.637
	                    c26.302,0,39.453,17.09,39.453,51.27v6.836h-14.16v-10.156c0-5.403-0.407-10.188-1.221-14.355
	                    c-0.814-4.166-2.165-7.925-4.053-11.279c-1.889-3.353-4.509-5.923-7.861-7.715c-3.354-1.79-7.406-2.686-12.158-2.686
	                    c-4.297,0-8.041,0.603-11.23,1.807c-3.19,1.206-5.778,2.849-7.764,4.932c-1.986,2.084-3.581,4.688-4.785,7.812
	                    c-1.205,3.125-2.035,6.396-2.49,9.814c-0.456,3.418-0.684,7.309-0.684,11.67v77.051c0,5.534,0.391,10.336,1.172,14.404
	                    c0.781,4.069,2.132,7.812,4.053,11.23c1.92,3.418,4.703,6.022,8.35,7.812c3.646,1.791,8.105,2.686,13.379,2.686
	                    c4.752,0,8.805-0.895,12.158-2.686c3.353-1.79,5.973-4.378,7.861-7.764c1.888-3.385,3.238-7.161,4.053-11.328
	                    c0.813-4.166,1.221-8.951,1.221-14.355v-11.523h14.16v8.203c0,5.925-0.358,11.328-1.074,16.211
	                    c-0.717,4.883-2.002,9.555-3.857,14.014c-1.855,4.46-4.248,8.203-7.178,11.23s-6.706,5.437-11.328,7.227
	                    c-4.623,1.79-9.961,2.686-16.016,2.686c-6.511,0-12.224-0.896-17.139-2.686c-4.916-1.79-8.92-4.199-12.012-7.227
	                    c-3.093-3.027-5.6-6.771-7.52-11.23c-1.921-4.459-3.256-9.114-4.004-13.965C147.507,233.68,147.133,228.26,147.133,222.27z"/>
	                <path fill="none" stroke="#4FBDCB" stroke-width="5" stroke-miterlimit="10" d="M54.871,106.253
	                    C82.1,61.531,131.313,31.667,187.5,31.667c58.492,0,109.426,32.365,135.868,80.164"/>
	                <path fill="none" stroke="#FDB077" stroke-width="5" stroke-miterlimit="10" d="M187.167,363.997
	                    C89.872,363.997,11,285.124,11,187.83c0-31.674,8.359-61.395,22.991-87.079"/>
	                <path fill="none" stroke="#F85F82" stroke-width="5" stroke-miterlimit="10" d="M305.024,121.012
	                    C316.459,140.883,323,163.928,323,188.5c0,74.835-60.665,135.5-135.5,135.5"/>
	                </svg>
	            </div>
	        </div><!--large-6-->
	        <div class="large-3 large-pull-6 column text-center">
	            <img src="<?php bloginfo('template_url')?>/images/yellow-pin.png" alt="" class="mob-icon"/>
	            <svg class="top-line-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
	                 width="336px" height="46.125px" viewBox="14.75 46.125 356 46.125" enable-background="new 14.75 46.125 356 46.125"
	                 xml:space="preserve">
	                <polyline fill="none" stroke="#45547A" stroke-width="3" stroke-miterlimit="10" points="52.875,54.333 300.333,54.333
	                    364.25,87.375 "/>
	                <circle fill="none" stroke="#FDB077" stroke-width="3" stroke-miterlimit="10" cx="31.5" cy="54.333" r="3.524"/>
	            </svg>
	            <h5 class="small-title text-center animate_">Send Help</h5>
	            <p class="text animate_">You're ready to start building your future, so the first step is creating a plan. We will work together with a goal oriented approach, to lead you on the right path to build the wealth you need for your life goals. </p>
	        </div><!--large-3-->
	        <div class="large-3 column text-center">
	            <img src="<?php bloginfo('template_url')?>/images/blue-pin.png" alt="" class="mob-icon"/>
	            <svg class="top-line-svg" style="margin-left: -90px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                 width="336px" height="46px" viewBox="19.75 46.25 347 46" enable-background="new 19.75 46.25 347 46" xml:space="preserve">
	                <polyline fill="none" stroke="#45547A" stroke-width="3" stroke-miterlimit="10" points="339.351,54.333 91.893,54.333
	                    27.976,87.375 "/>
	                <circle fill="none" stroke="#4FBDCB" stroke-width="3" stroke-miterlimit="10" cx="357.726" cy="54.333" r="3.524"/>
	            </svg>
	            <h5 class="small-title text-center animate_">Get Help</h5>
	            <p class="text animate_">You're ready to start building your future, so the first step is creating a plan. We will work together with a goal oriented approach, to lead you on the right path to build the wealth you need for your life goals. </p>
	        </div><!--large-3-->
	    </div>
	</section>        

	<?php

    return ob_get_clean();
}