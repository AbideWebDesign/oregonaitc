<?php /* Template Name: Shop Page */ ?>
<?php get_header(); ?>
<?php get_template_part('shop', 'top'); ?>
<div class="section section-alt">
	<div class="container">
		<?php if (have_posts()): ?>
			<?php while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>	