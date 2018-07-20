<?php get_header(); ?>
<?php get_template_part('shop', 'top'); ?>
<div class="section section-alt <?php echo (!is_archive()) ? 'section-sm' : ''; ?>">
	<div class="container">
		<?php if(is_archive()): ?>
		<div class="row justify-content-center">
			<div class="col-8 text-center">
				<h1 class="mb-4">Shop Agriculture Resources</h1>
				<p class="text-lead mb-5">Help promote agricultural education in Oregon! Purchase resources for Oregon classrooms or shop our online store.</p>	
			</div>
		</div>
		<?php endif; ?>
		<?php woocommerce_content(); ?>
	</div>
</div>
<?php get_footer(); ?>	