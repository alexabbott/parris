<?php
/*
Template Name: Shop
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<img src="<?php the_cfc_field('nav', 'shop'); ?>" alt="shop" class="page-title animated infinite swing" ng-class="{ 'hide': navOpen === true }">

			<h2 ng-class="{ 'hide': navOpen === true }">Coming Soon</h2>

			<h4 class="page-label">
				<?php the_cfc_field('page-info', 'page-label'); ?>
			</h4>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>