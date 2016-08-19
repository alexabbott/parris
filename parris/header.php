<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<style>
		@font-face { 
			font-family: archivo; src: url(<?php bloginfo('template_url'); ?>/fonts/ArchivoBlack-Regular.ttf);
		}
	</style>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82214109-1', 'auto');
  ga('send', 'pageview');

	</script>
	<?php wp_head(); ?>
</head>

<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
endwhile;?>
<body <?php body_class(); ?> style="background:url(<?php the_cfc_field('background-image', 'background-image-main'); ?>)" ng-app="parrisApp">
<div id="page" class="site" ng-controller="MainController">
	<div class="site-inner">

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="socials">
					<a href="<?php the_cfc_field('nav', 'facebook-link'); ?>" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="<?php the_cfc_field('nav', 'twitter-link'); ?>" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="<?php the_cfc_field('nav', 'instagram-link'); ?>" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="<?php the_cfc_field('nav', 'youtube-link'); ?>" target="_blank">
						<i class="fa fa-youtube-play"></i>
					</a>
					<a href="<?php the_cfc_field('nav', 'soundcloud-link'); ?>" target="_blank">
						<i class="fa fa-soundcloud"></i>
					</a>
				</div><!-- .site-branding -->

			</div><!-- .site-header-main -->

			
		</header><!-- .site-header -->

		<h2 class="nav-title" ng-click="navOpen = !navOpen">MENU</h2>
		<nav ng-class="{ 'show': navOpen === true }">
			<a href="/" class="home">
				<img src="<?php the_cfc_field('nav', 'homie'); ?>" alt="home">
			</a>
			<div class="left">
				<a href="<?php the_cfc_field('nav', 'music-link'); ?>" class="music">
					<img src="<?php the_cfc_field('nav', 'music'); ?>" show-gif alt="music" class="music1 animated infinite">
				</a>
				<a href="<?php the_cfc_field('nav', 'videos-link'); ?>" class="videos">
					<img src="<?php the_cfc_field('nav', 'videos'); ?>" show-gif alt="videos" class="animated infinite videos1">
				</a>
				<a href="<?php the_cfc_field('nav', 'photos-link'); ?>" class="photos">
					<img src="<?php the_cfc_field('nav', 'photos'); ?>" show-gif alt="photos" class="animated infinite blog1">
				</a>
			</div>
			<div class="right">
				<a href="<?php the_cfc_field('nav', 'tour-link'); ?>" class="tour">
					<img src="<?php the_cfc_field('nav', 'tour'); ?>" show-gif alt="tour" class="animated infinite tour1">
				</a>
				<a href="<?php the_cfc_field('nav', 'shop-link'); ?>" class="shop">
					<img src="<?php the_cfc_field('nav', 'shop'); ?>" show-gif alt="shop" class="animated infinite shop1">
				</a>
				<a href="<?php the_cfc_field('nav', 'mail-link'); ?>" class="mail">
					<img src="<?php the_cfc_field('nav', 'mail'); ?>" show-gif alt="mail" class="animated infinite mail1">
				</a>
			</div>
			<div class="subscribe">
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
		</nav>

		<div id="content" class="site-content">
