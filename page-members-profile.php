<?php /* Template Name: Members Profile Page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="section section-alt">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3">
					<h3>Manage Profile</h3>
					<div class="card">
						<div class="card-body border">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>	