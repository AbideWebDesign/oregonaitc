<!-- Section Title Block -->
<div class="row justify-content-center mb-5">
	<div class="col-lg-8 text-center">
		<h2 class="mb-4"><?php the_sub_field('section_title'); ?></h2>
		<?php if(get_sub_field('section_lead_text')): ?>
			<div class="lead-text mb-0"><?php the_sub_field('section_lead_text'); ?></div>
		<?php endif; ?>
	</div>
</div>
<!-- Section Title Block End -->