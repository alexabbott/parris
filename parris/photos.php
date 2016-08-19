<?php
/*
Template Name: Photos
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<img src="<?php the_cfc_field('nav', 'photos'); ?>" alt="photos" class="page-title" ng-class="{ 'hide': navOpen === true }">

			<?php $args = array( 'post_type' => 'photos', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<h4 class="page-label">
				<?php the_cfc_field('page-naming', 'page-label'); ?>
			</h4>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>