<?php
global $theme_option;
/*
 * Template Name: INVESTMENT PLANS
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
<section class="cell-block section_s_02 testimonial-pager">
	<div class="row">
 		<div class="col-md-12">
			<p>
			</p>
			<ul>
				<li>PreBit is a community where members provide help by transferring money to other members and earn profits. PreBit does NOT collect your money.</li>
				<li>You can earn a minimum of 1% daily profit. Only Bitcoin is accepted.</li>
				<li>You can withdraw the profit at any time you want.</li>
				<li>Maturity is the time you have to wait until you can withdraw your Principal. Investment Duration is the maximum investment length.</li>
				<li>You can withdraw the money you have invested (Principal) when it has reached maturity or keep it active until the end of the investment period.</li>
				<li>You enter the amount you want to invest, the system will know which plan you choose.</li>
				<li>The minimum investment amount is 0.05 BTC. Minimum withdrawal amount is 0.005 BTC.</li>
				<li>You can earn up to 20.5% bonus from our affiliate program.</li>
			</ul>
			<div class="table-responsive">
				<table class="plans-table2" border="0" cellspacing="0">
					<tbody>
						<tr>
							<th><center>Investment Amount</center></th>
							<th class="profit" placeholder="$0"><center>Maturity</center></th>
							<th><center>Investment Duration</center></th>
							<th class="profit" placeholder="$0"><center>Maximum Daily Profit</center></th>
							<th><center>Principal Return</center></th>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">0.05 - 1</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">25</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">1.01 - 3</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">30</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1.1%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">3.01 - 6</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">45</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1.2%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">6.01 - 12</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">60</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1.3%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">12.01 - 20</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">90</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1.4%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>
						<tr class="deposits">
							<td><b style="color:#18A632;">Over 20</b> <b>BTC</b></td>
							<td><b style="color:#079AB5; font-size:18px">120</b> days</td>
							<td><b style="color:#079AB5;">365</b> days</td>
							<td style="font-size:18px;"><b style="color:#079AB5;">1.5%</b></td>
							<td style="font-size:18px;"><b style="color:#079AB5;">YES</b></td>
						</tr>						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.easing.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/jquery.gsap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/TweenLite.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/CSSPlugin.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url')?>/js/global.js'></script>
<?php get_footer(); ?>