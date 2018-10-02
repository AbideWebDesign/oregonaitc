<!-- Lead Text Block -->
<div class="lead-text-block">
	<div class="row justify-content-center align-items-center">
		<?php if(get_sub_field('lead_type') != 'plain'): ?>
			<div class="col-sm-5">
				<?php if(get_sub_field('lead_type') == 'image'): ?>
					<?php $image = get_sub_field('lead_image'); ?>
					<?php echo wp_get_attachment_image($image['id'], 'square', 0, array('class' => 'img-fluid rounded-circle mb-4 mb-sm-0')); ?>
					<?php if($image['caption']): ?>
						<div class="text-center">
							<div class="caption d-inline-block"><?php echo $image['caption']; ?></div>
						</div>
					<?php endif; ?>
				<?php else: ?>
					<div class="lead-large"><?php the_sub_field('lead_large_text'); ?></div>
					<?php if (get_sub_field('lead_button_label')): ?>
						<div class="mt-4">
							<a href="<?php the_sub_field('lead_button_link'); ?>" class="btn btn-primary"><?php the_sub_field('lead_button_label'); ?></a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="col-sm-6 offset-sm-1">
				<?php if(get_sub_field('lead_type') == 'image' || get_sub_field('lead_type') == 'plain'): ?>
					<h2 class="mb-4"><?php the_sub_field('lead_title'); ?></h2>
				<?php endif; ?>
				<div class="lead-text"><?php the_sub_field('lead_text'); ?></div>
				<?php if (get_sub_field('lead_button_label')): ?>
					<div class="mt-4">
						<a href="<?php the_sub_field('lead_button_link'); ?>" class="btn btn-primary"><?php the_sub_field('lead_button_label'); ?></a>
					</div>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<div class="col-sm-10">
				<h2 class="mb-4"><?php the_sub_field('lead_title'); ?></h2>
				<?php the_sub_field('lead_text'); ?>
				<?php if (get_sub_field('lead_button_label')): ?>
					<div class="mt-4">
						<a href="<?php the_sub_field('lead_button_link'); ?>" class="btn btn-primary"><?php the_sub_field('lead_button_label'); ?></a>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?> 
	</div>
</div>
<!-- Lead Text Block End -->