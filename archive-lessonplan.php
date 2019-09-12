<?php session_start(); ?>
<?php get_header(); ?>
<?php get_template_part('library/library', 'top'); ?>
<div class="section section-alt py-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="card">
					<div class="card-body">
						<?php echo do_shortcode('[facetwp facet="search_lesson_plan"]'); ?>
						<h6 class="card-title">Lesson Plan Categories</h6>
						<?php echo do_shortcode('[facetwp facet="lesson_plan_categories"]'); ?>
						<h6 class="card-title">Grade Level</h6>
						<?php echo do_shortcode('[facetwp facet="lesson_plan_grades"]'); ?>
						<button class="btn btn-secondary btn-sm" onclick="FWP.reset()">Clear</button>
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<?php if (have_posts()): ?>
					<?php while (have_posts()): the_post(); ?>
						<?php get_template_part('library/library', 'search-item'); ?>						
					<?php endwhile; ?>
					<?php show_pagination_links(); ?>
				<?php else: ?>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title m-0 text-center"><?php _e('No resources were found.', 'oregonaitc'); ?></h3>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>

	
	