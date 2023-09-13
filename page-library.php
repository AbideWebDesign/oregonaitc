<?php 

/* Template Name: Library Home Page */ 

get_header();

?>

<div class="section section-xs section-primary">

	<div class="container">

		<div id="search-form" class="row search-form-top justify-content-end align-items-right">

			<?php if ( is_user_logged_in() ): ?> 

				<?php $current_user = wp_get_current_user(); ?>

				<div class="col-lg-5 col-9 welcome d-flex flex-lg-row-reverse order-1 order-lg-2">

					<div class="d-flex flex-column align-self-center">

						<div class="text-white text-md"><?php _e('Welcome back,'); ?> <strong><?php echo $current_user->user_firstname; ?></strong> | <a href="/login/?a=logout" class="plain-link text-white"><?php _e('Log Out'); ?></a></div>

					</div>

				</div>

				<div class="col-lg-2 col-3 d-flex flex-row-reverse order-2 order-lg-3">

					<a href="<?php echo home_url(); ?>/place-hold" class="btn btn-white btn-sm"><i class="mr-1 fas fa-shopping-cart"></i> <span class="d-none d-md-inline-block"><?php _e('Library Cart'); ?></span></a>

				</div>

			<?php else: ?>

				<div class="col-lg-7 col-12 d-flex flex-lg-row-reverse order-1 order-lg-2">

					<div class="mr-3 mr-lg-0"><a href="<?php echo home_url(); ?>/signup" class="btn btn-white btn-sm"><?php _e('Sign up'); ?></a></div>

					<div class="mr-3"><a href="<?php echo home_url(); ?>/login" class="text-white"><?php _e('Log in'); ?></a></div>

				</div>

			<?php endif; ?>

		</div>

	</div>

</div>

<div class="section section-sm section-alt">

	<div class="container">

		<div class="row justify-content-center">

			<div class="col-12 col-sm-8">

				<h1><?php the_field('library_page_title'); ?></h1>

				<p class="lead"><?php the_field('library_lead_text'); ?></p>

				<?php if( ! is_user_logged_in() ): ?>

					<a href="<?php the_field('library_intro_link'); ?>" class="btn btn-primary btn-lg"><?php the_field('library_intro_label'); ?></a>

				<?php endif; ?>

			</div>

			<div class="col-8 col-sm-4 text-center mt-4">

				<ul class="list-unstyled">

					<li class="mb-2"><a href="<?php echo home_url(); ?>/library/oregon" class="btn btn-primary btn-lg btn-block"><?php _e('Oregon Resources'); ?></a></li>

					<li><a href="<?php echo home_url(); ?>/library/washington_county" class="btn btn-secondary btn-lg btn-block"><?php _e('Washington County Resources'); ?></a></li>

				</ul>

			</div>

		</div>		

	</div>

</div>

<div class="section section-sm">	

	<div class="container">	

		<div class="row">

			<!-- Start of featured box -->

			<div class="col-12 text-center">

				<h2 class="mb-4"><?php _e('Featured Resources'); ?></h2>

			</div>

		</div>

		<div class="row justify-content-center align-items-stretch">

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100 border-0">

					<?php $post_object = get_field('featured_resources_1', 'options'); ?>

					<?php if ( $post_object ): ?>

						<?php $post = $post_object; ?>

						<?php setup_postdata( $post ); ?>

						<?php $terms = get_the_terms( $post->id, 'resource_type' ); ?>

						<?php $image = get_field('resource_image'); ?>

					    <a href="<?php the_permalink(); ?>?branch=oregon"><?php echo wp_get_attachment_image( $image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top') ); ?></a>

					    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>?branch=oregon"><?php the_title(); ?></a></h5>

					    <div class="card-body">

					    	<p class="card-text text-sm mb-0"><?php _e('For Grades:'); ?> <?php the_field('minimum_age_group'); ?> - <?php the_field('maximum_age_group'); ?><?php if ( $terms ): ?> <?php _e(' | Type:'); ?> <?php foreach( $terms as $term ) echo rtrim( $term->name, 's' ); ?><?php endif; ?></p>

					    </div>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>	

				</div>						

			</div>

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100 border-0">

				<?php $post_object = get_field('featured_resources_2', 'options'); ?>

				<?php if ( $post_object ): ?>

					<?php $post = $post_object; ?>

					<?php setup_postdata( $post ); ?>

					<?php $terms = get_the_terms( $post->id, 'resource_type' ); ?>

					<?php $image = get_field('resource_image'); ?>

				    <a href="<?php the_permalink(); ?>?branch=oregon"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top') ); ?></a>

				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>?branch=oregon"><?php the_title(); ?></a></h5>

				    <div class="card-body">

				    	<p class="card-text text-sm mb-0"><?php _e('For Grades:'); ?> <?php the_field('minimum_age_group'); ?> <?php _e('-'); ?> <?php the_field('maximum_age_group'); ?><?php if ( $terms ): ?> <?php _e(' | Type:'); ?> <?php foreach( $terms as $term ) echo rtrim( $term->name, 's' ); ?><?php endif; ?></p>

				    </div>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>	

				</div>						

			</div>

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100 border-0">

				<?php $post_object = get_field('featured_resources_3', 'options'); ?>

				<?php if ( $post_object ): ?>

					<?php $post = $post_object; ?>

					<?php setup_postdata( $post ); ?>

					<?php $terms = get_the_terms( $post->id, 'resource_type' ); ?>

					<?php $image = get_field('resource_image'); ?>

				    <a href="<?php the_permalink(); ?>?branch=oregon"><?php echo wp_get_attachment_image($image['id'], 'medium', 0, array('class' => 'img-fluid mb-3 card-image-top')); ?></a>

				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>?branch=oregon"><?php the_title(); ?></a></h5>

				    <div class="card-body">

				    	<p class="card-text text-sm mb-0"><?php _e('For Grades:'); ?> <?php the_field('minimum_age_group'); ?> <?php _e('-'); ?> <?php the_field('maximum_age_group'); ?><?php if ( $terms ): ?> <?php _e(' | Type:'); ?> <?php foreach( $terms as $term ) echo rtrim( $term->name, 's' ); ?><?php endif; ?></p>

				    </div>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>

				</div>							

			</div>

			<div class="col-lg-3 col-sm-6 text-center mb-3 mb-lg-0 d-flex align-self-end">

				<div class="card w-100 border-0">

				<?php $post_object = get_field('featured_resources_4', 'options'); ?>

				<?php if ( $post_object ): ?>

					<?php $post = $post_object; ?>

					<?php setup_postdata( $post ); ?>

					<?php $terms = get_the_terms( $post->id, 'resource_type' ); ?>

					<?php $image = get_field('resource_image'); ?>

				    <a href="<?php the_permalink(); ?>?branch=oregon"><?php echo wp_get_attachment_image( $image['id'], 'medium', 0, array( 'class' => 'img-fluid mb-3 card-image-top' ) ); ?></a>

				    <h5 class="card-title m-0"><a href="<?php the_permalink(); ?>?branch=oregon"><?php the_title(); ?></a></h5>

				    <div class="card-body">

				    	<p class="card-text text-sm mb-0"><?php _e('For Grades:'); ?> <?php the_field('minimum_age_group'); ?> <?php _e('-'); ?> <?php the_field('maximum_age_group'); ?><?php if ( $terms ): ?> <?php _e(' | Type:'); ?> <?php foreach( $terms as $term ) echo rtrim( $term->name, 's' ); ?><?php endif; ?></p>

				    </div>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>	

				</div>						

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