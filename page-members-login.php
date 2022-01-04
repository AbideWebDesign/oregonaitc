<?php /* Template Name: Members Login Page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="section section-alt">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<?php the_content(); ?>
					<?php if ( isset($_GET['redirect_to']) ): ?>
						<a href="<?php echo home_url(); ?>/signup/?redirect_to=<?php echo $_GET['redirect_to']; ?>" class="btn btn-primary">Signup</a>
					<?php else: ?>
						<a href="<?php echo home_url(); ?>/signup/" class="btn btn-primary">Signup</a>
					<?php endif; ?>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="card">
						<div class="card-body border">
							<?php echo do_shortcode('[wpmem_form login]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>	
<?php get_footer(); ?>	