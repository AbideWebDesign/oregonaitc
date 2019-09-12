<?php

/* Template Name: Library Search Results */

global $post;

// retrieve our search query if applicable
$query = isset( $_REQUEST['swpquery'] ) ? sanitize_text_field( $_REQUEST['swpquery'] ) : '';

// retrieve our pagination if applicable
$swppg = isset( $_REQUEST['swppg'] ) ? absint( $_REQUEST['swppg'] ) : 1;

if ( class_exists( 'SWP_Query' ) ) {

	$engine = 'library_engine'; 

	$swp_query = new SWP_Query(
		array(
			's'      => $query,
			'engine' => $engine,
			'page'   => $swppg,
		)
	);

	// set up pagination
	$pagination = paginate_links( array(
		'format'  => '?swppg=%#%',
		'current' => $swppg,
		'total'   => $swp_query->max_num_pages,
	) );
}

get_header(); ?>

<?php get_template_part('library/library', 'top'); ?>

<div class="section section-alt section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 d-none d-lg-block">
				<div class="card">
					<div class="card-body">
						<?php echo do_shortcode('[facetwp facet="search_resource"]'); ?>
						<?php echo do_shortcode('[facetwp facet="categories"]'); ?>
						<?php echo do_shortcode('[facetwp facet="resource_category"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<?php if (!empty($query) && isset($swp_query) && !empty($swp_query->posts)): ?>
					<?php foreach ($swp_query->posts as $post): ?>
						<?php setup_postdata($post); ?>
						<?php get_template_part('library/library', 'search-item'); ?>
					<?php endforeach; ?>
				<?php else: ?>
					<p>No results found.</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				<?php if ($swp_query->max_num_pages > 1): ?>
					<div class="row justify-content-center align-items-center mb-2">
						<div class="col-12 text-center mb-3"><?php echo do_shortcode('[facetwp pager="true"]'); ?></div>
						<div class="col-2"><?php echo do_shortcode('[facetwp per_page="true"]'); ?></div>
						<div class="col-10 text-right text-sm">Viewing <?php echo do_shortcode('[facetwp counts="true"]'); ?></div>
					</div>				
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer();