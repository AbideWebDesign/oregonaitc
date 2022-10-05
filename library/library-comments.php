<?php if ( have_rows('resource_comments') ): ?>

	<div class="card bg-primary mb-2">

		<div class="card-body">

			<h5 class="card-title text-white m-0">Teacher Reviews</h5>

		</div>

	</div>	
	<div class="card border">
		
		<div class="card-body">	
			
			<?php while ( have_rows('resource_comments') ): the_row(); ?>
			 
				<div class="bg-light p-3 mb-4  border">
					
					<?php the_sub_field('comment_text'); ?>
					
					<div class="mt-3 text-sm"><em><?php the_sub_field('comment_name'); ?></em></div>
					
				</div>
				
			<?php endwhile; ?>
			 
		</div>

	</div>

<?php endif; ?>