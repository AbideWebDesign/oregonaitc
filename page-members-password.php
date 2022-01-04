<?php /* Template Name: Members Password Reset */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="section section-alt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-4">
					<div class="card">
						<div id="password-reset" class="card-body border">
							<?php echo do_shortcode('[wpmem_form password]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>	