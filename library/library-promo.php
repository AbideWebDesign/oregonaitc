<?php if (!is_user_logged_in()): ?>
	<div class="card bg-secondary mt-3">
		<div class="card-body text-center">
			<h5 class="card-title text-white mb-3"><?php the_field('library_promo_title', 'options'); ?></h5>
			<a href="<?php the_field('library_promo_link', 'options'); ?>" class="btn btn-white btn-sm text-secondary"><?php the_field('library_promo_label', 'options'); ?></a>
		</div>
	</div>
<?php endif; ?>