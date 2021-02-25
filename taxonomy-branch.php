<?php session_start(); ?>

<?php get_header(); ?>

<?php get_template_part( 'library/library', 'top' ); ?>

<div class="section section-alt py-4">

	<div class="container">

		<div class="row">

			<div class="col-lg-3">

				<div class="card">

					<div class="card-body">

						<div class="mb-3 text-center">

							<button class="btn btn-primary btn-sm" onclick="FWP.refresh()"><?php _e('Apply'); ?></button>

							<button class="btn btn-secondary btn-sm" onclick="FWP.reset()"><?php _e('Clear'); ?></button>

						</div>

						<?php echo do_shortcode( '[facetwp facet="search_resource"]' ); ?>

						<h6 class="card-title"><?php _e('Resource Types'); ?></h6>

						<?php echo do_shortcode( '[facetwp facet="resource_type"]' ); ?>

						<h6 class="card-title"><?php _e('Resource Categories'); ?></h6>

						<?php echo do_shortcode( '[facetwp facet="resource_category"]' ); ?>

						<div class="text-center">

							<button class="btn btn-primary btn-sm" onclick="FWP.refresh()"><?php _e('Apply'); ?></button>

							<button class="btn btn-secondary btn-sm" onclick="FWP.reset()"><?php _e('Clear'); ?></button>

						</div>

					</div>

				</div>

				<?php get_template_part('library/library', 'promo'); ?>

			</div>

			<div class="col-lg-9">

				<div class="mb-1 text-right text-sm"><?php _e('Viewing'); ?> <?php echo do_shortcode( '[facetwp counts="true"]' ); ?></div>

				<?php if ( have_posts() ): ?>

					<?php while ( have_posts() ): the_post(); ?>					

						<?php get_template_part( 'library/library', 'search-item' ); ?>						

					<?php endwhile; ?>

					

				<?php else: ?>

					<div class="card">

						<div class="card-body">

							<h5 class="card-title m-0 text-center"><?php _e('No resources were found.', 'oregonaitc'); ?></h3>

						</div>

					</div>

				<?php endif; ?>

				<div class="row justify-content-center align-items-center mb-2">

					<div class="col-12 text-center mb-3"><?php echo do_shortcode( '[facetwp pager="true"]' ); ?></div>

					<div class="col-2"><?php echo do_shortcode( '[facetwp per_page="true"]' ); ?></div>

					<div class="col-10 text-right text-sm"><?php _e('Viewing'); ?> <?php echo do_shortcode( '[facetwp counts="true"]' ); ?></div>

				</div>

			</div>

		</div>

	</div>

</div>

<script>

	( function( $ ) {
		
	    $( document ).on( 'facetwp-loaded', function() {
	        
	        if ( FWP.loaded ) {
	            
	            $( 'html, body' ).animate( {
		            
	                scrollTop: $( '.facetwp-template' ).offset().top
	                
	            }, 500 );
	        
	        }
	    
	    } );
	   
	    $( function() {
        	
        	if ( 'undefined' !== typeof FWP ) {
            
            	FWP.auto_refresh = false;
        	
        	}
    	
    	} );
	
	} ) ( jQuery );
	
</script>

<?php get_footer(); ?>