<?php if ( get_sub_field('sponsors_display') ): ?>

	<div class="section-alt basic-content-block">
		
		<div class="mb-5 text-center">
		
			<img src="https://oregonaitc.org/wp-content/uploads/2020/11/sapling@2x.png" width="90" class="img-fluid" />
			
		</div>
		
		<h2 class="text-center"><?php the_sub_field('sponsor_title'); ?></h2>
		
		<?php if ( have_rows('sponsor_levels') ): ?>
		
			<?php while ( have_rows('sponsor_levels') ): the_row(); ?>
					
				<div class="p-3 text-center mb-3 mb-lg-4 mt-4 border-bottom">
					
					<h2 class="m-0 p-0 text-primary"><?php the_sub_field('sponsor_level_name'); ?></h2>
					
					<p class="lead-text mb-2"><?php the_sub_field('sponsor_level_amount'); ?></p>
					
				</div>
					
				<?php if ( have_rows('sponsors') ): ?>
									
					<div class="row justify-content-center">
					
					<?php while ( have_rows('sponsors') ): the_row(); ?>
						
						<div class="col-md-6 col-xl-4 mb-3 mb-lg-4 align-self-stretch">
							
							<div class="card card-sponsors h-100">
								
								<div class="d-flex flex-rows card-content h-100 p-5">
									
									<div class="align-self-center">
										
										<?php if ( get_sub_field('logo') ): ?>
											
											<a href="<?php the_sub_field('link'); ?>" target="_blank">
												
												<?php echo wp_get_attachment_image( get_sub_field('logo'), 'Large', false, array('class'=>'img-fluid') ); ?>
											
											</a>
										
										<?php endif; ?>
										
										<?php if ( get_sub_field('name') ):  ?>
										
											<a href="<?php the_sub_field('link'); ?>" target="_blank" class="text-dark">
												
												<h4 class="m-0 p-0 text-center"><?php the_sub_field('name'); ?></h4>
												
											</a>
										
										<?php endif; ?>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
						
					<?php endwhile; ?>
					
					</div>
				
				<?php endif; ?>
				
			<?php endwhile; ?>
			
		<?php endif; ?>

	</div>
		
<?php endif; ?>
	
	