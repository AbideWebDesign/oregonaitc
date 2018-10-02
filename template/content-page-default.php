<?php if(have_rows('page_sections')): ?>

	<?php while (have_rows('page_sections')): the_row(); ?>
		
		<?php $settings = get_sub_field('section_settings'); ?>
		
		<div class="<?php echo $settings['section_padding']; ?> section-<?php echo $settings['section_background_color']; ?>">
			
			<div class="container">
		
				<?php if(have_rows('page_blocks')): ?>
					
					<?php while(have_rows('page_blocks')): the_row(); ?>
						
						<?php if(get_row_layout() == 'section_title_block'): ?>
							
							<?php get_template_part('template/block', 'section-title'); ?>
						
						<?php endif; ?>
						
						<?php if(get_row_layout() == 'lead_block'): ?>
							
							<?php get_template_part('template/block', 'lead'); ?>
						
						<?php endif; ?>
						
						<?php if(get_row_layout() == 'card_block'): ?>
							
							<?php get_template_part('template/block', 'card'); ?>
						
						<?php endif; ?>
						
						<?php if(get_row_layout() == 'side_navigation_block'): ?>
							
							<?php get_template_part('template/block', 'side-navigation'); ?>
						
						<?php endif; ?>
						
						<?php if(get_row_layout() == 'list_group_block'): ?>
							
							<!-- List Group Block -->
							<?php $x = 0; ?>
							<div class="row justify-content-center">
								<div class="col-md-10">
									<h2 class="text-center mb-4"><?php the_sub_field('list_group_title'); ?></h2>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-12">
									<?php $accordion_name = str_replace(' ', '-', $settings['section_name']); ?>
									<div id="accordion-<?php echo $accordion_name; ?>" class="accordion <?php if(get_sub_field('list_group_size') == "Small"): ?>accordion-sm<?php endif; ?>">
										<?php if (have_rows('list_group')): ?>
											<?php while (have_rows('list_group')): the_row(); ?>
												<?php $x ++; ?>
												<div class="card">
													<div class="card-header" id="heading<?php echo $x; ?>">
														<h5 class="mb-0">
															<button class="btn btn-link d-block collapsed" data-toggle="collapse" data-target="#collapse-<?php echo $accordion_name; ?>-<?php echo $x; ?>" aria-expanded="false" aria-controls="collapse<?php echo $x; ?>">
																<?php the_sub_field('list_item_title'); ?>
															</button>
														</h5>
													</div>
													<div id="collapse-<?php echo $accordion_name; ?>-<?php echo $x; ?>" class="collapse" aria-labelledby="heading<?php echo $x; ?>" data-parent="#accordion-<?php echo $accordion_name; ?>">
														<div class="card-body"><?php the_sub_field('list_item_text'); ?></div>
													</div>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<!-- List Group Block -->
						
						<?php endif; ?>
						
						<?php if(get_row_layout() == 'basic_content_block'): ?>
							
							<?php get_template_part('template/block', 'basic-content'); ?>
						
						<?php endif; ?>		
						
						<?php if(get_row_layout() == 'tabbed_content_block'): ?>
							
							<?php get_template_part('template/block', 'tabbed-content'); ?>
						
						<?php endif; ?>		
						
						<?php if(get_row_layout() == 'button_group_block'): ?>
							
							<?php get_template_part('template/block', 'button-group'); ?>
						
						<?php endif; ?>	

						<?php if(get_row_layout() == 'calendar_contestants_block'): ?>
							
							<?php get_template_part('template/block', 'calendar-contestants'); ?>
						
						<?php endif; ?>	

						<?php if(get_row_layout() == 'calendars_archive_block'): ?>
							
							<?php get_template_part('template/block', 'calendars-archive'); ?>
						
						<?php endif; ?>	
						
						<?php if(get_row_layout() == 'form_block'): ?>
							
							<?php get_template_part('template/block', 'form'); ?>
						
						<?php endif; ?>																						
						
					<?php endwhile; // while Page Block end ?>
					
				<?php endif; // if Page Block end ?>
			
			</div> <!-- container end -->
		
		</div> <!-- section end -->
		
	<?php endwhile; // while Page Sections end ?>

<?php endif; // if Page Sections end ?>
