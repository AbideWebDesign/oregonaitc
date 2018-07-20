<!-- Lead Text Block -->
<div class="lead-text-block">
	<div class="row justify-content-center align-items-center">
		<?php if(get_sub_field('lead_type') != 'plain'): ?>
			<div class="col-sm-5">
				<?php if(get_sub_field('lead_type') == 'image'): ?>
					<?php $image = get_sub_field('lead_image'); ?>
					<?php echo wp_get_attachment_image($image['id'], 'square', 0, array('class' => 'img-fluid rounded-circle mb-4 mb-sm-0')); ?>
				<?php else: ?>
					<div class="lead-large"><?php the_sub_field('lead_large_text'); ?></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-6 offset-sm-1">
				<?php if(get_sub_field('lead_type') == 'image' || get_sub_field('lead_type') == 'plain'): ?>
					<h2 class="mb-4"><?php the_sub_field('lead_title'); ?></h2>
				<?php endif; ?>
				<div class="lead-text"><?php the_sub_field('lead_text'); ?></div>
			</div>
		<?php else: ?>
			<div class="col-sm-10">
				<h2 class="mb-4"><?php the_sub_field('lead_title'); ?></h2>
				<?php the_sub_field('lead_text'); ?>
			</div>
		<?php endif; ?> 
	</div>
</div>
<!-- Lead Text Block End -->