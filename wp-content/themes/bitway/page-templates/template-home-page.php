<?php
global $theme_option;
/*
 * Template Name: HOME PAGE
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<style type="text/css">
    #live_transaction{
        height: 420px;
        overflow: hidden;
    }
</style>

<section style="background: #182556 url('<?php the_field('background_header'); ?>') no-repeat center;background-size: cover;" class="section section_01" id="section1">
    <div class="table">
        <div class="cell text-center">
            <h2 class="item xlarge-title text-center"><strong><?php the_field('title_header'); ?></strong></h2>
            <h1 class="item page-title text-center"></h1>
            <div class="item item-box">
            <p class=" small-title text-center"><?php the_field('sub_header_1'); ?></p>
            <p class=" small-title text-center"><?php the_field('sub_header_2'); ?></p>
            <p class=" small-title text-center"><?php the_field('sub_header_3'); ?></p>
        </div>
            <a class="button round item" href="<?php the_field('button_link'); ?>" id="sign-up-button">Create a PreBit Account</a>
        </div>
    </div>
</section>
<section class="section section_02" id="section2">
    <div class="row large-collapse">
        <h3 class="large-title text-center">You can earn up to 1% daily profit on your investments</h3>
        <div class="large-6 large-push-3 column">
            <div class="svg-icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="375px" height="375px" viewBox="0 0 375 375" enable-background="new 0 0 375 375" xml:space="preserve">
                <circle display="none" opacity="0.5" fill="#1F2B5B" enable-background="new    " cx="248.667" cy="249.667" r="196.333"/>
                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.5" cy="188.5" r="135.5"/>
                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.5" cy="186.833" r="155.167"/>
                <circle fill="none" stroke="#14285C" stroke-width="5" stroke-miterlimit="10" cx="187.167" cy="187.833" r="176.167"/>
                <style type="text/css">
                    .st0{fill:#FFFFFF;}
                </style>

                <path class="st0" d="M223.9,192.8c-2.9-1.7,0.2-2.7,1-3.6c14.1-15.9,11.1-39.1-6.6-50.7c-5.3-3.5-11.1-5.4-17.4-5.3
    c-3.6,0-4-1.4-3.9-4.4c0.2-4.7,0-10.1,0-14.1c-4,0-8,0-12,0c0,4-0.2,9.8,0.1,14.6c0.2,3.2-1,3.9-3.9,3.8c-8.3-0.1-8.3,0-8.3-8.4
    c0-3.3,0.1-7,0.2-10c-4,0-8,0-12,0c-1.1,4-0.5,9.7-0.4,14.5c0,3.2-0.9,4-4,3.9c-5.5-0.2-11.1-0.1-16.6,0c-1.4,0-3.2-0.8-4.2,0.8
    c0,0.3,0,0.7,0,1c0,39.3,0,78.7,0,118c0,0.3,0,0.7,0,1c6,2,11,0.7,16.4,0.8c8.2,0.3,8.2,0.1,8.3,8.3c0,3,0.2,5.9,0.3,8.9
    c0,0.1-0.1,0.2-0.1,0.2c0.1,0.2,0.2-0.5,0.3,0.5c3.7,0,7.3,0,11,0c0.3,0,0.7,0,1,0c-0.1-6,0-10.2-0.2-15.3c-0.1-2.3,0.8-2.6,2.9-2.7
    c9.3-0.5,9.3-0.6,9.3,8.6c0,3.1,0,5.4,0,9.4c4,0,8,0,12,0c0-4,0.1-6.2,0.1-9.3c0-8.6,0-8.5,8.4-8.6c11.5-0.1,20.7-4.7,27.9-13.7
    c3.1-3.9,4.4-8.8,6.4-13.1c0-4,0-8,0-12C236.7,206.3,232.6,198.1,223.9,192.8z M151.5,145.2c16.5,0.1,33-0.2,49.4,0.1
    c11.8,0.2,20.8,10,20.6,21.4c-0.2,11.5-9.5,20.7-21.2,20.9c-8,0.2-16,0-24,0c-8.3,0-16.6-0.1-25,0.1c-2.6,0-3.5-0.6-3.4-3.3
    c0.1-12,0.1-24,0-36C148,145.7,149.1,145.2,151.5,145.2z M208,242.2c-9.5,0.5-19.3,0.1-28.3,0.1c0,0,0,0.1,0,0.1
    c-9,0-18.4-0.1-27.6,0.1c-3,0.1-4.1-0.7-4-3.9c0.2-11.8,0.1-23.6,0-35.4c0-2.6,0.7-3.4,3.3-3.4c18.5,0.1,36.9-0.1,55.4,0.1
    c11.4,0.1,20.6,9.4,21,20.7C228.2,231.7,219.6,241.6,208,242.2z"/>

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
            <h5 class="small-title text-center animate_">Deposit</h5>
            <p class="text animate_">After you have created an account with PreBit, you can deposit and begin earning interest up to 1% daily.</p>
        </div><!--large-3-->
        <div class="large-3 column text-center">
            <img src="<?php bloginfo('template_url')?>/images/blue-pin.png" alt="" class="mob-icon"/>
            <svg class="top-line-svg" style="margin-left: -90px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="336px" height="46px" viewBox="19.75 46.25 347 46" enable-background="new 19.75 46.25 347 46" xml:space="preserve">
                <polyline fill="none" stroke="#45547A" stroke-width="3" stroke-miterlimit="10" points="339.351,54.333 91.893,54.333
                    27.976,87.375 "/>
                <circle fill="none" stroke="#4FBDCB" stroke-width="3" stroke-miterlimit="10" cx="357.726" cy="54.333" r="3.524"/>
            </svg>
            <h5 class="small-title text-center animate_">Withdraw</h5>
            <p class="text animate_">The PreBit community is ready to assist. After deposit through PreBit, you can ask for withdraw.</p>
        </div><!--large-3-->
    </div>
</section>
<section class="section section_03" id="section3">
    <div class="row">
        <h3 class="large-title text-center">Quotes about Bitcoin from Famous people</h3>
        <div class="small-12 column" id="live_transaction">
            <div class="line-trans animate_">

                <p>"I do think Bitcoin is the first [encrypted money] that has the potential to do something like change the world."</p>
				<span><b>Peter Thiel, Co-Founder of Paypal</b></span>
            
            </div>
            <div class="line-trans animate_">

                <p>"Bitcoin is a remarkable cryptographic achievement and the ability to create something that is not duplicable in the digital world has enormous value."</p>
				<span><b>Eric Schmidt, CEO of Google</b></span>
            
            </div>
            <div class="line-trans animate_">

                <p>"You can't stop things like Bitcoin. It will be everywhere and the world will have to readjust. World governments will have to readjust."</p>
				<span><b>John McAfee, Founder of McAfee</b></span>
            
            </div>			
            <div class="line-trans animate_">

                <p>"We have elected to put our money and faith in a mathematical framework that is free of politics and human error."</p>
				<span><b>Tyler Winklevoss, Co-creator of Facebook</b></span>
            
            </div>
            <div class="line-trans animate_">

                <p>"Bitcoin actually has the balance and incentives right, and that is why it is starting to take off" - Julian Assange."</p>
				<span><b>Founder of Wikileaks</b></span>
            
            </div>

        </div>
    </div>
</section>
<section class="section section_04" id="section4">
    <div class="row">
        <h3 class="large-title text-center">How Do I Get Started?</h3>    
        <div class="large-6 column">
            <div class="content-holder text-center left_">
                <img src="<?php bloginfo('template_url')?>/images/yellow-pin.png" alt="" class="mob-icon"/>
                <h5 class="small-title text-center seq_">STEP 1: Sign Up</h5>
                <p class="text seq_">You make the first move – Sign Up.<br>
                We will be there to greet you.</p>
                <div class="icon-holder table">
                    <div class="svg-wrap-bg"></div>
                    <div class="cell">
                        <svg  class="laptop" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="276px" height="152px" viewBox="121.5 163.5 276 152" enable-background="new 121.5 163.5 276 152" xml:space="preserve">
                        <path fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                        M127.129,299.581v5.213c0,3.45,2.797,6.247,6.247,6.247h249.258c3.45,0,6.247-2.797,6.247-6.247v-5.213H127.129z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                        M366.457,299.581V174.489c0-2.754-2.232-4.986-4.986-4.986H154.54c-2.754,0-4.986,2.232-4.986,4.986V299.58h216.903V299.581z"/>
                        <polygon fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                        259.044,179.621 259.044,179.621 259.044,179.621 "/>
                        <rect x="241.385" y="299.581" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="34.904" height="3.658"/>
                        <path fill="none" stroke="#496186" stroke-width="3" stroke-miterlimit="10" d="M182.411,242h151.557
                        c2.16,0,3.911,1.612,3.911,3.601V265.4c0,1.989-1.751,3.6-3.911,3.6H182.411c-2.16,0-3.911-1.611-3.911-3.6v-19.799
                        C178.5,243.612,180.251,242,182.411,242z"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="192.756" y1="251.554" x2="192.756" y2="258.554"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="196.256" y1="255.054" x2="189.256" y2="255.054"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="195.306" y1="252.655" x2="190.207" y2="257.452"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="195.154" y1="257.603" x2="190.358" y2="252.504"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="203.756" y1="251.554" x2="203.756" y2="258.554"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="207.256" y1="255.054" x2="200.256" y2="255.054"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="206.306" y1="252.655" x2="201.207" y2="257.452"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="206.154" y1="257.603" x2="201.358" y2="252.504"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="214.756" y1="251.554" x2="214.756" y2="258.554"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="218.256" y1="255.054" x2="211.256" y2="255.054"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="217.306" y1="252.655" x2="212.207" y2="257.452"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="217.154" y1="257.603" x2="212.358" y2="252.504"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="225.756" y1="251.554" x2="225.756" y2="258.554"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="229.256" y1="255.054" x2="222.256" y2="255.054"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="228.306" y1="252.655" x2="223.207" y2="257.452"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="228.154" y1="257.603" x2="223.358" y2="252.504"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="236.756" y1="251.554" x2="236.756" y2="258.554"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="240.256" y1="255.054" x2="233.256" y2="255.054"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="239.306" y1="252.655" x2="234.207" y2="257.452"/>
                        <line fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="239.154" y1="257.603" x2="234.358" y2="252.504"/>
                        <path fill="none" stroke="#496186" stroke-width="3" stroke-miterlimit="10" d="M182.227,203.834h151.557
                        c2.16,0,3.911,1.612,3.911,3.601v19.799c0,1.989-1.751,3.6-3.911,3.6H182.227c-2.16,0-3.911-1.611-3.911-3.6v-19.799
                        C178.316,205.446,180.067,203.834,182.227,203.834z"/>
                        <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                        318,256 320.5,258.5 327,252 "/>
                        <polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                        318,218.084 320.5,220.584 327,214.084 "/>
                        <circle fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="194.345" cy="214.334" r="3.167"/>
                        <path fill="none" stroke="#F06083" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                        M188.267,223.5L188.267,223.5c0-1.235,1.001-2,2.236-2h7.517c1.235,0,2.236,0.765,2.236,2l0,0"/>
                        </svg>
                    </div>
                </div>
            </div><!--content-holder-->
        </div>
        <div class="large-6 column">
            <div class="content-holder text-center right_">
                <div class="icon-holder table">
                    <div class="svg-wrap-bg"></div>
                    <div class="cell">
                        <svg class="graff_" version="1.1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px"
                             viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                            <g>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="3.1" y1="96.7" x2="96.9" y2="96.7"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="3.6" y1="14.4" x2="3.6" y2="97"/>
                                <path fill="none" stroke="#FDB177" stroke-width="2" stroke-miterlimit="10" d="M32,73H21.2c-1.7,0-3,1.3-3,3v10.9c0,1.7,1.3,3,3,3
                                    h10.9c1.7,0,3-1.4,2.9-3V76C35,74.3,33.7,73,32,73z"/>
                                <path fill="none" stroke="#F85F82" stroke-width="2" stroke-miterlimit="10" d="M56.3,51.8H45.4c-1.7,0-3,1.3-3,3v32
                                    c0,1.7,1.3,3,3,3h10.9c1.7,0,3-1.4,3-3v-32C59.2,53.2,57.9,51.8,56.3,51.8z"/>
                                <path fill="none" stroke="#52C4D0" stroke-width="2" stroke-miterlimit="10" d="M80.4,31H69.6c-1.7,0-3,1.3-3,3v52.8
                                    c0,1.7,1.3,3,3,3h10.9c1.7,0,3-1.4,3-3V34C83.4,32.3,82.1,31,80.4,31z"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="6.5" y1="29" x2="9.2" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="10.7" y1="29" x2="13.5" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="14.9" y1="29" x2="17.7" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="19.2" y1="29" x2="22" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="23.4" y1="29" x2="26.2" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="27.7" y1="29" x2="30.5" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="31.9" y1="29" x2="34.7" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="36.2" y1="29" x2="38.9" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="40.4" y1="29" x2="43.2" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="44.7" y1="29" x2="47.4" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="48.9" y1="29" x2="51.7" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="53.1" y1="29" x2="55.9" y2="29"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="6.5" y1="53.6" x2="9.2" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="10.7" y1="53.6" x2="13.5" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="14.9" y1="53.6" x2="17.7" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="19.2" y1="53.6" x2="22" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="23.4" y1="53.6" x2="26.2" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="27.7" y1="53.6" x2="30.5" y2="53.6"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="6.5" y1="74" x2="9.2" y2="74"/>
                                <line fill="none" stroke="#5F7191" stroke-miterlimit="10" x1="10.7" y1="74" x2="13.5" y2="74"/>
                                <polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="95.2,3.4 82.5,18.3 67.3,18.3 57.3,37.5
                                    43.2,37.5 32.7,60.4 16.9,60.4   "/>
                                <path fill="none" stroke="#FFFFFF" stroke-miterlimit="10" d="M89.1,3.9"/>
                                <polyline fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="88.6,3 95.5,3 95.5,9.7   "/>
                            </g>
                        </svg>
                    </div>
                </div>
                <img src="<?php bloginfo('template_url')?>/images/red-pin.png" alt="" class="mob-icon"/>
                <h5 class="small-title text-center seq_">STEP 2: Start Investing</h5>
                <p class="text seq_">Earning a consistent profit up to 1% daily on your Bitcoin investments.</p>
            </div>
        </div>
        <div class="small-12 column">
            <div class="content-holder text-center">
                <img src="<?php bloginfo('template_url')?>/images/blue-pin.png" alt="" class="mob-icon"/>
                <h5 class="small-title text-center seq_">STEP 3: Celebrate</h5>
                <p class="text seq_">Congratulations! You have taken the first step
                in achieving your financial goals.</p>
            </div>
        </div>
        <div class="sep-line">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="31px" height="224px" viewBox="0 0 31 224" enable-background="new 0 0 31 224" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#FDB177" stroke-width="3" stroke-miterlimit="10" d="
                    M15.422,10.422c1.933,0,3.5,1.567,3.5,3.5c0,1.933-1.567,3.5-3.5,3.5s-3.5-1.567-3.5-3.5C11.922,11.988,13.489,10.422,15.422,10.422
                    z"/>
                <line opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="17" y1="35" x2="17" y2="219.843"/>
                </svg>
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="31px" height="224px" viewBox="0 0 31 224" enable-background="new 0 0 31 224" xml:space="preserve">
                <path fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#F85F82" stroke-width="3" stroke-miterlimit="10" d="
                    M15.422,10.422c1.933,0,3.5,1.567,3.5,3.5c0,1.933-1.567,3.5-3.5,3.5s-3.5-1.567-3.5-3.5C11.922,11.988,13.489,10.422,15.422,10.422
                    z"/>
                <line opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="17" y1="35" x2="17" y2="219.843"/>
                </svg>
        </div>
    </div>
</section>
<section class="section section_05 clearfix" id="section5">
    <div class="poster-boxes clearfix">
        <?php
            $args = array( 
                'posts_per_page' => 1, 
                'offset'=> 1, 
                'category_name' => 'blog',
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $key => $post ) : setup_postdata( $post ); 
        ?>
        <div class="medium-6 column">
            <div class="poster table left_">
                <div class="cell">
                    <h5 class="medium-title"><?php the_title(); ?></h5>
                    <div class="text_"><?php echo wp_trim_words( get_the_content(), 30, '...' );?></div>
                    <a href="<?php the_permalink(); ?>" id="sign-up-button" class="button round">Read more </a>
                </div>
            </div>
        </div>
        <?php endforeach; 
        wp_reset_postdata();?>
        <?php
            $args = array( 
                'posts_per_page' => 1, 
                'offset'=> 0, 
                'category_name' => 'blog',
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $key => $post ) : setup_postdata( $post ); 
        ?>
        <div class="medium-6 column">
            <div class="poster table right_">
                <div class="cell">
                    <h5 class="medium-title"><?php the_title(); ?></h5>
                    <div class="text_"><?php echo wp_trim_words( get_the_content(), 30, '...' );?></div>
                    <a href="<?php the_permalink(); ?>" id="sign-up-button" class="button round">Read more </a>
                </div>
            </div>
        </div>
        <?php endforeach; 
        wp_reset_postdata();?>
    </div>    

</section>   
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/home.js'></script>
<?php get_footer(); ?>