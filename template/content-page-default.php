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
							
							<?php get_template_part('template/block', 'list-group'); ?>
						
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
						
					<?php endwhile; // while Page Block end ?>
					
				<?php endif; // if Page Block end ?>
			
			</div> <!-- container end -->
		
		</div> <!-- section end -->
		
	<?php endwhile; // while Page Sections end ?>

<?php endif; // if Page Sections end ?>
