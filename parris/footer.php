<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		endwhile;?>
		<footer id="colophon" class="site-footer" role="contentinfo" ng-class="{ 'hide': navOpen === true }" ng-hide="all === true">

			<div class="subscribe mobile-only" ng-class="{'opened': opened === true}">
				<a ng-click="opened = !opened; scrollNavDown();">
					<img src="<?php the_cfc_field('nav', 'subscribe'); ?>" alt="subscribe">
				</a>
				<!-- Begin MailChimp Signup Form -->
				<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
				<style type="text/css">

				</style>
				<div id="mc_embed_signup" class="mailchimp" ng-class="{'opened': opened === true}">
					<form action="//parrisgoebel.us13.list-manage.com/subscribe/post?u=5073a5cd96cee998cb4761a69&amp;id=00f02591f2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						
					<div class="mc-field-group">
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="enter e-mail address">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none;font-size: 10px;margin-top:-15px;"></div>
							<div class="response" id="mce-success-response" style="display:none; font-size:10px;margin-top:-15px;"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5073a5cd96cee998cb4761a69_00f02591f2" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="SUBMIT" name="subscribe" id="mc-embedded-subscribe" class="button" style="margin: 20px auto; background: transparent; border: 2px solid #FBFE0E; border-radius: 3px;font-family: 'archivo', Futura, Arial, sans-serif; font-size: 16px;padding: 0 20px;cursor: pointer;height: 36px;color: #FBFE0E;"></div>
					    </div>
					</form>
				</div>
				<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
				<!--End mc_embed_signup-->
			</div>

			<div class="site-info">
				ALL RIGHTS RESERVED / PARRIS GOEBEL 2016 /<br class="mobile-only"> <a href="http://wethem.us" target="_blank">BUILT BY <span>.US</span></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
