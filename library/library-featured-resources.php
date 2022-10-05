<div class="card bg-primary mb-2">

	<div class="card-body">

		<h5 class="card-title text-white mb-0">Featured Resources</h5>

	</div>

</div>

<div class="card border">

	<div class="card-body">

		<div class="row justify-content-center align-items-stretch">

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100">

					<?php $post_object = get_field('featured_resources_1', 'options'); ?>

					<?php if($post_object): ?> 

						<?php $post = $post_object; ?>

						<?php setup_postdata($post); ?>

						<?php $terms = get_the_terms($post->id, 'resource_type'); ?>

						<?php $image = get_field('resource_image'); ?>

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

						<h5 class="card-title text-md m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						<div class="card-body p-0">

							<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

							<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

						</div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>							

				</div>

			</div>

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100">

					<?php $post_object = get_field('featured_resources_2', 'options'); ?>

					<?php if($post_object): ?> 

						<?php $post = $post_object; ?>

						<?php setup_postdata($post); ?>

						<?php $terms = get_the_terms($post->id, 'resource_type'); ?>

						<?php $image = get_field('resource_image'); ?>

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

						<h5 class="card-title text-md m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						<div class="card-body p-0">

							<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

							<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

						</div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>							

				</div>

			</div>	

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100">

					<?php $post_object = get_field('featured_resources_3', 'options'); ?>

					<?php if($post_object): ?> 

						<?php $post = $post_object; ?>

						<?php setup_postdata($post); ?>

						<?php $terms = get_the_terms($post->id, 'resource_type'); ?>

						<?php $image = get_field('resource_image'); ?>

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

						<h5 class="card-title text-md m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						<div class="card-body p-0">

							<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

							<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

						</div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>							

				</div>

			</div>

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100">

					<?php $post_object = get_field('featured_resources_4', 'options'); ?>

					<?php if($post_object): ?> 

						<?php $post = $post_object; ?>

						<?php setup_postdata($post); ?>

						<?php $terms = get_the_terms($post->id, 'resource_type'); ?>

						<?php $image = get_field('resource_image'); ?>

						<a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

						<h5 class="card-title text-md m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						<div class="card-body p-0">

							<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?>

							<?php if ($terms): ?><br>Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?><?php endif; ?></p>

						</div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>							

				</div>

			</div>

		</div>

	</div>

</div>