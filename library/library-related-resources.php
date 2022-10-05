<div class="card bg-primary mb-2">

	<div class="card-body">

		<h5 class="card-title text-white mb-0">Related Resources</h5>

	</div>

</div>	

<div class="card border mb-2">

	<div class="card-body">

		<div class="row justify-content-center align-items-stretch">

			<?php $post_object = get_field('related_resource_1'); ?>

			<?php if($post_object): ?>

				<?php $post = $post_object; ?>

				<?php setup_postdata($post); ?>

				<?php if($post->post_type == "lessonplan"): ?>

					<?php $image = (get_field('image_1') ? get_field('image_1') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php else: ?>

					<?php $image = (get_field('resource_image') ? get_field('resource_image') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php endif; ?>					

				<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
				
				<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-items-end">

					<div class="card w-100">
						
						<?php if ( is_array($image) ): ?>
						
							<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>
							
						<?php else: ?>
						
							<a href="<?php the_permalink(); ?>"><img class="img-fluid mb-3 card-image-top" src="<?php echo $image; ?>" /></a>

						<?php endif; ?>
						
					    <h5 class="card-title text-md mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					    <div class="card-body p-0">

					    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?> 

					    	<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

					    </div>

						<?php wp_reset_postdata(); ?>

					</div>

				</div>

			<?php endif; ?>

			<?php $post_object = get_field('related_resource_2'); ?>

			<?php if($post_object): ?>

				<?php $post = $post_object; ?>

				<?php setup_postdata($post); ?>

				

				<?php if($post->post_type == "lessonplan"): ?>

					<?php $image = (get_field('image_1') ? get_field('image_1') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php else: ?>

					<?php $image = (get_field('resource_image') ? get_field('resource_image') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php endif; ?>

				<?php $terms = get_the_terms($post->id, 'resource_type'); ?>

				<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-items-end">

					<div class="card w-100">

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

					    <h5 class="card-title text-md mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					    <div class="card-body p-0">

					    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

					    	<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

					    </div>

						<?php wp_reset_postdata(); ?>

					</div>

				</div>

			<?php endif; ?>	

			<?php $post_object = get_field('related_resource_3'); ?>

			<?php if($post_object): ?>

				<?php $post = $post_object; ?>

				<?php setup_postdata($post); ?>
				
				<?php if($post->post_type == "lessonplan"): ?>

					<?php $image = (get_field('image_1') ? get_field('image_1') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php else: ?>

					<?php $image = (get_field('resource_image') ? get_field('resource_image') : home_url('/wp-content/uploads/2015/10/lessonplan.jpg')); ?>

				<?php endif; ?>
				
				<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
				
				<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-items-end">

					<div class="card w-100">

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

					    <h5 class="card-title text-md mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					    <div class="card-body p-0">

					    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

					    	<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

					    </div>

						<?php wp_reset_postdata(); ?>

					</div>

				</div>

			<?php endif; ?>

			<?php $post_object = get_field('related_resource_4'); ?>

			<?php if($post_object): ?>

				<?php $post = $post_object; ?>

				<?php setup_postdata($post); ?>
				
				<?php if ( $post->post_type == "lessonplan" ): ?>

					<?php $image = ( get_field('image_1') ? get_field('image_1') : home_url( '/wp-content/uploads/2015/10/lessonplan.jpg' ) ); ?>

				<?php else: ?>

					<?php $image = ( get_field('resource_image') ? get_field('resource_image') : home_url( '/wp-content/uploads/2015/10/lessonplan.jpg' ) ); ?>

				<?php endif; ?>
				
				<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
				
				<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex">

					<div class="card w-100">

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top') ); ?></a>

					    <h5 class="card-title text-md mb-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

					    <div class="card-body p-0">

					    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

					    	<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

					    </div>

						<?php wp_reset_postdata(); ?>

					</div>

				</div>

			<?php endif; ?>										

		</div>

	</div>

</div>