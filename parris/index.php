<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $args = array( 'post_type' => 'homepage', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
endwhile;?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<img src="<?php the_cfc_field('homepage-logo', 'goebel-logo'); ?>" class="main-logo hide" ng-class="{ 'hide': navOpen === true }">
			<h4 class="page-label">
				<?php the_cfc_field('homepage-logo', 'page-label'); ?>
			</h4>	
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		endwhile;?>
	<div class="socials mobile-only" ng-class="{ 'hide': navOpen === true }">
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
	</div>

<?php get_footer(); ?>
