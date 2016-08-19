<?php
/*
Template Name: Music
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" songs ng-class="{'all': allSongs === true}">
			<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<img src="<?php the_cfc_field('nav', 'music'); ?>" alt="music" class="page-title animated infinite pulse" ng-class="{ 'hide': navOpen === true }">

			<div class="songs-container" ng-init="song = 1" ng-class="{ 'expanded': allSongs === true, 'hide': navOpen === true }">
				<?php $args = array( 'post_type' => 'music', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				endwhile;?>

				<div class="song-numbers" ng-hide="allSongs === true">
					<?php foreach( get_cfc_meta( 'music' ) as $key => $value ){ ?>
		    		<div class="song-number" ng-click="song = <?php echo $key + 1 ?>; musicUrl = '<?php the_cfc_field( 'music','spotify-id', false, $key ); ?>'">
		    			<?php echo $key + 1 ?>
		    		</div>
		    	<?php }  ?>
		    </div>

				<?php foreach( get_cfc_meta( 'music' ) as $key => $value ){ ?>
	    		<div class="song" ng-show="song === <?php echo $key + 1 ?> || allSongs === true" ng-cloak>
		    		<div class="song-image">
		    			<img src="<?php the_cfc_field( 'music','song-image', false, $key ); ?>" class="music-cover" alt="Parris Goebel Music" ng-hide="play<?php echo $key + 1 ?> === true">
		    		</div>
		    		<div class="song-player">
		    			<iframe src="<?php the_cfc_field( 'music','spotify-id', false, $key ); ?>"></iframe>
		    		</div>
						<div class="share" ng-class="{ 'hide': navOpen === true }">
							<a ng-href="http://www.facebook.com/sharer/sharer.php?u=<?php the_cfc_field( 'music','spotify-id', false, $key ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							<a ng-href="http://www.twitter.com/share?url=<?php the_cfc_field( 'music','spotify-id', false, $key ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
							<div class="share-overlay">
								SHARE
							</div>
						</div>
						<a href="<?php the_cfc_field( 'music','buy-link', false, $key ); ?>" class="buy" target="_blank" ng-class="{ 'hide': navOpen === true }">
								BUY
						</a>
		    	</div>
				<?php }  ?>
			</div>
			<div class="controls" ng-class="{ 'hide': navOpen === true }">
			  <div class="next-prev">
					<h3 class="prev" ng-click="song = song - 1" ng-hide="allSongs === true || song === 1">PREV</h3>
					<h3 class="next" ng-click="song = song + 1" ng-hide="allSongs === true || song === songCount">NEXT</h3>
			  </div>
				<h4 class="view-all" ng-click="allSongs = true" ng-hide="allSongs === true">VIEW ALL</h4>
				<h4 class="view-all" ng-click="allSongs = false" ng-show="allSongs === true">VIEW LESS</h4>
			</div>


			<h4 class="page-label">
				<?php the_cfc_field('page-info', 'page-label'); ?>
			</h4>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
