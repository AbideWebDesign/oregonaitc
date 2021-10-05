<!-- Basic Content Block -->

<?php if ( get_query_var( 'view' ) == 'print' ): ?>

	<?php if ( ! get_sub_field('hide_on_print') ): ?>
			
		<div class="row">
	
			<div class="col-12">
	
				<h2 class="mb-4"><?php the_sub_field('section_title'); ?></h2>
	
				<?php the_sub_field('section_content'); ?>
	
			</div>
	
		</div>
					
	<?php endif; ?>

<?php else: ?>

	<div class="basic-content-block">
	
		<div class="row justify-content-center">
	
			<div class="col-lg-10">
	
				<h2 class="mb-4"><?php the_sub_field('section_title'); ?></h2>
	
				<?php the_sub_field('section_content'); ?>
	
			</div>
	
		</div>
	
	</div>
	
<?php endif; ?>

<!-- Basic Content Block End -->