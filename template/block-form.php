<?php $form_object = get_sub_field('form'); ?>
<!-- Form Content Block -->
<div class="basic-content-block">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<?php if(get_sub_field('form_title')): ?>
				<h2 class="mb-3"><?php the_sub_field('form_title'); ?></h2>
			<?php endif; ?>
			<?php if(get_sub_field('form_description')): ?>
				<p class="mb-3"><?php the_sub_field('form_description') ?></p>
			<?php endif; ?>
			<?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
</div>
<!-- Basic Content Block End -->