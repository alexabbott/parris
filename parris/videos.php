<?php
/*
Template Name: Videos
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" videos ng-class="{'all': all === true}" ng-init="music = true; dance = true;">
			<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<img src="<?php the_cfc_field('nav', 'videos'); ?>" alt="videos" class="page-title animated infinite tada" ng-class="{ 'hide': navOpen === true }">
			<div class="filters" ng-class="{ 'hide': navOpen === true }">
				<div class="filter" ng-click="all = true; music = true; dance = false;" ng-class="{'selected': music === true && dance === false}">MUSIC</div>
				<div class="filter" ng-click="all = true; dance = true; music = false;" ng-class="{'selected': music === false && dance === true}">DANCE</div>
			</div>
			<div class="videos-container" ng-init="video = 1" ng-class="{ 'expanded': all === true, 'hide': navOpen === true }">
				<?php $args = array( 'post_type' => 'videos', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				endwhile;?>
				<div class="video-numbers" ng-class="{'invisible': all === true}">
					<?php foreach( get_cfc_meta( 'videos' ) as $key => $value ){ ?>
		    		<div class="video-number" ng-click="video = <?php echo $key + 1 ?>; url = '<?php the_cfc_field( 'videos','video-id', false, $key ); ?>'">
		    			<?php echo $key + 1 ?>
		    		</div>
		    	<?php }  ?>
		    </div>
	    	<?php foreach( get_cfc_meta( 'videos' ) as $key => $value ){ ?>
	    		<div class="video" ng-show="(video === <?php echo $key + 1 ?> && <?php the_cfc_field( 'videos','video-type', false, $key ); ?> === true) || (all === true && <?php the_cfc_field( 'videos','video-type', false, $key ); ?> === true)" ng-cloak>
		    		<div class="video-player">
		    				<iframe src="<?php the_cfc_field( 'videos','video-id', false, $key ); ?>?autoplay=0&controls=0&modestBranding=1&rel=0&showinfo=0&badge=0" frameborder="0" allowfullscreen></iframe>
		    			<img src="<?php the_cfc_field( 'videos','video-cover', false, $key ); ?>" class="video-cover" alt="Parris Goebel Video" ng-hide="play<?php echo $key + 1 ?> === true">
		    			<img src="http://alex-abbott.com/parris/wp-content/uploads/2016/08/play-pink.png" alt="play" class="play-button" ng-click="play<?php echo $key + 1 ?> = true" ng-hide="play<?php echo $key + 1 ?> === true">
		    		</div>
		    		<div class="video-title">
		    			<?php the_cfc_field( 'videos','video-name', false, $key ); ?>
		    		</div>
			    	<div class="share" ng-class="{ 'hide': navOpen === true, 'space': all === true }">
							<a ng-href="http://www.facebook.com/sharer/sharer.php?u=<?php the_cfc_field( 'videos','video-id', false, $key ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<a ng-href="http://www.twitter.com/share?url=<?php the_cfc_field( 'videos','video-id', false, $key ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							<div class="share-overlay">
								SHARE
							</div>
						</div>
		    	</div>
				<?php }  ?>
			</div>
			<div class="controls" ng-class="{ 'hide': navOpen === true }">
			  <div class="next-prev">
					<h3 class="prev" ng-click="video = video - 1" ng-hide="all === true || video === 1">PREV</h3>
					<h3 class="next" ng-click="video = video + 1" ng-hide="all === true || video === videoCount">NEXT</h3>
			  </div>
				<h4 class="view-all" ng-click="all = true" ng-hide="all === true">VIEW ALL</h4>
				<h4 class="view-all" ng-click="all = false; dance = true; music = true;" ng-show="all === true">VIEW LESS</h4>
			</div>

			<h4 class="page-label">
				<?php the_cfc_field('page-name', 'page-label'); ?>
			</h4>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>