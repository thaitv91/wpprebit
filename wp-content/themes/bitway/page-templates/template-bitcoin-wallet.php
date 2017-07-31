<?php
global $theme_option;
/*
 * Template Name: BITCOIN WALLET
 * Description: A Page Template with a Page Builder design.
 */
get_header(); ?>
<link rel='stylesheet' id='faq-css'  href='<?php bloginfo('template_url')?>/css/faq.css' type='text/css' media='all' />
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
        <p>At PreBit you will earn two types of commission, namely Referral Bonus and Manager Bonus. Every member has an equal chance to earn up to 20.5% of commission
		when referring other people to the system. Read below for more details about PreBit affiliate program.</p>
<p>You can also register to become PreBit Representative in your region by sending an email to support@pre-bit.org. As a Representative, you will earn 10% - 20.5% from your referrals immediately. You don't even need an active deposit to receive affiliate commission. However, the Representative program is not open to everybody. For you to become a Representative of PreBit, you need to have the ability to promote and support our project in your region through various means, like online/offline presentations, meetings with clients, a personal blog, etc. However, note that we never support SPAM nor any form of illegal promotion of our project.</p>
		<div class="large-12 column">
            <h2 class="title-bolero">Referral Bonus</h2>
        </div>
        <div class="large-6 column">
            <img src="<?php bloginfo('template_url')?>/images/refer-img.png" class="img-responsive">
        </div><!--large-4-->
		<div class="large-6 column">
            <div class="bar-bolero">
                <h2>1% - 10%</h2>
                <p>Referral Bonus</p>
            </div>
            <div class="content-bolero">
                <p><i class="fa fa-arrows" aria-hidden="true"></i> You will get referral bonus on every member you refer to PreBit (F1)</p>

                <p><i class="fa fa-arrows" aria-hidden="true"></i> Referral Bonus = % bonus x investment amount of your F1</p>

                <p><i class="fa fa-arrows" aria-hidden="true"></i> The referral bonus will increase as your level increases. For example, if you are at Legendary level and your F1 invests 1 BTC. The bonus you will get is 10% * 1 BTC = 0.1 BTC</p>

                <p><i class="fa fa-arrows" aria-hidden="true"></i> Your bonus is displayed in Bonus Balance under Get Help menu</p>
            </div>
        </div><!--large-8-->
		<div class="large-12 column">
            <h2 class="title-bolero">Referral Bonus based on member level</h2>     
            <img src="<?php bloginfo('template_url')?>/images/bolero-level.png" class="img-responsive">
            <div class="n-content-bolero">
                <p><i class="fa fa-arrows" aria-hidden="true"></i> Referral bonus = % bonus x investment amount of F1</p>

                <p><i class="fa fa-arrows" aria-hidden="true"></i> Referral bonus will increase as your level increases</p>
            </div>
        </div>
        <div class="large-12 column">
            <h2 class="title-bolero">Manager Bonus</h2>           
        </div>
        <div class="large-12 column">
            <div class="content-bantay">
                <div class="large-3 column">
                    <img src="<?php bloginfo('template_url')?>/images/bolero-bantay.png" class="img-responsive">
                </div>
                <div class="large-9 column">
                    <p>
                        Manager Bonus is the bonus you earn on your network. The more members you have in your network, the more money you will make. For example, if you refer A to PreBit, A refers B, then you will get manager bonus from both A and B. It’s even better when you can earn bonus up to 12 level deep of your network.
                    </p>
                </div>
            </div>
        </div>
        <div class="refer-bolero large-12 column">
            <h3>For example:</h3>
            <p class="not-1">You refer A to PreBit, A is your F1 and he is at level 1 of your network; A refers B then B is at level 2. Let’s say you are a Gold member, then your Manager Bonus can be calculated as follows:</p>
            <p>Manager Bonus = Investments of A * 2% + Investments of B * 1.5%</p>

            <p>Manager Bonus will increase as your level increases. You can earn Manager Bonus up to 12 level deep of your network. Your bonus is displayed in Bonus Balance under Get Help menu</p>
        </div>
        <div class="large-12 column bolero-table">
            <div class="table-responsive">
                <table class="plans-table2" border="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th><center>Level</center></th>
                            <th class="profit" placeholder="$0"><center>Bronze</center></th>
                            <th class="profit" placeholder="$0"><center>Silver</center></th>
                            <th class="profit" placeholder="$0"><center>Gold</center></th>
                            <th class="profit" placeholder="$0"><center>Platinum</center></th>
                            <th class="profit" placeholder="$0"><center>Diamond</center></th>
                            <th class="profit" placeholder="$0"><center>Master</center></th>
                            <th class="profit" placeholder="$0"><center>Grandmaster</center></th>
                            <th class="profit" placeholder="$0"><center>Legendary</center></th>

                        </tr>
                        <tr class="deposits">
                            <td rowspan="12"><h3>Manager<br> Bonus</h3></td>
                            <td><b style="color:#079AB5; font-size:18px">N/A</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L1 = 2%</b></td>
                        </tr>
                        <tr class="deposits">                            
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L2 = 1.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L4 = 1%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L4 = 1%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L4 = 1%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L4 = 1%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L5 = 1%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L5 = 1%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L5 = 1%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L6 = 0.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L6 = 0.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L6 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L7 = 0.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L7 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L8 = 0.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L8 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L9 = 0.5%</b></td>
                            <td><b style="color:#079AB5; font-size:18px">L9 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L10 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L11 = 0.5%</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px"></b></td>
                            <td><b style="color:#079AB5; font-size:18px">L12 = 0.5%</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
		<div class="large-12 column">
            </br><p><h2 class="title-bolero">Level Conditions</h2></p>       
        </div>
        <div class="large-12 column bolero-table">
            <div class="table-responsive">
                <table class="plans-table2" border="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <th class="profit" placeholder="$0"><center>Member Level</center></th>
                            <th class="profit" placeholder="$0"><center>Conditions</center></th>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Silver</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 1 BTC</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Gold</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 3 BTC and has 7F1 as Silver members</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Platinum</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 10 BTC  and has 20F1 as Silver (or 3F1 as Gold)</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Diamond</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 15 BTC and has 30F1 as Silver (or 3F1 as Platinum)</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Master</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 25  BTC and has 45F1 as Silver (or 4F1 as Diamond)</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Grandmaster</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 40 BTC and has 70F1 as Silver (or 5F1 asMaster)</b></td>
                        </tr>
                        <tr class="deposits">
                            <td><b style="color:#079AB5; font-size:18px">Legendary</b></td>
                            <td><b style="color:#079AB5; font-size:18px">Invests a total of 50 BTC and has 100F1 as Silver (or 10F1 as Grandmaster)</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p>
                <b>Note:</b> If you are already a Gold member, your total investment amount is less than 15 BTC and you have more than 20F1 then you can contact PreBit support to have your level increased.
            </p>
        </div>
    </div><!--row-->
</main>			
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<?php get_footer(); ?>