<?php 
/* Template Name: Library Home Page */ 
session_start();
get_header();
?>
<?php get_template_part('library/library', 'top'); ?>
<div class="section section-sm">	
	<div class="container">	
		<div class="row">
			<!-- Start of featured box -->
			<div class="col-12 text-center">
				<h2 class="mb-4">Featured Resources</h2>
			</div>
		</div>
		<div class="row justify-content-center align-items-stretch">
			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">
				<div class="card w-100 border-0">
					<?php $post_object = get_field('featured_resources_1', 'options'); ?>
					<?php if($post_object): ?>
						<?php $post = $post_object; ?>
						<?php setup_postdata($post); ?>
						<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
						<?php $image = get_field('resource_image'); ?>
					    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>
					    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
					    <div class="card-body">
					    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?> | Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?></p>
					    </div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>	
				</div>						
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">
				<div class="card w-100 border-0">
				<?php $post_object = get_field('featured_resources_2', 'options'); ?>
				<?php if($post_object): ?>
					<?php $post = $post_object; ?>
					<?php setup_postdata($post); ?>
					<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
					<?php $image = get_field('resource_image'); ?>
				    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>
				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				    <div class="card-body">
				    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?> | Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?></p>
				    </div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
				</div>						
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">
				<div class="card w-100 border-0">
				<?php $post_object = get_field('featured_resources_3', 'options'); ?>
				<?php if($post_object): ?>
					<?php $post = $post_object; ?>
					<?php setup_postdata($post); ?>
					<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
					<?php $image = get_field('resource_image'); ?>
				    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>
				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				    <div class="card-body">
				    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?> | Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?></p>
				    </div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>							
			</div>
			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">
				<div class="card w-100 border-0">
				<?php $post_object = get_field('featured_resources_4', 'options'); ?>
				<?php if($post_object): ?>
					<?php $post = $post_object; ?>
					<?php setup_postdata($post); ?>
					<?php $terms = get_the_terms($post->id, 'resource_type'); ?>
					<?php $image = get_field('resource_image'); ?>
				    <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>
				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				    <div class="card-body">
				    	<p class="card-text text-sm mb-0">For Grades: <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?> | Type: <?php foreach($terms as $term) echo rtrim($term->name, "s"); ?></p>
				    </div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>	
				</div>						
			</div>												
		</div>
		<div class="row">
			<div class="col text-center mt-4">
				<a href="<?php echo home_url(); ?>/resource" class="btn btn-primary btn-lg">View All Resources</a>
			</div>
		</div>
	</div>
</div>	
<div class="section section-alt">
	<div class="container">
		<div class="row align-items-stretch">
			<div class="col-lg-3 d-flex flex-column mb-5 mb-lg-0">
				<div class="mb-3"><h2><?php the_field('library_intro_title'); ?></h2></div>
				<div class="lead-text mb-3"><?php the_field('library_intro_text'); ?></div>
				<div><a href="<?php the_field('library_intro_link'); ?>" class="btn btn-primary btn-lg"><?php the_field('library_intro_label'); ?></a></div>
			</div>
			<div class="col-lg-3 d-flex mb-4 mb-lg-0">
				<div class="card card-steps">
					<div class="card-icon mb-lg-5 mb-3 text-center"><i class="fas <?php the_field('library_intro_step_1_icon'); ?> fa-3x text-primary"></i></div>
					<div class="card-body text-center align-self-center">
						<h5 class="card-title"><?php the_field('library_intro_step_1_title'); ?></h5>
						<div class="card-text text-md"><?php the_field('library_intro_step_1_text'); ?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 d-flex mb-4 mb-lg-0">
				<div class="card card-steps">
					<div class="card-icon mb-lg-5 mb-3 text-center"><i class="fas <?php the_field('library_intro_step_2_icon'); ?> fa-3x text-primary"></i></div>
					<div class="card-body text-center align-self-center">
						<h5 class="card-title"><?php the_field('library_intro_step_2_title'); ?></h5>
						<div class="card-text text-md"><?php the_field('library_intro_step_2_text'); ?></div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 d-flex mb-4 mb-lg-0">
				<div class="card card-steps text-center">
					<div class="card-icon mb-lg-5 mb-3"><i class="fas <?php the_field('library_intro_step_3_icon'); ?> fa-3x text-primary"></i></div>
					<div class="card-body text-center align-self-center">
						<h5 class="card-title"><?php the_field('library_intro_step_3_title'); ?></h5>
						<div class="card-text text-md"><?php the_field('library_intro_step_3_text'); ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>	