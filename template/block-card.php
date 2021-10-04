<?php if ( get_query_var( 'view' ) != 'print' ): ?>

	<!-- Card Block -->
	
	<div class="row justify-content-center wrapper-cards">
		
		<?php if ( have_rows('cards') ): ?>
		
			<?php while ( have_rows('cards') ): the_row(); ?>
		
				<?php $card = get_sub_field('card_content'); ?>
				
				<?php $link = ''; ?>
				
				<?php if ( $card['card_link'] ): ?>
				
					<?php $link = $card['card_link']; ?>
				
				<?php endif; ?>
				
				<div class="col-md-4 d-flex align-items-stretch">
		
					<div class="card text-center mb-4">
		
						<?php if ( $card['card_image'] ): ?>
		
							<?php $image = $card['card_image']; ?>
			
							<?php if ( isset( $link ) && $link != '' ): ?>
			
								<a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo wp_get_attachment_image( $image['id'], 'card-4', 0, array('class' => 'card-img-top img-fluid') ); ?></a>
			
							<?php else: ?>
			
								<?php echo wp_get_attachment_image( $image['id'], 'card-4', 0, array('class' => 'card-img-top img-fluid') ); ?>
			
							<?php endif; ?>
			
							<?php if ( $image['caption'] ): ?>
			
								<div class="caption d-inline-block"><?php echo $image['caption']; ?></div>
			
							<?php endif; ?>
			
						<?php endif; ?>
			
						<div class="card-body">
							
							<h5 class="card-title"><?php echo $card['card_title']; ?></h5>
							
							<p class="card-text mb-0"><?php echo $card['card_text']; ?></p>
			
							<?php if ( isset( $link ) && $link != '' ): ?>
			
								<div class="text-center mt-3">
								
									<a class="btn btn-primary" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $card['card_label']; ?></a>
								
								</div>
			
							<?php endif; ?>
			
						</div>
						
					</div>
					
				</div>
			
			<?php endwhile; ?>
		
		<?php endif; ?>
		
	</div>
	
	<!-- Card Block End -->
	
<?php endif; ?>