<?php
/*
Template Name: Tour
*/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php $args = array( 'post_type' => 'global', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<img src="<?php the_cfc_field('nav', 'tour'); ?>" alt="tour" class="page-title animated infinite shake" ng-class="{ 'hide': navOpen === true }">

			<!-- <div id="insert"></div> -->

			<div class="tour-dates" ng-class="{ 'hide': navOpen === true }">
				
			</div>

			<?php $args = array( 'post_type' => 'tour', 'posts_per_page' => 10 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
			endwhile;?>
			<h4 class="page-label">
				<?php the_cfc_field('page-title', 'page-label'); ?>
			</h4>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
	<script>
		$.getJSON("http://api.songkick.com/api/3.0/artists/8837879/calendar.json?apikey=Ns2qFUBiFcIPtKFK&jsoncallback=?",
			function(data){
				for (var x = 0; x < data.resultsPage.results.event.length; x++) {
					year = data.resultsPage.results.event[x].start.date.split('-')[0].replace('20','');
					month = data.resultsPage.results.event[x].start.date.split('-')[1];
					day = data.resultsPage.results.event[x].start.date.split('-')[2];
					$('.tour-dates').append('<div class="tour-date"><div class="tour-date-format">'+month+'.'+day+'.'+year+'</div><div class="tour-date-location" >'+data.resultsPage.results.event[x].location.city.replace(', US', '')+'<br class="mobile-only"><span class="mobile-only">'+data.resultsPage.results.event[x].displayName.replace('Parri$ Goebel at ','').split('(')[0]+'</span></div><div class="tour-date-venue">'+data.resultsPage.results.event[x].displayName.replace('Parri$ Goebel at ','').split('(')[0]+'</div><a href="'+data.resultsPage.results.event[0].uri+'" target="_blank" class="tour-date-button">Get Tickets</a></div></div>');
				}
			});

	</script>

<?php get_footer(); ?>