<div class="row">
	<div class="col-12">
		<div class="d-flex flex-wrap justify-content-center">
			<?php $args = array('post_type' => 'calendar-contest', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'title'); ?>
			<?php $query = new WP_Query($args); ?>
			<?php while ($query->have_posts()): $query->the_post(); ?>
				<?php $image = get_field('cover_art'); ?>		
				<div class="col-md-3 col-sm-4 mb-5">
					<div class="card">
						<a href="<?php the_permalink(); ?>">
							<?php echo wp_get_attachment_image($image['id'], 'full', 0, array('class' => 'img-fluid card-image-top')); ?>
						</a>
						<div class="card-body text-center">
							<h5 class="card-title mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
</div>
