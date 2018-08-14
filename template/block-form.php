<?php $form_object = get_sub_field('your_form_field'); ?>
<!-- Form Content Block -->
<div class="basic-content-block">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<h2 class="mb-4"><?php $form_object['title']; ?></h2>
			<?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="true" description="true" ajax="true"]'); ?>
		</div>
	</div>
</div>
<!-- Basic Content Block End -->